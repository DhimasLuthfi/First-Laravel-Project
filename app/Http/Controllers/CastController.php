<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CastController extends Controller
{
    //
    public function create()
    {
        return view('casts.tambah');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|min:4',
            'umur' => 'required',
            'bio' => 'required'
        ]);

        DB::table('casts')->insert([
            'nama' => $request->input('nama'),
            'umur' => $request->input('umur'),
            'bio' => $request->input('bio'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        return redirect('/cast');
    }

    public function index()
    {
        $casts = DB::table('casts')->get();
 
        return view('casts.index', ['casts' => $casts]);
    }

    public function show($id)
    {
        $casts = DB::table('casts')->find($id);

        return view('casts.detail', ['casts' => $casts]);
    }

    public function edit($id)
    {
        $casts = DB::table('casts')->find($id);

        return view('casts.edit', ['casts' => $casts]);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama' => 'required|min:4',
            'umur' => 'required',
            'bio' => 'required'
        ]);

        DB::table('casts')
            ->where('id', $id)
            ->update(
            [
                'nama' => $request->input('nama'),
                'umur' => $request->input('umur'),
                'bio' => $request->input('bio'),
                'updated_at' => Carbon::now()
            ]);
        
        return redirect('/cast');
    }

    public function destroy($id)
    {
        DB::table('casts')->where('id', $id)->delete();

        return redirect('/cast');
    }
}
