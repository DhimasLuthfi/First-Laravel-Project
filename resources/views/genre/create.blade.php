
@extends('layouts.master')
@section('title')
    Halaman Tambah Genre
@endsection
@section('content')

<form action='/genre' method='POST'>
    @csrf
    <div class="form-group">
        <label for="nama">Genre Name</label>
        <input type="text" class="form-control" id="nama" name="nama" >
    </div>
    @error('nama')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <button type="submit" class="btn btn-primary">Submit</button>
    <a class="btn btn-outline-secondary" href="/cast" role="button">Back</a>
</form>

@endsection