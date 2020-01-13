@extends('layouts.layoutMain')

@section('content')
    <h1>{{ $actor->first_name }} {{ $actor->last_name }}</h1>
        <p>Rating: {{ $actor->rating }}</p>
        <p>Película favorita: {{ $actor->favorite_movie_id }}</p>
        <p>Películas:</p>
        <ul>
            @foreach ($actor->peliculas as $pelicula)
                <li><a href="/peliculas/{{$pelicula->id}}">{{$pelicula->title}}</a></li>
            @endforeach
        </ul>
@endsection 