@extends('layouts.layoutMain')

@section('content')
    <h1>{{ __('Registrate') }}</h1>
    <div class="row forms">
        <div class="col-10 col-sm-10 col-md-8 col-lg-4">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="col-12">
                    <input id="name" type="text" name="name" value="{{ old('name') }}" autocomplete="name" autofocus placeholder="{{ __('Nombre') }}">
                    <p>{{$errors->first('name')}}</p>
                </div>

                <div class="col-12">
                    <input id="email" type="email" name="email" value="{{ old('email') }}" autocomplete="email" placeholder="{{ __('E-Mail') }}">
                    <p>{{$errors->first('email')}}</p>
                </div>
                
                <div class="col-12">
                    <input id="password" type="password" name="password" autocomplete="new-password" placeholder="{{ __('Contraseña') }}">
                    <p>{{$errors->first('password')}}</p>
                </div>
                
                <div class="col-12">
                    <input id="password-confirm" type="password" name="password_confirmation" autocomplete="new-password" placeholder="{{ __('Confirmar contraseña') }}">
                </div>

                <div class="card-boton">
                    <input class="btn btn-primary boton" type="submit" name="" value="{{ __('Registrarse') }}">
                </div>
                    
            </form>
        </div>
    </div>
@endsection
