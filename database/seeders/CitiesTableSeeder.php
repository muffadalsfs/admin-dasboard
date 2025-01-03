<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * If the cities dataset is large, consider breaking it into smaller chunks.
     */
  // CitiesTableSeeder.php
public function run()
{
    DB::table('cities')->delete();
    DB::table('cities')->insert([
        ['name' => 'Amaravati', 'state_id' => 1],
        ['name' => 'Hobart', 'state_id' => 1],
        // Add more cities as needed
    ]);
}

}
