<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class GameController extends Controller
{
    //
    //menampilkan form untuk membuat data
    public function create()
    {
        return view('game.create');
    }

    //menyimpan data baru ke tabel game
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:45',
            'gameplay' => 'required',
            'developer' => 'required|max:45'
        ]);

        DB::table('game')->insert([
            'name' => $request->input('name'),
            'gameplay' => $request->input('gameplay'),
            'developer' => $request->input('developer'),
            'year' => $request->input('year')
        ]);
        
        return redirect('/game');
    }
    
    //menampilkan list data 
    public function index()
    {
        $game = DB::table('game')->get();
        
        return view('game.index', ['game' => $game]);
    }
    
    //menampilkan detail data pemain dengan id tertentu
    public function show($id)
    {
        $game = DB::table('game')->find($id);

        return view('game.detail', ['game' => $game]);
    }

    // menampilkan form untuk edit pemain dengan id tertentu
    public function edit($id)
    {
        $game = DB::table('game')->find($id);

        return view('game.edit', ['game' => $game]);
    }

    //menyimpan perubahan data pemain (update) untuk id tertentu
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|max:45',
            'gameplay' => 'required',
            'developer' => 'required|max:45'
        ]);

        DB::table('game')
            ->where('id', $id)
            ->update(
            [
                'name' => $request->input('name'),
                'gameplay' => $request->input('gameplay'),
                'developer' => $request->input('developer'),
                'year' => $request->input('year')
            ]);

        return redirect('/game');
    }

    //menghapus data pemain dengan id tertentu
    public function destroy($id)
    {
        DB::table('game')->where('id', $id)->delete();

        return redirect('/game');
    }
}
