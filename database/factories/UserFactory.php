<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition(): array
    {
        $dateOfBirth = $this->faker->date('Y-m-d', '2000-01-01');
        $age = now()->year - date('Y', strtotime($dateOfBirth));

        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'date_of_birth' => $dateOfBirth,
            'age' => $age,
            'address' => $this->faker->address,
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // password
            'remember_token' => Str::random(10),
        ];
    }
}

