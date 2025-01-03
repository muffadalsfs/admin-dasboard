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
            // Add more countries as needed
        ]);
    }
}
