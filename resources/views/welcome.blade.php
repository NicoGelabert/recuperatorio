@extends('layouts.layoutMain')

@section('content')
    <h1>Alta de actor</h1>
    <div class="row forms">
        <div class="col-10 col-sm-10 col-md-8 col-lg-4">
            
        <form action="{{ url('/actores') }}" method="post">
        @csrf

            <div class="col-12">
            <input type="text" placeholder="Nombre" name="first_name">
            <p>{{$errors->first('first_name')}}</p>
            </div>

            <div class="col-12">
            <input type="text" placeholder="Apellido" name="last_name">
            <p>{{$errors->first('last_name')}}</p>
            </div>

            <div class="col-12">
            <input type="text" placeholder="Rating" name="rating">
            <p>{{$errors->first('rating')}}</p>
            </div>

            <div class="card-boton">
            <input class="btn btn-primary boton" type="submit" name="" value="Agregar actor">
            </div>

            </form>
        </div>
    </div>
@endsection 