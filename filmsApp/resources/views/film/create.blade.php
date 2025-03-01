@extends('layout.master')

@section('title')
    Halaman Tambah Film
@endsection

@section('content')
    <a href="/film" class="btn btn-secondary my-3">Kembali</a>
    <form action="/film" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            @error('title')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <label for="title" class="form-label">Title Film :</label>
            <input type="text" name="title" id="title" class="form-control" autocomplete="off" value="{{old('name')}}">
        </div>
        <div class="form-group">
            @error('summary')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <label for="summary" class="form-label">Summary :</label>
            <textarea name="summary" id="summary" cols="30" rows="5" class="form-control" autocomplete="off">{{old('summary')}}</textarea>
        </div>
        <div class="form-group">
            @error('release_year')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <label for="release_year" class="form-label">Release Year :</label>
            <input type="text" name="release_year" id="release_year" class="form-control" autocomplete="off" value="{{old('release_year')}}">
        </div>
        <div class="form-group">
            @error('poster')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <label for="poster" class="form-label">Poster FIlm :</label>
            <input type="file" class="form-control" name="poster" id="poster">
        </div>
        <div class="form-group">
            @error('genre_id')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <label for="genre_id" class="form-label">Genre :</label>
            <select name="genre_id" id="genre_id" class="form-control">
                <option selected>--Pilih Genre--</option>
                @forelse ($genres as $genre)
                    <option value="{{$genre->id}}">{{$genre->name}}</option>
                @empty
                    <option>Tidak Ada Genre</option>
                @endforelse
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Tambahkan</button>
    </form>
@endsection

