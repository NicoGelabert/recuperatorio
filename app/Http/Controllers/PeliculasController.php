<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pelicula;
use App\Genero;
use App\Actor;

class PeliculasController extends Controller
{
    public function index(){
        $peliculas = Pelicula::orderBy('title', 'asc')->paginate(12);
        return view ("peliculas.listadopeliculas")->with("peliculas", $peliculas);
    }

    public function detalle(Pelicula $pelicula){
        return view("peliculas.detallepelicula")->with("pelicula", $pelicula);
    }

    public function edit(Pelicula $pelicula, Genero $generos, Actor $actores){
        $generos = Genero::all();
        $actores = Actor::all();
        return view("peliculas.edit")->with("pelicula", $pelicula)->with("generos", $generos)->with("actores", $actores);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idpelicula)
    {
      $reglas = [
        "title" => "required|string|min:1|max:255",
        "rating"=> "required|numeric|min:1|max:10",
        "awards"=> "required|integer",
        "release_date" => "required|date",
        "length"=> "required|integer|min:1",
        "genre_id"=>"required|integer|min:1|max:12",
      ];
      $this->validate($request, $reglas);
      Pelicula::find($idpelicula)->update($request->all());
      return redirect('/peliculas');
    }
}
