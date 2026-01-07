<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ulasan;
use Illuminate\Support\Facades\Auth;

class UlasanController extends Controller
{
    //
    public function tambah(Request $request, $id)
    {
        $request->validate([
            'review' => 'required',
            'rating' => 'required'
        ]);

        $iduser = Auth::id();

        $ulasan = new Ulasan;
 
        $ulasan->user_id = $iduser;
        $ulasan->review = $request->review;
        $ulasan->rating = $request->rating;
        $ulasan->film_id = $id;
 
        $ulasan->save();

        return redirect('/film/'. $id);
    }
}
