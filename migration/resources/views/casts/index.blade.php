@extends('layout.master')

@section('title')
    Halaman List Casts
@endsection

@section('content')
<a href="/cast/create" class="btn btn-primary">Add Casts</a>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Name</th>
        <th scope="col">Age</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($casts as $cast )
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$cast->name}}</td>
            <td>{{$cast->age}}</td>
            <td>
                <form action="/cast/{{$cast->id}}" method="post">
                    @csrf
                    @method('delete')
                    <a href="/cast/{{$cast->id}}" class="btn btn-sm btn-info text-white">Detail</a>
                    <a href="/cast/{{$cast->id}}/edit" class="btn btn-sm btn-warning text-white">Edit</a>
                    <button type="submit" class="btn btn-sm btn-danger" onsubmit="return confirm('Yakin mau dihapus?')">Delete</button>
                </form>
            </td>
        </tr>
      @empty
          <tr>
            <th scope="row">Nama-nama Casts kosong</th>
          </tr>
      @endforelse
    </tbody>
  </table>
@endsection