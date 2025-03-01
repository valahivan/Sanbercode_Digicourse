<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $table = 'genres';
    protected $filable = ['name', 'description'];

    public function listFilm(){
        return $this->hasMany(Film::class, 'genre_id');
    }
}
