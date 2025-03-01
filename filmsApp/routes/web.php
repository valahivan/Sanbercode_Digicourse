<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route Genre
Route::middleware(['auth'])->group(function(){
    Route::resource('/genre', GenreController::class);
    Route::post('/review/{film_id}', [ReviewController::class, 'store']);
});

// Route Film
Route::resource('/film', FilmController::class);


Auth::routes();

