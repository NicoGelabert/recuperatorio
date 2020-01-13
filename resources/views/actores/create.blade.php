@extends('layouts.layoutMain')

@section('content')
    <h1>Alta de actor</h1>
    <form action="/actores" method="post">
    @csrf
    <label for="first_name">Nombre:</label>
    <input type="text" name="first_name">
    <label for="last_name">Apellido:</label>
    <input type="text" name="last_name">
    <label for="rating">Rating:</label>
    <input type="text" name="rating">
    <input type="submit" name="" value="Agregar actor">
    </form>
@endsection 