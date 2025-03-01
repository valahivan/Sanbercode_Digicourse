@extends('layout.master')

@section('title')
    Halaman Daftar Film
@endsection

@section('content')
    @auth
    <a href="/film/create" class="btn btn-primary my-3">Tambahkan</a>
    @endauth
    <div class="row film-card">
        @forelse ($films as $film)
          <div class="card col-lg-3 col-sm-5">
            <img src="{{asset('image/'.$film->poster)}}" class="card-img-top img-fluid img-card">
            <div class="card-body">
              <h3 class="text-dark">{{Str::limit($film->title, 14)}}</h3>
              <span class="badge badge-pill badge-success mb-1">{{$film->genre->name}}</span>
              <p class="card-text">{{Str::limit($film->summary, 50)}}</p>
              <a href="/film/{{$film->id}}" class="btn btn-sm btn-block btn-secondary mb-2">Lihat</a>
              @auth
              <form action="/film/{{$film->id}}" method="post">
                @csrf
                @method('delete')
                <div class="row justify-content-between">
                    <div class="col-6">
                        <a href="/film/{{$film->id}}/edit" class="btn btn-sm btn-block btn-info">Edit</a>
                    </div>
                    <div class="col-6">
                        <button type="submit" class="btn btn-sm btn-block btn-danger" onclick="return confirm('Yakin mau dihapus?')">Delete</button>
                    </div>
                </div>
              </form>
              @endauth
            </div>
          </div>
        @empty
            
        @endforelse
    </div>
@endsection
