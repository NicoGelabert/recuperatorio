@extends('layouts.layoutMain')

@section('content')
    <h1>Editar película</h1>
    <form action="/peliculas/{{$pelicula->id}}" method="post">
    @method('PATCH')
    @csrf
    <label for="title">Título:</label>
    <input type="text" name="title">
    <label for="rating">Rating:</label>
    <input type="text" name="rating">
    <label for="awards">Premios:</label>
    <input type="text" name="awards">
    <label for="release_date">Fecha de estreno:</label>
    <input type="date" name="release_date">
    <label for="length">Duración en minutos</label>
    <input type="text" name="length">
    <label for="genre_id">Género</label>
    <input type="text" name="genre_id">
    <input type="submit" name="" value="Actualizar">
    </form>
@endsection 