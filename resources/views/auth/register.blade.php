@extends('layouts.layoutMain')

@section('content')
<main>
    <h1>{{ __('Registrate') }}</h1>
    <div class="row forms">
        <div class="col-10 col-sm-10 col-md-8 col-lg-4">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="col-12">
                    <label for="name">{{ __('Nombre') }}</label>
                    <input id="name" type="text" name="name" value="{{ old('name') }}" autocomplete="name" autofocus placeholder="{{ __('Juan Pérez') }}">
                    <p>{{$errors->first('name')}}</p>
                </div>

                <div class="col-12">
                    <label for="email">{{ __('E-Mail') }}</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" autocomplete="email" placeholder="{{ __('ejemplo@email.com') }}">
                    <p>{{$errors->first('email')}}</p>
                </div>
                
                <div class="col-12">
                    <label for="password">{{ __('Contraseña') }}</label>
                    <input id="password" type="password" name="password" autocomplete="new-password" placeholder="{{ __('8 caracteres mínimo') }}">
                    <p>{{$errors->first('password')}}</p>
                </div>
                
                <div class="col-12">
                    <label for="password-confirm">{{ __('Confirmar contraseña') }}</label>
                    <input id="password-confirm" type="password" name="password_confirmation" autocomplete="new-password" placeholder="{{ __('Repetí la contrseña') }}">
                </div>

                <div class="card-boton">
                    <input class="btn btn-primary boton" type="submit" name="" value="{{ __('Registrarse') }}">
                </div>
                    
            </form>
        </div>
    </div>
</main>
@endsection
