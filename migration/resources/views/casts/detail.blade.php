@extends('layout.master')

@section('title')
    Halaman Detail
@endsection

@section('content')
    <h1>{{$casts->name}}</h1>
    <p>{{$casts->bio}}</p>

    <a href="/cast" class="btn btn-secondary">Back</a>
@endsection