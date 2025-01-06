<?php

namespace App\Filament\Resources\EmployeeResource\Pages;

use App\Filament\Resources\EmployeeResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;
class CreateEmployee extends CreateRecord
{
    protected static string $resource = EmployeeResource::class;
    protected function getCreatedNotificationTitle():?string
    {
        return 'Employess created';
    }
    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Employee Created')
            ->body('The employee was created successfully.');
    }

}
