<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ulasan extends Model
{
    use HasFactory;

    protected $table = 'ulasan';

    protected $fillable = ['film_id', 'user_id', 'review', 'rating'];

    public function film(){

        return $this->belongsTo(Film::class, 'film_id');
    }

    public function user(){

        return $this->belongsTo(User::class, 'user_id');
    }
}
