@extends('layouts.master')
@section('title')
    halaman Update Profile
@endsection
@section('content')

<form action='/profile/{{$detailProfile->id}}' method='POST'>
    @csrf
    @method('put')

    <div class="form-group">
        <label>Nama user</label>
        <input type="text" class="form-control" id="umur"  value="{{$detailProfile->user->username}}" disabled>
    </div>
    <div class="form-group">
        <label>Email user</label>
        <input type="text" class="form-control" id="umur"  value="{{$detailProfile->user->email}}" disabled>
    </div>

    <div class="form-group">
        <label>Umur</label>
        <input type="number" class="form-control" id="umur" name="umur" value="{{$detailProfile->umur}}" >
    </div>
    @error('umur')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="form-group">
        <label >Alamat</label>
        <textarea name="alamat" class="form-control" id="alamat" cols="10" >{{$detailProfile->alamat}}</textarea>
    </div>
    @error('alamat')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="form-group">
        <label >Biodata</label>
        <textarea name="bio" class="form-control" id="bio" cols="10">{{$detailProfile->bio}}</textarea>
    </div>
    @error('bio')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    
    <button type="submit" class="btn btn-primary">Submit</button>
    <a class="btn btn-outline-secondary" href="/cast" role="button">Back</a>
</form>

@endsection