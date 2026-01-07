<!-- 
Tugas 15 - Berlatih CRUD di Laravel - index
Nama : Dhimas Luthfi Arnanda
Kelas : Laravel Web 
-->
@extends('layouts.master')
@section('title')
    Halaman Index Cast
@endsection
@section('content')

<a href="/cast/create" class="btn btn-sm btn-info my-3">Create</a>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($casts as $item)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$item->nama}}</td>
                <td>
                    <form action="/cast/{{$item->id}}" method='POST'>
                        <a href="/cast/{{$item->id}}" class="btn btn-info btn-sm">Detail</a>
                        <a href="/cast/{{$item->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                    </form>
                </td>
                
            </tr>
        @empty
            <p>No users</p>
        @endforelse
    </tbody>
</table>

@endsection