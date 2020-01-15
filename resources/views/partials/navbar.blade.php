<div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">PELÍCULAS.COM</a>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
        <li class="nav-item">
        <a class="nav-link" href="{{ url('/peliculas') }}">Peliculas</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{ url('/actores') }}">Actores</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{ url('/generos') }}">Géneros</a>
        </li>
        @if (Route::has('login'))
        @auth
        <li class="nav-item"><a class="nav-link"  href="{{ url('/home') }}">Home</a></li>
        @else
        <li class="nav-item"><a class="nav-link"  href="{{ route('login') }}">Login</a></li>
        @if (Route::has('register'))
        <li class="nav-item"><a class="nav-link"  href="{{ route('register') }}">Register</a></li>
        @endif
        @endauth
        @endif
        </ul>
    </div>
    </nav>
</div>