<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genres = [
            ['nama' => 'Action'],
            ['nama' => 'Comedy'],
            ['nama' => 'Drama'],
            ['nama' => 'Horror'],
            ['nama' => 'Romance'],
            ['nama' => 'Thriller'],
            ['nama' => 'Adventure'],
            ['nama' => 'Fantasy'],
            ['nama' => 'Crime'],
            ['nama' => 'Mystery'],
            ['nama' => 'Musical'],
        ];

        foreach ($genres as $genre) {
            Genre::create($genre);
        }
    }
}
