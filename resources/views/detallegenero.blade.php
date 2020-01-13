@extends('layouts.layoutMain')

@section('content')
    <h1>{{$genero->name}}</h1>

    <p>Películas:</p>
    @if ($genero->peliculas)
        
        <ul>
            @foreach ($genero->peliculas as $pelicula)
            <li><a href="/peliculas/{{$pelicula->id}}">{{ $pelicula->title }}</a></li>
            @endforeach
        </ul>
    @else
    <p>No hay películas</p>
    @endif
        
        
@endsection 