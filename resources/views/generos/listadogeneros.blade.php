@extends('layouts.layoutMain')

@section('content')
<main>
    <h1>Listado de géneros</h1>
    <ul>
        <div class="row tarjetas">
        @foreach ($generos as $genero)
            <div class="col-12 col-sm-6 col-md-4 col-lg-2">
        
                <div class="card tarjeta">
                    <div class="card-body">
                        <h5 class="card-title">{{ $genero->name }}</h5>
                        <p>Cantidad de títulos: {{$genero->peliculas->count()}}</p>
                    </div>
                    <div class="card-boton">
                        <a href="/generos/{{$genero->id}}" class="btn btn-primary boton">Ver películas</a>
                    </div>
                </div>

            </div>

        @endforeach
        </div>
        <div class="row paginado">
        {{ $generos->links() }}
        </div>
    </ul>
</main>
@endsection