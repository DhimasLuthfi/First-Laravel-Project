<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Genre;


class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $genre = DB::table('genre')->get();

        return view('genre.index', ['genre' => $genre]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('genre.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'nama' => 'required'
        ]);

        DB::table('genre')->insert([
            'nama' => $request->input('nama'),
        ]);

        return redirect('/genre');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $genre = Genre::find($id);

        return view('genre.detail', ['genre' => $genre]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $genre = DB::table('genre')->find($id);

        return view('genre.edit', ['genre' => $genre]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validated = $request->validate([
            'nama' => 'required',
        ]);

        DB::table('genre')
            ->where('id', $id)
            ->update(
            [
                'nama' => $request->input('nama')
            ]);
        
        return redirect('/genre');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        DB::table('genre')->where('id', $id)->delete();

        return redirect('/genre');
    }
}
