<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CastController;
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

// CRUD Casts
// Create
Route::get('/cast/create', [CastController::class, 'create']);
Route::post('/cast', [CastController::class, 'store']);

// Read
Route::get('/cast', [CastController::class, 'index']);
Route::get('/cast/{cast_id}', [CastController::class, 'show']);

// Update
Route::get('/cast/{cast_id}/edit', [CastController::class, 'edit']);
Route::put('/cast/{cast_id}', [CastController::class, 'update']);

// Delete
Route::delete('cast/{cast_id}', [CastController::class, 'destroy']);