<!-- 
Tugas 12 - Membuat web statis dengan laravel
Nama : Dhimas Luthfi Arnanda
Kelas : Laravel Web 
-->
@extends('layouts.master')
@section('title')
    Halaman Register
@endsection

@section('content')
<h1>Buat Account Baru!</h1>
    <form action="/kirim" method="POST">
        @csrf
        <h3>Sign Up Form</h3>
        <label for="first_name">First Name</label> <br> <br>
        <input type="text" name="first_name" id="first_name" placeholder="Enter your first name"> <br> <br>

        <label for="last_name">Last Name</label> <br> <br>
        <input type="text" name="last_name" id="last_name" placeholder="Enter your last name"> <br> <br>

        <label for="gender">Gender:</label> <br> <br>
        <input type="radio" name="gender" value="1"> Male <br>
        <input type="radio" name="gender" value="2"> Female <br>
        <input type="radio" name="gender" value="3"> Other <br> <br>

        <label for="natiolity">Nationality:</label> <br> <br>
        <select name="bahasa">
            <option value="1"> Indonesia</option>
            <option value="2"> Jermany</option>
            <option value="3"> Japanes</option>
            <option value="4"> Other</option>
        </select> <br> <br>

        <label for="language spoken">Language Spoken:</label> <br> <br>
        <input type="checkbox" name="language_spoken" value="1">Bahasa Indonesia <br>
        <input type="checkbox" name="language_spoken" value="2">English <br>
        <input type="checkbox" name="language_spoken" value="3">Other <br> <br>

        <label for="bio">Bio:</label><br> <br>
        <textarea name="bio" cols="35" rows="10" id="bio" placeholder="Describe yourself"></textarea><br>

        <input type="submit" value="Sign Up">
    </form>
@endsection