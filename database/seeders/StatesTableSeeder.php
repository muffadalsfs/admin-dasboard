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
        ['name' => 'State 1', 'country_id' => 1],
        ['name' => 'State 2', 'country_id' => 1],
        // Add more states as needed
    ]);
}

}
