@extends('layouts.master')
@section('title')
    Halaman Detail Film
@endsection
@section('content')
    <div class="row">
        <div class="col-8">
            <img src="{{asset('image/'.$film->poster)}}" class="card-img-top" style="height: 290px; width: 230px;" alt="..."><br><br>
            <h2 class="card-title">{{$film->judul}}</h2><br>
            <p class="card-text">Tahun rilis : {{$film->tahun}}</p>
            <p class="card-text">{{ $film->ringkasan}}</p>

            <hr>

            <form action="/ulasan/{{$film->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                <h5>Bagaimana menurutmu film tersebut ?</h5>
                <div class="form-group">
                    <textarea name="review" class="form-control my-3" cols="30"rows="10" placeholder="isi review"></textarea>
                </div>
                @error('review')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label>Rating(1-10)</label>
                    <input type="number" min="1" max="10" class="form-control col-md-1" name="rating">
                </div>
                @error('rating')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <input type="submit" value="kirim">
            </form>
            <hr>
        </div>
        <div class="col-4">
 
            <h3>List Ulasan</h3>
                @forelse ($film->ulasan as $item)
                <div class="media my-3 border p-3">
                    <img src="https://dummyimage.com/300/09f.png/fff" class="mr-3" style="border-radius : 50%;" width="50px" alt="...">
                    <div class="media-body ">
                        <h5 class="mt-0 text-primary">{{ $item->user->username }}</h5>
                        <p>{{ $item->review }}</p>
                    </div>
                </div>
                @empty
                    <h4>Belum ada ulasan</h4>
                @endforelse
        </div>
    </div>
    <a href="/film" class="btn btn-secondary btn-block btn-sm">Kembali</a>
    
@endsection