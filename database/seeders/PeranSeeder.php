<?php

namespace Database\Seeders;

use App\Models\Film;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();

        $films = Film::pluck('id', 'judul');
        $casts = DB::table('casts')->pluck('id', 'nama');

        $peran = [
            [
                'film' => 'Iron Legacy',
                'cast' => 'Robert Downey Jr.',
                'nama_peran' => 'Ethan Stark',
                'jam_kerja' => 120,
            ],
            [
                'film' => 'Shadow Street',
                'cast' => 'Keanu Reeves',
                'nama_peran' => 'Detective Cole',
                'jam_kerja' => 95,
            ],
            [
                'film' => 'Blue Room',
                'cast' => 'Emma Stone',
                'nama_peran' => 'Nadia',
                'jam_kerja' => 80,
            ],
            [
                'film' => 'Laugh at Dawn',
                'cast' => 'Scarlett Johansson',
                'nama_peran' => 'Maya',
                'jam_kerja' => 70,
            ],
        ];

        foreach ($peran as $item) {
            $filmId = $films[$item['film']] ?? null;
            $castId = $casts[$item['cast']] ?? null;

            if (! $filmId || ! $castId) {
                continue;
            }

            DB::table('peran')->updateOrInsert(
                [
                    'film_id' => $filmId,
                    'casts_id' => $castId,
                    'nama_peran' => $item['nama_peran'],
                ],
                [
                    'jam_kerja' => $item['jam_kerja'],
                    'created_at' => $now,
                    'updated_at' => $now,
                ]
            );
        }
    }
}
