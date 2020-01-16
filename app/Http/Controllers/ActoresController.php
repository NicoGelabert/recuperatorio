<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Actor;

class ActoresController extends Controller
{
    public function index(){
        $actores = Actor::orderBy('first_name', 'asc')->Paginate(12);
        return view ("actores.listadoactores")->with("actores", $actores);
    }

    public function detalle(Actor $actor){
        return view ("actores.detalleactor")->with("actor", $actor);
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

        $this->validate($request, $reglas);

        Actor::create($request->all());
    }
}
