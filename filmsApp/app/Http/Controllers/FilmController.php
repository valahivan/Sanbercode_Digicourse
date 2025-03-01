<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\Genre;
use Illuminate\Support\Facades\File;

class FilmController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        $films = Film::all();
        return view('film.index', ['films' => $films]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genres = Genre::all();
        return view('film.create', ['genres' => $genres]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:4',
            'summary' => 'required',
            'release_year' => 'required',
            'poster' => 'required|image|mimes:png,jpg,jpeg',
            'genre_id' => 'required|exists:genres,id',
        ],
        [
            'required' => 'Inputan :attribute tidak boleh kosong!',
            'mimes' => 'File :attribute harus berupa gambar!',
            'exists' => 'Inputan :attribute harus dipilih!',
            'min' => 'Inputan :attribute minimal 4 karakter1'
        ]);

        $fileName = time().'.'. $request->poster->extension();
        $request->poster->move(public_path('image'), $fileName);

        $film = new Film();
        $film->title = $request['title'];
        $film->summary = $request['summary'];
        $film->release_year = $request['release_year'];
        $film->poster = $fileName;
        $film->genre_id = $request['genre_id'];
        $film->save();

        return redirect('/film');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $film = Film::find($id);
        return view('film.detail', ['film' => $film]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $film = Film::find($id);
        $genres = Genre::all();
        return view('film.edit', ['film' => $film, 'genres' => $genres]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|min:4',
            'summary' => 'required',
            'release_year' => 'required',
            'poster' => 'image|mimes:png,jpg,jpeg',
            'genre_id' => 'required|exists:genres,id',
        ],
        [
            'required' => 'Inputan :attribute tidak boleh kosong!',
            'mimes' => 'File :attribute harus berupa gambar!',
            'exists' => 'Inputan :attribute harus dipilih!',
            'min' => 'Inputan :attribute minimal 4 karakter1'
        ]);

        $film = Film::find($id);
        $film->title = $request['title'];
        $film->summary = $request['summary'];
        $film->release_year = $request['release_year'];
        $film->genre_id = $request['genre_id'];
        $film->update();

        if($request->has('poster')){
            $path = 'image/';
            File::delete($path. $film->poster);
            $fileName = time().'.'.$request->poster->extension();
            $request->poster->move(public_path('image'), $fileName);
            $film->poster = $fileName;
            $film->save();
        }

        return redirect('/film');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $film = Film::find($id);
        File::delete('image/'.$film->poster);
        $film->delete();

        return redirect('/film');
    }
}

