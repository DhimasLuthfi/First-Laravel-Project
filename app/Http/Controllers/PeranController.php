<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peran;
use Illuminate\Support\Facades\Auth;

class PeranController extends Controller
{
    //
    public function tambah(Request $request, $id)
    {
        $request->validate([
            'nama_peran' => 'required',
            'jam_kerja' => 'required'
        ]);

        $iduser = Auth::id();

        $ulasan = new Ulasan;
 
        $ulasan->casts_id = $iduser;
        $ulasan->nama_peran = $request->nama_peran;
        $ulasan->jam_kerja = $request->jam_kerja;
        $ulasan->film_id = $id;
 
        $ulasan->save();

        return redirect('/film/'. $id);
    }
}
