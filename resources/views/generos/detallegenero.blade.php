@extends('layouts.layoutMain')

@section('content')
<main>
    <h1>{{$genero->name}}</h1>

    @if ($genero->peliculas-> count() > 0)
        
            <div class="row tarjetas">
                @foreach ($genero->peliculas as $pelicula)
                <div class="col-12 col-sm-8 col-md-6 col-lg-2">
                    <div class="card tarjeta">
                        <div class="card-body">
                            <h5 class="card-title">{{ $pelicula->title }}</h5>
                        </div>
                        <div class="card-boton">
                            <a href="/peliculas/{{$pelicula->id}}" class="btn btn-primary boton">Ver película</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
    @else
            <div class="row sin_peliculas">    
                <div class="col-12 col-sm-8 col-md-6 col-lg-2">
                    <div class="card tarjeta">
                        <div class="card-body">
                        <p>No hay películas asociadas a este género</p>
                        </div>
                        <div class="card-boton">
                            <a  href="{{ url('/generos') }}" class="btn btn-primary boton">Volver a géneros</a>
                        </div>
                    </div>
                </div>
            </div>
    @endif
</main>
@endsection