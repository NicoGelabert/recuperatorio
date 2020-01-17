<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    public $table = "actors";
    public $fillable = ["first_name", "last_name", "rating", "favorite_movie_id"];

    public function peliculas(){
        return $this->belongsToMany(Pelicula::class, "actor_movie", "actor_id", "movie_id");
    }

    public function getFullName(){
        return $this->first_name . " " . $this->last_name;
    }

    public function peliculaFavorita(){
        return $this->belongsTo(Pelicula::class, "favorite_movie_id");
    }
}
