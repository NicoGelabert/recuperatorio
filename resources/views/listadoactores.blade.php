@extends('layouts.layoutMain')

@section('content')
    <h1>Listado de actores</h1>
    <ul>
        @foreach ($actores as $actor)
        
        <li><p>Nombre completo: <a href="/actores/{{$actor->id}}">{{ $actor->first_name }} {{ $actor->last_name }}</a></p></li>

        @endforeach
        {{ $actores->links() }}
    </ul>
    
    <a href="/actores/new">Crear actor</a>
@endsection 