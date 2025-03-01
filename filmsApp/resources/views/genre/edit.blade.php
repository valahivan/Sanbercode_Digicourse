@extends('layout.master')

@section('title')
    Halaman Edit Genre
@endsection

@section('content')
    <form action="/genre/{{$genre->id}}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            @error('name')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <label for="">Name Genre :</label>
            <input type="text" name="name" class="form-control" autocomplete="off" value="{{$genre->name}}">
        </div>
        <div class="form-group">
            @error('description')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <label for="">Description Genre :</label>
            <textarea name="description" cols="30" rows="10" class="form-control" autocomplete="off">{{$genre->description}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Edit Sekarang</button>
        <a href="/genre" class="btn btn-secondary">Batal</a>
    </form>
@endsection