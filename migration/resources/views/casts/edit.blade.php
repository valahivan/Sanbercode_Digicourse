@extends('layout.master')

@section('title')
    Halaman Edit Cast
@endsection

@section('content')
  <form action="/cast/{{$casts->id}}" method="POST">
    @csrf
    @method('put')
    <div class="form-group">
      @error('name')
        <div class="alert alert-danger">
          {{$message}}
        </div>
      @enderror
      <label for="">Name :</label>
      <input type="text" name="name" class="form-control" autocomplete="off" value="{{$casts->name}}">
    </div>
    <div class="form-group">
      @error('age')
        <div class="alert alert-danger">
          {{$message}}
        </div>
      @enderror
      <label for="">Age</label>
      <input type="text" name="age" class="form-control" autocomplete="off" value="{{$casts->age}}">
    </div>
    <div class="form-group">
      @error('bio')
        <div class="alert alert-danger">
          {{$message}}
        </div>
      @enderror
      <label for="">Bio</label>
      <textarea name="bio" cols="30" rows="10" class="form-control" autocomplete="off">{{$casts->bio}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Ubah Data</button>
  </form>
@endsection