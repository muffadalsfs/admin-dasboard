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
            ['name' => 'Country 1'],
            ['name' => 'Country 2'],
            // Add more countries as needed
        ]);
    }
}
