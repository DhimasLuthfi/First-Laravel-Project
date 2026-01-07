<!-- 
Tugas 12 - Membuat web statis dengan laravel
Nama : Dhimas Luthfi Arnanda
Kelas : Laravel Web 
-->
@extends('layouts.master')
@section('title')
    Halaman Welcome
@endsection

@section('content')
    <h1>SELAMAT DATANG {{$firstname}} {{$lastname}}!</h1> <br> <br>
    <h2>Terima kasih telah bergabung di Sanberbook. Social Media kita bersama!</h2>
@endsection