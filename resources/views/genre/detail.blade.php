@extends('layouts.master')
@section('title')
    Halaman Detail Genre
@endsection
@section('content')
    
    <h3 class="text-primary">{{$genre->nama}}</h3>

    <div class="row">
        @forelse ($genre->films as $item)
            <div class="col-4">
                <div class="card">
                    <img src="{{asset('image/'.$item->poster)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title">{{$item->judul}}</h2>
                        <p class="card-text">Tahun rilis : {{$item->tahun}}</p>
                        <p class="card-text">{{ Str::limit($item->ringkasan, 100) }}</p>
                        <a href="/film/{{$item->id}}" class="btn btn-secondary btn-block btn-sm">Read Me</a>
                    </div>
                </div>
            </div>
        @empty
            <h3>belum ada Film yang punya Genre ini</h3>
        @endforelse
    </div>

    <a class="btn btn-outline-secondary" href="/genre" role="button">Back</a>


@endsection