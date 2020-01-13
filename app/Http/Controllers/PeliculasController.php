<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pelicula;

class PeliculasController extends Controller
{
    public function index(){
        $peliculas = Pelicula::orderBy('title', 'asc')->paginate(10);
        return view ("listadopeliculas")->with("peliculas", $peliculas);
    }

    public function detalle(Pelicula $pelicula){
        return view("detallepelicula")->with("pelicula", $pelicula);
    }

    public function edit(Pelicula $pelicula){
        return view("peliculas.edit")->with("pelicula", $pelicula);;
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
        "rating"=> "required|integer|min:1|max:10",
        "awards"=> "required|integer",
        "release_date" => "required|date",
        "length"=> "required|integer|min:1",
        "genre_id"=>"required|integer|min:1|max:12",
      ];
      $mensaje = [
        "required" => "El campo :attribute es obligatorio.",
        "min" => "El campo :attribute no puede ser menor a :min.",
        "max" => "El campo :attribute no debe mayor a :max.",
        "numeric" => "El campo :attribute debe ser numérico.",
        "integer" => "El campo :attribute debe ser entero.",
        "date" => "El campo :attribute debe ser una fecha."
      ];
      $this->validate($request, $reglas, $mensaje);
      Pelicula::find($idpelicula)->update($request->all());
      return redirect('/peliculas');
    }
}
