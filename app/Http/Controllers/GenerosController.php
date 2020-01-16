<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Genero;

class GenerosController extends Controller
{
    public function index(){
        $generos = Genero::orderBy('name', 'asc')->paginate(6);
        return view('generos.listadogeneros')->with('generos', $generos);
    }

    public function detalle(Genero $genero){
        return view("generos.detallegenero")->with("genero", $genero);
    }
}
