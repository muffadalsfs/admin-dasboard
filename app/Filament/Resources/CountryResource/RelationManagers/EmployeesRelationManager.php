<?php

namespace App\Filament\Resources\CountryResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Select;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Illuminate\Support\Collection;
use App\Models\Country;
use App\Models\State;
use App\Models\City;
use App\Models\Department;

class EmployeesRelationManager extends RelationManager
{
    protected static string $relationship = 'employees';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('country_id')
                ->relationship(name: 'country', titleAttribute:'name')
                ->searchable()
                ->preload()
                ->live()
                ->afterStateUpdated(function(\Filament\Forms\Set $set) { $set('state_id', null);
                    $set('city_id', null);
                })

                    ->required(),
                    Forms\Components\Select::make('state_id')
                    ->options(fn(Get $get): Collection=>State::query()
                    ->where('country_id',$get('country_id'))
                    ->pluck('name','id'))
                    ->searchable()
                    ->preload()
                    ->live()
                    ->afterStateUpdated(fn(\Filament\Forms\Set $set) => $set('city_id', null))
                        ->required(),
                        Forms\Components\Select::make('city_id')
                        ->options(fn(Get $get): Collection=>City::query()
                    ->where('state_id',$get('state_id'))
                    ->pluck('name','id'))
                        ->searchable()
                        ->preload()
                        ->live()
                            ->required(),
                            Forms\Components\Select::make('department_id')
                            ->relationship(name: 'department', titleAttribute:'name')
                            ->searchable()
                            ->preload()
                                ->required(),
                Forms\Components\TextInput::make('first_name')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('last_name')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('middle_name')
                ->required()
                ->maxLength(255),
                Forms\Components\TextInput::make('zip_code')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('date_of_birth')
                ->native(false)
                ->displayFormat('d/m/y')
                    ->required(),
                Forms\Components\DatePicker::make('date_of_hire')
                ->native(false)
                ->displayFormat('d/m/y')
                    ->required(),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('first_name')
            ->columns([
                Tables\Columns\TextColumn::make('first_name')
                ->searchable(),
            Tables\Columns\TextColumn::make('last_name')
                ->searchable(),
            Tables\Columns\TextColumn::make('middle_name')
                ->searchable()
                ->toggleable(isToggledHiddenByDefault: true),
            Tables\Columns\TextColumn::make('zip_code')
                ->searchable(),
            Tables\Columns\TextColumn::make('date_of_birth')
                ->date()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
            Tables\Columns\TextColumn::make('date_of_hire')
                ->date()
                ->sortable(),
            Tables\Columns\TextColumn::make('created_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
            Tables\Columns\TextColumn::make('updated_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
