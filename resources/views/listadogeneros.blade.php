@extends('layouts.layoutMain')

@section('content')
    <h1>Listado de generos</h1>
    <ul>
        @foreach ($generos as $genero)
        
        <li><p>Genero: <a href="/generos/{{$genero->id}}">{{ $genero->name }}</a></p></li>

        @endforeach
        {{ $generos->links() }}
    </ul>
@endsection