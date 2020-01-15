@extends('layouts.layoutMain')

@section('content')
    <h1>{{$genero->name}}</h1>

    @if ($genero->peliculas-> count() > 0)
        
            <div class="row tarjetas">
                @foreach ($genero->peliculas as $pelicula)
                <div class="col-12 col-sm-8 col-md-6 col-lg-3">
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
                @else
                <div class="col-12 col-sm-8 col-md-6 col-lg-3">
                    <div class="card tarjeta">
                        <div class="card-body">
                        <p style="text-align:center">No hay películas asociadas a este género</p>
                        </div>
                        <div class="card-boton">
                            <a  href="{{ url('/generos') }}" class="btn btn-primary boton">Volver a géneros</a>
                        </div>
                    </div>
                </div>
            </div>
    @endif
@endsection