@extends('layouts.layoutMain')

@section('content')
    <h1>Listado de actores</h1>
    @if (Route::has('login'))
        @auth
        <div style="text-align:center">
            <a class="btn btn-primary" href="{{ url('/actores/new') }}">Cargar nuevo actor</a>
        </div>
        
        @endauth
    @endif
    <ul>
        <div class="row tarjetas">
        @foreach ($actores as $actor)
            <div class="col-12 col-sm-6 col-md-4 col-lg-2">
        
                <div class="card tarjeta">
                    <div class="card-body">
                        <h5 class="card-title">{{ $actor->getFullName() }}</h5>
                        <p class="card-text">Rating: {{ $actor->rating }}</p>
                    </div>
                    <div class="card-boton">
                        <a href="/actores/{{$actor->id}}" class="btn btn-primary boton">Ver detalle</a>
                    </div>
                </div>

            </div>

        @endforeach
        </div>
        <div class="row paginado">
        {{ $actores->links() }}
        </div>
    </ul>
@endsection