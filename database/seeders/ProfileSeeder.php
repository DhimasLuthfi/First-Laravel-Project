<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $profiles = [
            'admin@refil.test' => [
                'umur' => 27,
                'bio' => 'Administrator sistem ReFil.',
                'alamat' => 'Malang',
            ],
            'reviewer1@refil.test' => [
                'umur' => 24,
                'bio' => 'Suka mengulas film aksi dan thriller.',
                'alamat' => 'Surabaya',
            ],
            'reviewer2@refil.test' => [
                'umur' => 26,
                'bio' => 'Penikmat drama dan film indie.',
                'alamat' => 'Bandung',
            ],
            'moviefan@refil.test' => [
                'umur' => 22,
                'bio' => 'Penggemar film dari berbagai genre.',
                'alamat' => 'Jakarta',
            ],
        ];

        $users = User::whereIn('email', array_keys($profiles))->get(['id', 'email']);

        foreach ($users as $user) {
            Profile::updateOrCreate(
                ['user_id' => $user->id],
                $profiles[$user->email]
            );
        }
    }
}
