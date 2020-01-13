@extends('layouts.layoutMain')

@section('content')
    <h1>{{$pelicula->title}}</h1>
        <p>Rating: {{ $pelicula->rating }}</p>
        <p>Premios: {{ $pelicula->awards}}</p>
        <p>Año de estreno: {{ $pelicula->release_date}}</p>
        <p>Actores:</p>
        <ul>
            @foreach ($pelicula->actores as $actor)
            <li><a href="/actores/{{$actor->id}}">{{ $actor->first_name }} {{ $actor->last_name }}</a></li>
            @endforeach
        </ul>
        @if ($pelicula->genero)
        <p>Género: <a href="/generos/{{$pelicula->genero->id}}">{{$pelicula->genero->name}}</a></p>
        @else
        <p>Género: No tiene género asociado</p>
        @endif

        <a href="/peliculas/{{$pelicula->id}}/edit">Editar película</a>
@endsection 