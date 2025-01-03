<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('countries')->delete();
DB::table('countries')->insert([
    ['name' => 'India'],
    ['name' => 'Australia'],
    ['name' => 'United States'],
    ['name' => 'Canada'],
    ['name' => 'Germany'],
    ['name' => 'France'],
    ['name' => 'Italy'],
    ['name' => 'Japan'],
    ['name' => 'South Korea'],
    ['name' => 'Brazil'],
    ['name' => 'Mexico'],
    ['name' => 'South Africa'],
    ['name' => 'China'],
    ['name' => 'United Kingdom'],
    ['name' => 'Russia'],
    ['name' => 'Spain'],
    ['name' => 'Sweden'],
    ['name' => 'Norway'],
    ['name' => 'New Zealand'],
    ['name' => 'Singapore'],
    ['name' => 'Malaysia'],
    ['name' => 'Thailand'],
    ['name' => 'Vietnam'],
    ['name' => 'Philippines'],
    ['name' => 'Indonesia'],
    ['name' => 'Saudi Arabia'],
    ['name' => 'United Arab Emirates'],
    ['name' => 'Turkey'],
    ['name' => 'Argentina'],
]);

    }
}
