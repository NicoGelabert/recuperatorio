@extends('layouts.layoutMain')

@section('content')
    <h1>{{ $actor->getFullName() }}</h1>
        <div class="row tarjetas">
            <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-body detalle-pelicula">
                        <p class="card-text">Rating: {{ $actor->rating }}</p>
                        <p class="card-text">Película favorita: {{ $actor->peliculaFavorita->title }}</p>
                        <p class="card-text">Películas:</p>
                        <ul>
                            @foreach ($actor->peliculas as $pelicula)
                                <li><a href="/peliculas/{{$pelicula->id}}">{{$pelicula->title}}</a></li>
                            @endforeach
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection 