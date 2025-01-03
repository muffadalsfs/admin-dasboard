<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
  // StatesTableSeeder.php
public function run()
{
    DB::table('states')->delete();
    DB::table('states')->insert([
        ['name' => 'Andhra Pradesh', 'country_id' => 1],
        ['name' => 'Tasmania', 'country_id' => 1],
        // Add more states as needed
    ]);
}

}
