@extends('layout.master')

@section('title')
    Halaman Detail Film
@endsection

@section('content')
    <a href="/film" class="btn btn-secondary my-3">Kembali</a>
    <div class="row justify-content-evenly">
        <img src="{{asset('image/'.$film->poster)}}" class="img-fluid col-lg-4" style="height: 370px">
        <div class="col-lg-8">
            <h1 class="text-dark mt-lg-0 my-sm-3">{{$film->title}}</h1>
            <p class="text-justify">{{$film->summary}}</p>
        </div>
    </div>
    <hr>
    <h1 class="mb-2">List Review</h1>
    @forelse ($film->listReview as $item)
    <div class="card">
        <h5 class="card-header bg-dark text-white">{{$item->user->name}}</h5>
        <div class="card-body">
            <p class="card-text">{{$item->content}}</p>
            <span class="text-dark">Rating : {{$item->point}}</span>
        </div>
    </div>
    @empty
        <h4>Tidak ada review untuk film ini!</h4>
     @endforelse
    @auth
    <form action="/review/{{$film->id}}" method="post" class="mt-3">
        @csrf
        @if ($errors->any())
            <div class="alert alert-danger">
               <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
               </ul>
            </div>
        @endif
        <div class="form-group">
            <textarea name="content" cols="30" rows="5" class="form-control" placeholder="Berikan Review..">{{old('point')}}</textarea>
        </div>
        <div class="form-group">
            <input type="text" name="point" class="form-control" placeholder="Berikan Rating..." value="{{old('point')}}">
        </div>
        <button type="submit" class="btn btn-block btn-primary">Kirim</button>
    </form>
    @endauth
@endsection

