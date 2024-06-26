<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'role' => 'admin',
                'password' => '$2y$12$.TI7hlXRO7iVj3P5EfvyAuvx/ntZltPLqgtLghUhK0p7Rakbu.sdK'
            ],
            [
                'name' => 'User',
                'email' => 'user@gmail.com',
                'role' => 'user',
                'password' => '$2y$12$.TI7hlXRO7iVj3P5EfvyAuvx/ntZltPLqgtLghUhK0p7Rakbu.sdK'
            ]
        ]);
    }
}
