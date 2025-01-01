<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'id'=>1,
            'name' => ' Admin',
            'email' => 'muffadal.sfs@gmail.com',
            'password' => Hash::make('password'), // Set a password for Super Admin
            
        ]);
    }
}
