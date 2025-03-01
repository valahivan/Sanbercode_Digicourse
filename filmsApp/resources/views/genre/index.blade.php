@extends('layout.master')

@section('title')
    Halaman Daftar Genre
@endsection

@section('content')
    <a href="/genre/create" class="btn btn-primary my-3">Tambahkan</a>
    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @forelse ($genres as $genre)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$genre->name}}</td>
                    <td>
                        <form action="/genre/{{$genre->id}}" method="post">
                            @csrf
                            @method('delete')
                            <a href="/genre/{{$genre->id}}" class="btn btn-sm btn-info">Detail</a>
                            <a href="/genre/{{$genre->id}}/edit" class="btn btn-sm btn-warning text-white">Edit</a>
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin mau dihapus?');">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <th scope="col">Tidak ada data genre</th>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection