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
    // State 1
    ['name' => 'Amaravati', 'state_id' => 1],
    ['name' => 'Hobart', 'state_id' => 1],
    ['name' => 'Sydney', 'state_id' => 1],
    ['name' => 'Melbourne', 'state_id' => 1],

    // State 2
    ['name' => 'Los Angeles', 'state_id' => 2],
    ['name' => 'San Francisco', 'state_id' => 2],
    ['name' => 'San Diego', 'state_id' => 2],
    ['name' => 'Sacramento', 'state_id' => 2],

    // State 3
    ['name' => 'Mumbai', 'state_id' => 3],
    ['name' => 'Delhi', 'state_id' => 3],
    ['name' => 'Bangalore', 'state_id' => 3],
    ['name' => 'Chennai', 'state_id' => 3],

    // State 4
    ['name' => 'London', 'state_id' => 4],
    ['name' => 'Manchester', 'state_id' => 4],
    ['name' => 'Birmingham', 'state_id' => 4],
    ['name' => 'Liverpool', 'state_id' => 4],

    // State 5
    ['name' => 'Tokyo', 'state_id' => 5],
    ['name' => 'Osaka', 'state_id' => 5],
    ['name' => 'Kyoto', 'state_id' => 5],
    ['name' => 'Hiroshima', 'state_id' => 5],

    // State 6
    ['name' => 'New York', 'state_id' => 6],
    ['name' => 'Buffalo', 'state_id' => 6],
    ['name' => 'Albany', 'state_id' => 6],
    ['name' => 'Rochester', 'state_id' => 6],

    // State 7
    ['name' => 'Paris', 'state_id' => 7],
    ['name' => 'Marseille', 'state_id' => 7],
    ['name' => 'Lyon', 'state_id' => 7],
    ['name' => 'Nice', 'state_id' => 7],
]);

}

}
