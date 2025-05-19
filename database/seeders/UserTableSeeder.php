<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin
        DB::table('users')->updateOrInsert(
            ['email' => 'admin@gmail.com'],
            [
                'name' => 'admin',
                'password' => Hash::make('12345'),
                'role' => 'admin'
            ]
        );

        // User
        DB::table('users')->updateOrInsert(
            ['email' => 'user@gmail.com'],
            [
                'name' => 'user',
                'password' => Hash::make('1234'),
                'role' => 'user'
            ]
        );
    }
}
