<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Actor;

class ActoresController extends Controller
{
    public function index(){
        $actores = Actor::orderBy('first_name', 'asc')->Paginate(10);
        return view ("listadoactores")->with("actores", $actores);
    }

    public function detalle(Actor $actor){
        return view ("detalleactor")->with("actor", $actor);
    }


     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view("actores.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $reglas = [
            "first_name" => "required|string|min:1|max:255",
            "last_name" => "required|string|min:1|max:255",
            "rating"=> "required|numeric"
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

        Actor::create($request->all());
    }
}
