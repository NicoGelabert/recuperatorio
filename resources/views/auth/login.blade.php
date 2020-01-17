@extends('layouts.layoutMain')

@section('content')
<main>
    <h1>{{ __('Log in') }}</h1>
    <div class="row forms">
        <div class="col-10 col-sm-10 col-md-8 col-lg-4">
            
        <form method="POST" action="{{ route('login') }}">
        @csrf

            <div class="col-12">
                <label for="email">{{ __('E-Mail') }}</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" autocomplete="email" placeholder="ejemplo@email.com">
                <p>{{$errors->first('email')}}</p>
            </div>

            <div class="col-12">
                <label for="email">{{ __('Contraseña') }}</label>
                <input id="password" type="password" name="password" autocomplete="current-password" placeholder="8 caracteres mínimo">
                <p>{{$errors->first('password')}}</p>
            </div>

            <div class="form-check col-12">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Recordarme') }}
                </label>

            </div>

            <div class="card-boton">
            <input class="btn btn-primary boton" type="submit" name="" value="{{ __('Login') }}">
            </div>
            
            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Olvidaste la contraseña?') }}
                </a>
            @endif


            </form>
        </div>
    </div>
</main>
@endsection 