<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CastSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();

        $casts = [
            [
                'nama' => 'Robert Downey Jr.',
                'umur' => 58,
                'bio' => 'Aktor Hollywood pemeran berbagai karakter ikonik.',
            ],
            [
                'nama' => 'Scarlett Johansson',
                'umur' => 39,
                'bio' => 'Aktris dengan pengalaman di genre aksi dan drama.',
            ],
            [
                'nama' => 'Keanu Reeves',
                'umur' => 59,
                'bio' => 'Aktor laga yang dikenal lewat peran berkarisma.',
            ],
            [
                'nama' => 'Emma Stone',
                'umur' => 35,
                'bio' => 'Aktris peraih penghargaan dengan peran yang variatif.',
            ],
        ];

        foreach ($casts as $cast) {
            DB::table('casts')->updateOrInsert(
                ['nama' => $cast['nama']],
                [
                    'umur' => $cast['umur'],
                    'bio' => $cast['bio'],
                    'created_at' => $now,
                    'updated_at' => $now,
                ]
            );
        }
    }
}
