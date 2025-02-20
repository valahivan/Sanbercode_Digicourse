@extends('layout.master')

@section('title')
    Halaman Tambah Cast
@endsection

@section('content')
  <form action="/cast" method="POST">
    @csrf
    <div class="form-group">
      @error('name')
        <div class="alert alert-danger">
          {{$message}}
        </div>
      @enderror
      <label for="">Name :</label>
      <input type="text" name="name" class="form-control" autocomplete="off" value="{{old('name')}}">
    </div>
    <div class="form-group">
      @error('age')
        <div class="alert alert-danger">
          {{$message}}
        </div>
      @enderror
      <label for="">Age</label>
      <input type="text" name="age" class="form-control" autocomplete="off" value="{{old('age')}}">
    </div>
    <div class="form-group">
      @error('bio')
        <div class="alert alert-danger">
          {{$message}}
        </div>
      @enderror
      <label for="">Bio</label>
      <textarea name="bio" cols="30" rows="10" class="form-control" autocomplete="off">{{old('bio')}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Tambahkan</button>
  </form>
@endsection