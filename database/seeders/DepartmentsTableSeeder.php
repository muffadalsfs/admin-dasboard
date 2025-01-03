<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   // DepartmentsTableSeeder.php
public function run()
{
    DB::table('departments')->delete();
    DB::table('departments')->insert([
        ['name' => 'HR'],
        ['name' => 'Engineering'],
        // Add more departments as needed
    ]);
}

}
