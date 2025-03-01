<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function store(Request $request, $film_id){
        $request->validate([
            'content' => 'required',
            'point' => 'required'
        ],
        [
            'required' => 'Inputan :attribute tidak boleh kosong!'
        ]);

        $user_id = Auth::id();

        $review = new Review();
        $review->content = $request['content'];
        $review->point = $request['point'];
        $review->user_id = $user_id;
        $review->film_id = $film_id;

        $review->save();
        return redirect('/film/' . $film_id);
    }
}
