<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    
    public function run(): void
    {
        User::factory()->count(10)->create(); // Membuat 50 pengguna dummy
    }
}
