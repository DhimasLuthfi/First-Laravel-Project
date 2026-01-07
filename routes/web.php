<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CastController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UlasanController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [DashboardController::class, 'utama']);
Route::get('/regis', [AuthController::class, 'regis']);
Route::post('/kirim', [AuthController::class, 'home']);

Route::get('/data-table', function()
{
    return view('page.data-table');
});

Route::get('/table', function()
{
    return view('page.table');
});

Route::middleware(['auth'])->group(function () {
    //cast
    //C => Create Data
    //masuk ke form tambah cast
    Route::get('/cast/create', [CastController::class, 'create']); 
    //untuk kirim data ke database atau tambah data ke database
    Route::post('/cast', [CastController::class, 'store']); 
    
    //R => Read Data
    //Tampil semua data
    Route::get('/cast', [CastController::class, 'index']);
    //detail cast berdasarkan id
    Route::get('/cast/{id}', [CastController::class, 'show']);
    
    //U => Update Data
    //form edit cast
    Route::get('/cast/{id}/edit', [CastController::class, 'edit']);
    //update data ke database berdasarkan id
    Route::put('/cast/{id}', [CastController::class, 'update']);
    
    //D => Delete Data
    //delete data berdasarkan id
    Route::delete('/cast/{id}', [CastController::class, 'destroy']);
   
});


//Quiz3
//C => Create Data
Route::get('/game/create', [GameController::class, 'create']);
Route::post('/game', [GameController::class, 'store']);     

//R => Read Data
Route::get('/game', [GameController::class, 'index']);
Route::get('/game/{id}', [GameController::class, 'show']); 

//U => Update Data
Route::get('/game/{id}/edit', [GameController::class, 'edit']);
Route::put('/game/{id}', [GameController::class, 'update']);

//D => Delete Data
Route::delete('/game/{id}', [GameController::class, 'destroy']);

Route::middleware(['auth'])->group(function () {

    //CRUD Genre
Route::resource('genre', GenreController::class);

//profile
Route::resource('profile', ProfileController::class)->only(['index', 'update']);

//ulasan
Route::post('/ulasan/{film_id}', [UlasanController::class, 'tambah']);



});

//CRUD Film
Route::resource('film', FilmController::class);


Auth::routes();


