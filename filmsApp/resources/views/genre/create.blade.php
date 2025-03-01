@extends('layout.master')

@section('title')
    Halaman Tambah Genre
@endsection

@section('content')
    <a href="/genre" class="btn btn-secondary">Kembali</a>
    <form action="/genre" method="post">
        @csrf
        <div class="form-group">
            @error('name')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <label for="">Name Genre :</label>
            <input type="text" name="name" class="form-control" autocomplete="off" value="{{old('name')}}">
        </div>
        <div class="form-group">
            @error('description')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <label for="">Description Genre :</label>
            <textarea name="description" cols="30" rows="10" class="form-control" autocomplete="off">{{old('description')}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Tambahkan</button>
    </form>
@endsection