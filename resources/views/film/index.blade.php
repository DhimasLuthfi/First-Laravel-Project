@extends('layouts.master')
@section('title')
    Halaman List Film
@endsection

@section('content')

@auth
<a href="/film/create" class="btn btn-sm btn-primary mb-3">Tambah Film</a>
@endauth

<div class="row">
    @forelse ($film as $item)
    <div class="col-3">
        <div class="card h-100" >
            <img src="{{asset('image/'.$item->poster)}}" class="card-img-top rounded-lg" style="height: 290px; width: 290px; object-fit: cover;" alt="...">
            <div class="card-body d-flex flex-column">
                <h2 class="card-title">{{$item->judul}}</h2><br>
                <span class="badge badge-info">{{$item->genre->nama}}</span>
                <p class="card-text">Tahun rilis : {{$item->tahun}}</p>
                <p class="card-text flex-grow-1">{{ Str::limit($item->ringkasan, 100) }}</p>
                <div class="mt-auto">
                    <a href="/film/{{$item->id}}" class="btn btn-secondary btn-block btn-sm">Read Me</a>
                    @auth
                    <div class="row my-2">
                        <div class="col">
                            <a href="/film/{{$item->id}}/edit" class="btn btn-info btn-sm btn-block">Edit</a>
                        </div>
                        <div class="col">
                             <form action="/film/{{ $item->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger btn-sm btn-block" value="Delete">
                            </form>

                        </div>
                    </div>
                    @endauth
                </div>
            </div>
        </div>
    </div>
    @empty
        <h2>Tidak ada Postingan</h2>
    @endforelse
</div>

<!-- <div class="row">
    @forelse ($film as $item)
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <h3>{{$item->judul}}</h3>
                    <div class="row">
                        <div class="col">
                            <a href="/film/{{$item->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                        </div>
                        <div class="col">
                            <form action="/film/{{$item->id}}" method='POST'>
                                <a href="/film/{{$item->id}}" class="btn btn-info btn-sm">Detail</a>
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @empty
        <h2>Tidak ada Postingan</h2>
    @endforelse
</div> -->
@endsection
