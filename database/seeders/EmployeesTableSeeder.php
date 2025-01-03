<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->delete(); // Clear existing data
    
        $employees = [
            [
                'first_name' => 'John',
                'last_name' => 'Doe',
                'middle_name' => 'M',
                'zip_code' => '123456',
                'date_of_birth' => '1990-01-01',
                'date_of_hire' => '2020-06-15',
                'country_id' => 1, // Assuming 1 is a valid country_id from the countries table
                'state_id' => 1,   // Assuming 1 is a valid state_id from the states table
                'city_id' => 1,    // Assuming 1 is a valid city_id from the cities table
                'department_id' => 1, // Assuming 1 is a valid department_id from the departments table
            ],
            // Add more employees as needed
        ];
    
        DB::table('employees')->insert($employees);
    }
    
}
