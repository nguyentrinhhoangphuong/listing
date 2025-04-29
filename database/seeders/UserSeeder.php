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
                'name' => 'Supder Admin',
                'email' => 'admin@gmail.com',
                'password' => '$2y$10$Mr7VTmyKdmZagGGx4t//ce/Bw9VubKIWUkwX3HueZZ3nfz2LrcKI6',
                'user_type' => 'admin'
            ],
            [
                'name' => 'nthp',
                'email' => 'nthp@gmail.com',
                'password' => '$2y$10$Mr7VTmyKdmZagGGx4t//ce/Bw9VubKIWUkwX3HueZZ3nfz2LrcKI6',
                'user_type' => 'user'
            ]
        ]);
    }
}
