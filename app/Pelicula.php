<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    public $table = "movies";
    public $fillable = ["title", "rating", "awards", "release_date", "length", "genre_id"];

    public function actores(){
        return $this->belongsToMany("App\Actor", "actor_movie", "movie_id", "actor_id");
    }

    public function genero(){
        return $this->belongsTo("App\Genero", "genre_id");
    }
}
