@extends('layouts.layoutMain')

@section('content')
<main>
    <h1>Bienvenidos</h1>
    <div class="row">
        <div class="col-lg-1">
        </div>
        <div class="col-lg-10">
            <ul class="row principal">
                <li class="col-12 col-sm-12 col-md-3 col-lg-3">
                <a href="{{ url('/peliculas') }}">
                <i class="fas fa-play-circle fa-7x"></i>
                <h2>Películas</h2>
                </a>
                </li>

                <li class="col-12 col-sm-12 col-md-3 col-lg-3">
                <a href="{{ url('/actores') }}">
                <i class="fas fa-star fa-7x"></i>
                <h2>Actores</h2>
                </a>
                </li>

                <li class="col-12 col-sm-12 col-md-3 col-lg-3">
                <a href="{{ url('/generos') }}">
                <i class="fas fa-icons fa-7x"></i>
                <h2>Géneros</h2>
                </a>
                </li>
            </ul>
        </div>
    </div>
</main>
@endsection 