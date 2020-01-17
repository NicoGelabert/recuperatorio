@extends('layouts.layoutMain')

@section('content')
<main>
    <h1>Listado de películas</h1>
    <ul>
        <div class="row tarjetas">
        @foreach ($peliculas as $pelicula)
            <div class="col-12 col-sm-6 col-md-4 col-lg-2">
        
                <div class="card tarjeta">
                    <div class="card-body tarjeta-body">
                        <h5 class="card-title">{{ $pelicula->title }}</h5>
                        <p class="card-text">Rating: {{ $pelicula->rating }}</p>
                    </div>
                    <div class="card-boton">
                        <a href="/peliculas/{{$pelicula->id}}" class="btn btn-primary boton">Ver detalle</a>
                    </div>
                </div>

            </div>

        @endforeach
        </div>
        <div class="row paginado">
        {{ $peliculas->links() }}
        </div>
    </ul>
</main>
@endsection