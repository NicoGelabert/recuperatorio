@extends('layouts.layoutMain')

@section('content')
<main>
    <h1>Editar película</h1>
    <div class="row forms">
        <div class="col-10 col-sm-10 col-md-8 col-lg-4">
            <form action="/peliculas/{{$pelicula->id}}" method="post">
            @method('PATCH')
            @csrf
            <div class="col-12">
            <label for="title">Título</label>
            <input type="text" placeholder="{{$pelicula->title}}" name="title" value="{{old('title')}}">
            <p>{{$errors->first('title')}}</p>
            </div>
            
            <div class="row forms-2">
            <div class="col-6">
            <label for="title">Rating</label>
            <input type="text" placeholder="{{$pelicula->rating}}" name="rating" value="{{old('rating')}}">
            <p>{{$errors->first('rating')}}</p>
            </div>
            
            <div class="col-6">
            <label for="title">Premios</label>
            <input type="text" placeholder="{{$pelicula->awards}}" name="awards" value="{{old('awards')}}">
            <p>{{$errors->first('awards')}}</p>
            </div>
            </div>
            
            <div class="row forms-2">
            <div class="col-6">
            <label for="title">Fecha de estreno</label>
            <input type="date" class="form-control" onfocus="(this.type='date')" onblur="(this.type='text')" placeholder="{{\Carbon\Carbon::parse($pelicula->release_date)->locale('es')->format('d-m-Y')}}" name="release_date" value="{{old('release_date')}}">
            <p>{{$errors->first('release_date')}}</p>
            </div>
            
            <div class="col-6">
            <label for="title">Duración en minutos</label>
            <input type="text" placeholder="{{$pelicula->length}}" name="length" value="{{old('length')}}">
            <p>{{$errors->first('length')}}</p>
            </div>
            </div>

            <div class="col-12">
            <label for="title">Género</label>
            <input type="text" placeholder="{{$pelicula->genre_id}}" name="genre_id"  value="{{old('genre_id')}}">
            <p>{{$errors->first('genre_id')}}</p>
            <!-- <select class="form-control" onfocus="(this.type='date')" onblur="(this.type='text')" name="genre_id">
            <option value="">Género</option>
            @foreach ($generos as $genero)
              <option>{{ $genero->name }}</option>
            @endforeach
            <p>{{$errors->first('genre_id')}}</p>
              </select> -->
              
            </div>

            <!-- <div class="col-12">
            <input type="text" placeholder="Género" name="genre_id"  value="{{old('genre_id')}}">
            <p>{{$errors->first('genre_id')}}</p>
            <select class="form-control" onfocus="(this.type='date')" onblur="(this.type='text')" name="actor_id">
            
            @foreach ($actores as $actor)
              <option value="{{old('name')}}">{{ $actor->getFullName() }}</option>
            @endforeach
              </select>
              
            </div> -->

            

            <div class="card-boton">
            <input class="btn btn-primary boton" type="submit" name="" value="Actualizar">
            </div>

            </form>
        </div>
    </div>
</main>
@endsection 