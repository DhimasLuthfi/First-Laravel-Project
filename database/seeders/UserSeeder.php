<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'username' => 'admin',
                'email' => 'admin@refil.test',
                'password' => Hash::make('password123'),
            ],
            [
                'username' => 'reviewer1',
                'email' => 'reviewer1@refil.test',
                'password' => Hash::make('password123'),
            ],
            [
                'username' => 'reviewer2',
                'email' => 'reviewer2@refil.test',
                'password' => Hash::make('password123'),
            ],
            [
                'username' => 'moviefan',
                'email' => 'moviefan@refil.test',
                'password' => Hash::make('password123'),
            ],
        ];

        foreach ($users as $user) {
            User::updateOrCreate(
                ['email' => $user['email']],
                [
                    'username' => $user['username'],
                    'password' => $user['password'],
                ]
            );
        }
    }
}
