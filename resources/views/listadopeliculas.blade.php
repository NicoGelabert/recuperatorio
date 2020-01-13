@extends('layouts.layoutMain')

@section('content')
    <h1>Listado de películas</h1>
    <ul>
        @foreach ($peliculas as $pelicula)
        
        <li><p>Título: <a href="/peliculas/{{$pelicula->id}}">{{ $pelicula->title }}</a></p></li>

        @endforeach
        {{ $peliculas->links() }}
    </ul>
@endsection