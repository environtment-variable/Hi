<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'npm' => '5520124000',
            'username' => 'admin',
            'first_name' => 'Admin',
            'last_name' => 'Library',
            'email' => 'admin@mail.com',
            'password' => Hash::make('password123'),
        ]);
    }
}
