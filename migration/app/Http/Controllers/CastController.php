<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CastController extends Controller
{
    public function create(){
        return view('casts.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'age' => 'required|max:2',
            'bio' => 'required'
        ],
        [
            'required' => 'Inputan :attribute tidak boleh kosong!',
            'max' => 'Panjang karakter :attribute tidak boleh lebih dari 3!',
        ]
        );

        DB::table('casts')->insert([
            'name' => $request['name'],
            'age' => $request['age'],
            'bio' => $request['bio']
        ]);

        return redirect('/cast');
    }

    public function index(){
        $casts = DB::table('casts')->get();
        return view('casts.index', ['casts' => $casts]);
    }

    public function show($id){
        $casts = DB::table('casts')->find($id);
        return view('casts.detail', ['casts' => $casts]);
    }

    public function edit($id){
        $casts = DB::table('casts')->find($id);
        return view('casts.edit', ['casts' => $casts]);
    }

    public function update(Request $request,  $id){
        $request->validate([
            'name' => 'required',
            'age' => 'required|max:2',
            'bio' => 'required'
        ],
        [
            'required' => 'Inputan :attribute tidak boleh kosong!',
            'max' => 'Panjang karakter :attribute tidak boleh lebih dari 3!',
        ]
        );

        DB::table('casts')->where('id', $id)->update([
            'name' => $request['name'],
            'age' => $request['age'],
            'bio'=> $request['bio']
        ]);

        return redirect('/cast');
    }

    public function destroy($id){
        DB::table('casts')->where('id', $id)->delete();
        return redirect('/cast');
    }
}
