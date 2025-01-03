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
        // States of India
        ['name' => 'Andhra Pradesh', 'country_id' => 1],
        ['name' => 'Maharashtra', 'country_id' => 1],
        ['name' => 'Karnataka', 'country_id' => 1],
        ['name' => 'Tamil Nadu', 'country_id' => 1],
        ['name' => 'West Bengal', 'country_id' => 1],
    
        // States of the USA
        ['name' => 'California', 'country_id' => 2],
        ['name' => 'Texas', 'country_id' => 2],
        ['name' => 'Florida', 'country_id' => 2],
        ['name' => 'New York', 'country_id' => 2],
        ['name' => 'Illinois', 'country_id' => 2],
    
        // States of Australia
        ['name' => 'Tasmania', 'country_id' => 3],
        ['name' => 'Victoria', 'country_id' => 3],
        ['name' => 'New South Wales', 'country_id' => 3],
        ['name' => 'Queensland', 'country_id' => 3],
        ['name' => 'Western Australia', 'country_id' => 3],
    
        // States of Canada
        ['name' => 'Ontario', 'country_id' => 4],
        ['name' => 'British Columbia', 'country_id' => 4],
        ['name' => 'Quebec', 'country_id' => 4],
        ['name' => 'Alberta', 'country_id' => 4],
        ['name' => 'Nova Scotia', 'country_id' => 4],
    
        // States of the United Kingdom (Considered regions for UK)
        ['name' => 'England', 'country_id' => 5],
        ['name' => 'Scotland', 'country_id' => 5],
        ['name' => 'Wales', 'country_id' => 5],
        ['name' => 'Northern Ireland', 'country_id' => 5],
    
        // States of Germany
        ['name' => 'Bavaria', 'country_id' => 6],
        ['name' => 'North Rhine-Westphalia', 'country_id' => 6],
        ['name' => 'Baden-Württemberg', 'country_id' => 6],
        ['name' => 'Hesse', 'country_id' => 6],
        ['name' => 'Saxony', 'country_id' => 6],
    
        // States of Brazil
        ['name' => 'São Paulo', 'country_id' => 7],
        ['name' => 'Rio de Janeiro', 'country_id' => 7],
        ['name' => 'Bahia', 'country_id' => 7],
        ['name' => 'Minas Gerais', 'country_id' => 7],
        ['name' => 'Paraná', 'country_id' => 7],
    
        // States of South Africa
        ['name' => 'Gauteng', 'country_id' => 8],
        ['name' => 'KwaZulu-Natal', 'country_id' => 8],
        ['name' => 'Western Cape', 'country_id' => 8],
        ['name' => 'Eastern Cape', 'country_id' => 8],
        ['name' => 'Limpopo', 'country_id' => 8],
    ]);
    
}

}
