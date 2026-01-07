<!-- 
Tugas 15 - Berlatih CRUD di Laravel - detail
Nama : Dhimas Luthfi Arnanda
Kelas : Laravel Web 
-->
@extends('layouts.master')
@section('title')
    Halaman Detail Cast
@endsection
@section('content')

<h1 class="text-primary">{{$casts->nama}}</h1>
<p>{{$casts->umur}}</p>
<p>{{$casts->bio}}</p>

<a class="btn btn-outline-secondary" href="/cast" role="button">Back</a>


@endsection