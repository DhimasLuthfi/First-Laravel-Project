<?php

namespace Database\Seeders;

use App\Models\Film;
use App\Models\Ulasan;
use App\Models\User;
use Illuminate\Database\Seeder;

class UlasanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::pluck('id', 'email');
        $films = Film::pluck('id', 'judul');

        $ulasan = [
            [
                'email' => 'reviewer1@refil.test',
                'film' => 'Iron Legacy',
                'rating' => 9,
                'review' => 'Aksi padat dengan visual yang sangat memuaskan.',
            ],
            [
                'email' => 'reviewer2@refil.test',
                'film' => 'Blue Room',
                'rating' => 8,
                'review' => 'Cerita emosional dan akting yang kuat.',
            ],
            [
                'email' => 'moviefan@refil.test',
                'film' => 'Laugh at Dawn',
                'rating' => 7,
                'review' => 'Ringan, lucu, dan cocok untuk tontonan santai.',
            ],
            [
                'email' => 'admin@refil.test',
                'film' => 'Shadow Street',
                'rating' => 8,
                'review' => 'Tegang dari awal sampai akhir dengan plot menarik.',
            ],
        ];

        foreach ($ulasan as $item) {
            $userId = $users[$item['email']] ?? null;
            $filmId = $films[$item['film']] ?? null;

            if (! $userId || ! $filmId) {
                continue;
            }

            Ulasan::updateOrCreate(
                [
                    'user_id' => $userId,
                    'film_id' => $filmId,
                ],
                [
                    'rating' => $item['rating'],
                    'review' => $item['review'],
                ]
            );
        }
    }
}
