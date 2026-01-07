<!-- 
Tugas 12 - Membuat web statis dengan laravel
Nama : Dhimas Luthfi Arnanda
Kelas : Laravel Web 
-->
@extends('layouts.master')
@section('title')
    Halaman Utama
@endsection

@section('content')
<h1>SanberBook</h1>
    <h2>Social Media Developer Santai Berkualitas</h2>
    <p>Belajar dan Berbagi agar hidup ini semakin santai berkualitas</p>
    
    <h3>Benefit Join di SanberBook</h3>
    <ul>
        <li>Mendapatkan motivasi dari sesama developer</li>
        <li>sharing knowledge dari para mastah Sanber</li>
        <li>Dibuat oleh calon web developer terbaik</li>
    </ul>

    <h3>Cara Bergabung ke SanberBook</h3>
    <ol>
        <li>Mengunjungi Website ini</li>
        <li>Mendaftar di <a href="/regis">Form Sign Up</a></li>
        <li>Selesai!</li>
    </ol>
@endsection
