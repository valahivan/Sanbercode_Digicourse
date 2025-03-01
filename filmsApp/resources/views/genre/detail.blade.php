@extends('layout.master')

@section('title')
    Halaman Detail Genre
@endsection

@section('content')
    <h1 class="my-3">{{$genre->name}}</h1>
    <p class="text-justify">{{$genre->description}}</p>
    <a href="/genre" class="btn btn-secondary my-3">Kembali</a>

    <h3 class="text-dark my-3">List Films</h3>
    <div class="row film-card">
        @forelse ($genre->listFilm as $film)
          <div class="card col-lg-3 col-sm-5">
            <img src="{{asset('image/'.$film->poster)}}" class="card-img-top img-fluid img-card">
            <div class="card-body">
              <h3 class="text-dark">{{Str::limit($film->title, 13)}}</h3>
              <p class="card-text">{{Str::limit($film->summary, 50)}}</p>
              <a href="/film/{{$film->id}}" class="btn btn-sm btn-block btn-secondary mb-2">Lihat</a>
            </div>
          </div>
        @empty
            <h4>Tidak ada film untuk genre ini!</h4>
        @endforelse
    </div>
@endsection