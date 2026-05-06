<?php

namespace Database\Seeders;

use App\Models\Film;
use App\Models\Genre;
use Illuminate\Database\Seeder;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $films = [
            [
                'judul' => 'Iron Legacy',
                'ringkasan' => 'Seorang penemu jenius harus melindungi kota dari ancaman teknologi liar.',
                'tahun' => '2020',
                'poster' => 'iron-legacy.jpg',
                'genre' => 'Action',
            ],
            [
                'judul' => 'Shadow Street',
                'ringkasan' => 'Detektif veteran menelusuri jejak pembunuh berantai di kota hujan.',
                'tahun' => '2021',
                'poster' => 'shadow-street.jpg',
                'genre' => 'Thriller',
            ],
            [
                'judul' => 'Blue Room',
                'ringkasan' => 'Dua sahabat menghadapi masa lalu saat reuni sekolah menengah.',
                'tahun' => '2022',
                'poster' => 'blue-room.jpg',
                'genre' => 'Drama',
            ],
            [
                'judul' => 'Laugh at Dawn',
                'ringkasan' => 'Komedian pemula berjuang menyeimbangkan mimpi dan realita hidupnya.',
                'tahun' => '2023',
                'poster' => 'laugh-at-dawn.jpg',
                'genre' => 'Comedy',
            ],
        ];

        $genreIds = Genre::pluck('id', 'nama');

        foreach ($films as $film) {
            $genreId = $genreIds[$film['genre']] ?? null;
            if (! $genreId) {
                continue;
            }

            Film::updateOrCreate(
                ['judul' => $film['judul']],
                [
                    'ringkasan' => $film['ringkasan'],
                    'tahun' => $film['tahun'],
                    'poster' => $film['poster'],
                    'genre_id' => $genreId,
                ]
            );
        }
    }
}
