@extends('layouts.layoutMain')

@section('content')
    <h1>{{ $actor->getFullName() }}</h1>
        <div class="row tarjetas">
            <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-body detalle-pelicula">
                        <p class="card-text"><b>Rating:</b><br>{{ $actor->rating }}</p>
                        <p class="card-text"><b>Película favorita:</b><br>{{ $actor->peliculaFavorita->title }}</p>
                        <p class="card-text"><b>Películas:</b><br>
                            @foreach ($actor->peliculas as $pelicula)
                                <a href="/peliculas/{{$pelicula->id}}">{{$pelicula->title}}</a><br>
                            @endforeach
                        </p>
                    </div>
                </div>
            </div>
        </div>
@endsection 