<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Gabriello Dwi',
            'email' => 'gabriellodwi@gmail.com',
            'date_of_birth' => '2004-01-02',
            'age' => 20,
            'address' => 'Solo, Jawa Tengah',
            'password' => Hash::make('password'),
        ]);
    }
}

