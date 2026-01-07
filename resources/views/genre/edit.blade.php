@extends('layouts.master')
@section('title')
    Halaman Edit Genre
@endsection
@section('content')

<form action='/genre/{{$genre->id}}' method='POST'>
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
        <label for="nama">Genre Name</label>
        <input type="text" class="form-control" id="nama" name="nama" value="{{$genre->nama}}" aria-describedby=""emailHelp >
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection