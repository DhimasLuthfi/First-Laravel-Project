<!-- 
Tugas 15 - Berlatih CRUD di Laravel - tambah
Nama : Dhimas Luthfi Arnanda
Kelas : Laravel Web 
-->
@extends('layouts.master')
@section('title')
    Halaman Tambah Cast
@endsection
@section('content')

<form action='/cast' method='POST'>
    @csrf

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="form-group">
        <label for="nama">Cast name</label>
        <input type="text" class="form-control" id="nama" name="nama" >
    </div>
    <div class="form-group">
        <label for="umur">Umur</label>
        <input type="integer" class="form-control" id="umur" name="umur">
    </div>
    <div class="form-group">
        <label for="bio">Bio</label>
        <textarea name="bio" class="form-control" id="bio" cols="10"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a class="btn btn-outline-secondary" href="/cast" role="button">Back</a>
</form>

@endsection