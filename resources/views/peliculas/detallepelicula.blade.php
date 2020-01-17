@extends('layouts.layoutMain')

@section('content')
<main>
    <h1>{{$pelicula->title}}</h1>
        <div class="row tarjetas">
            <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-body detalle-pelicula">
                        <p class="card-text"><b>Rating:</b><br>{{ $pelicula->rating }}</p>
                        <p class="card-text"><b>Premios:</b><br>{{ $pelicula->awards}}</p>
                        <p class="card-text"><b>Año de estreno:</b><br>{{\Carbon\Carbon::parse($pelicula->release_date)->locale('es')->isoFormat("LL")}}</p>
                        <p class="card-text"><b>Actores:</b><br>
                        
                        @if ($pelicula->actores-> count() > 0)
                            @foreach ($pelicula->actores as $actor)
                            <a href="/actores/{{$actor->id}}">{{ $actor->getFullName() }}</a><br>
                            @endforeach
                        @else
                            No hay actores cargados
                        @endif
                        
                        </p>
                        
                        @if ($pelicula->genero)
                        <p class="card-text"><b>Género:</b><br><a href="/generos/{{$pelicula->genero->id}}">{{$pelicula->genero->name}}</a></p>
                        @else
                        <p class="card-text"><b>Género:</b><br>No tiene género asociado</p>
                        @endif

                        @if (Route::has('login'))
                        @auth
                        <div style="text-align:center">
                            <a class="btn btn-primary" href="/peliculas/{{$pelicula->id}}/edit">Editar película</a>
                        </div>
                        @endauth
                        @endif
                    </div>
                </div>
            </div>
        </div>
</main>
@endsection