# ReFilLaravel

Aplikasi web Laravel 10 untuk latihan CRUD dan relasi database dengan domain utama film. Project ini mencakup modul genre, cast, film, profil pengguna, ulasan film, dan modul game.

## Ringkasan Fitur

- Autentikasi bawaan Laravel UI (`Auth::routes()`).
- CRUD Cast (dengan proteksi auth).
- CRUD Genre (resource, proteksi auth).
- CRUD Film (index dan detail publik, create/update/delete butuh auth).
- Update profil user login.
- Tambah ulasan film oleh user login.
- CRUD Game.
- Seeder data awal untuk semua model di folder `app/Models`.

## Teknologi

- PHP 8.1+
- Laravel 10
- MySQL/MariaDB (atau DB lain yang didukung Laravel)
- Vite + Bootstrap 5

## Struktur Data Utama

Tabel inti dan relasi yang dipakai:

- `genre` 1..* `film`
- `user` 1..1 `profil`
- `user` 1..* `ulasan`
- `film` 1..* `ulasan`
- `film` 1..* `peran`
- `casts` 1..* `peran`
- `game` 1..* `platform`

## Instalasi

1. Clone project.
2. Install dependency backend.
3. Install dependency frontend.
4. Copy file environment.
5. Generate app key.
6. Konfigurasi database di `.env`.

```bash
composer install
npm install
cp .env.example .env
php artisan key:generate
```

## Menjalankan Migrasi dan Seeder

Jalankan migrasi:

```bash
php artisan migrate
```

Jalankan seeder data awal:

```bash
php artisan db:seed
```

Seeder yang dipanggil oleh `DatabaseSeeder`:

- `GenreSeeder`
- `CastSeeder`
- `UserSeeder`
- `ProfileSeeder`
- `FilmSeeder`
- `PeranSeeder`
- `UlasanSeeder`

## Akun Default Seeder

Jika seeder dijalankan, akun berikut akan dibuat:

- Email: `admin@refil.test` | Password: `password123`
- Email: `reviewer1@refil.test` | Password: `password123`
- Email: `reviewer2@refil.test` | Password: `password123`
- Email: `moviefan@refil.test` | Password: `password123`

## Menjalankan Project

Jalankan backend:

```bash
php artisan serve
```

Jalankan Vite (development):

```bash
npm run dev
```

Build aset production:

```bash
npm run build
```

## Routing Utama

### Publik

- `GET /` : halaman awal.
- `GET /film` : daftar film.
- `GET /film/{id}` : detail film.
- `GET /game` : daftar game.
- `GET /game/{id}` : detail game.
- `GET /regis` dan `POST /kirim` : halaman/form latihan register sederhana.

### Butuh Login

- Cast: `GET/POST/PUT/DELETE /cast...`
- Genre: resource `genre`
- Profile: `GET /profile` dan `PUT /profile/{id}`
- Ulasan: `POST /ulasan/{film_id}`
- Film create/edit/delete
- Auth bawaan: `/login`, `/register`, dll.

## Catatan

- Upload poster film disimpan ke folder `public/image`.
- Nama tabel user di project ini adalah `user` (bukan `users`).
- Sebagian modul menggunakan Query Builder (`DB::table`) dan sebagian lain menggunakan Eloquent.

## Testing

Menjalankan test:

```bash
php artisan test
```

---

Project ini dibuat untuk pembelajaran Laravel (migration, relasi, CRUD, auth, dan seeding).
