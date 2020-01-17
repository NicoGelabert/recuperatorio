@extends('layouts.layoutMain')

@section('content')
<main>
    <h1>Alta de actor</h1>
    <div class="row forms">
        <div class="col-10 col-sm-10 col-md-8 col-lg-4">
            
        <form action="{{ url('/actores') }}" method="post">
        @csrf

            <div class="col-12">
            <label for="first_name">Nombre</label>
            <input type="text" placeholder="Robert" name="first_name">
            <p>{{$errors->first('first_name')}}</p>
            </div>

            <div class="col-12">
            <label for="last_name">Apellido</label>
            <input type="text" placeholder="Deniro" name="last_name">
            <p>{{$errors->first('last_name')}}</p>
            </div>

            <div class="col-12">
            <label for="rating">Rating</label>
            <input type="text" placeholder="De 1 a 10" name="rating">
            <p>{{$errors->first('rating')}}</p>
            </div>

            <div class="col-12">
            <label for="favorite_movie_id">Película favorita</label>
            <input type="text" placeholder="Del 1 al 21" name="favorite_movie_id">
            <p>{{$errors->first('favorite_movie_id')}}</p>
            </div>

            <div class="card-boton">
            <input class="btn btn-primary boton" type="submit" name="" value="Agregar actor">
            </div>

            </form>
        </div>
    </div>
</main>
@endsection 