
@extends('layouts.master')
@section('title')
    Halaman Tambah Film
@endsection

@section('content')
<form action='/film/{{$film->id}}' method='POST' enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="judul">Judul Film</label>
        <input type="text" class="form-control" id="judul" name="judul" value="{{$film->judul}}">
    </div>
    @error('judul')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
        <label for="ringkasan">Ringkasan Film</label>
        <textarea name="ringkasan" class="form-control" id="ringkasan" cols="10">{{$film->ringkasan}}</textarea>
    </div>
    @error('ringkasan')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
        <label for="tahun">Tahun</label>
        <input type="integer" class="form-control" id="tahun" name="tahun" value="{{$film->tahun}}">
    </div>
    @error('tahun')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
        <label for="poster">Poster Film</label>
        <input type="file" class="form-control" id="poster" name="poster" >
    </div>
    @error('poster')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    
    <div class="form-group">
        <label for="genre_id">Genre</label>
        <select class="form-control" id="genre_id" name="genre_id" >
            <option value="">--pilih genre--</option>
            @forelse ($genre as $item)
                @if ($item->id === $film->genre_id)
                    <option value="{{$item->id}}" selected> {{$item->nama}} </option>
                @else
                    <option value="{{$item->id}}"> {{$item->nama}} </option>
                @endif
            @empty
                <option value="">Tidak ada data genre</option>
            @endforelse
        </select>
    </div>
    @error('genre_id')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    
    <button type="submit" class="btn btn-primary">Submit</button>
    <a class="btn btn-outline-secondary" href="/cast" role="button">Back</a>
</form>

@endsection