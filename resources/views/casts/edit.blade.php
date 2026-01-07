<!-- 
Tugas 15 - Berlatih CRUD di Laravel - edit
Nama : Dhimas Luthfi Arnanda
Kelas : Laravel Web 
-->
@extends('layouts.master')
@section('title')
    Halaman Edit Cast
@endsection
@section('content')

<form action='/cast/{{$casts->id}}' method='POST'>
    @csrf
    @method('PUT')
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
        <label for="nama">Cast Name</label>
        <input type="text" class="form-control" id="nama" name="nama" value="{{$casts->nama}}" aria-describedby=""emailHelp >
    </div>
    <div class="form-group">
        <label for="umur">Umur</label>
        <input type="integer" class="form-control" id="umur" name="umur" value="{{$casts->umur}}">
    </div>
    <div class="form-group">
        <label for="bio">Bio</label>
        <textarea name="bio" class="form-control" id="bio" cols="10" >{{$casts->bio}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection