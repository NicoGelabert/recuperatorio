<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand" href="{{ url('/welcome') }}">PELÍCULAS.COM</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
      <a class="nav-link" href="{{ url('/peliculas') }}">Películas <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="{{ url('/actores') }}">Actores</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="{{ url('/generos') }}">Géneros</a>
      </li>

    <!-- inicio dropdown -->
    <li id="login" class="logout">
      @if (Route::has('login'))
        @auth

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        HOLA {{ Auth::user()->name }}!
        </a>
        <div class="dropdown-menu dropdown-menu-right">
        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
        </div>
      </li>

      @else
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">Log in</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('register') }}">Sign up</a>
        </li>

      @endauth
      @endif
      </li>

    <!-- fin dropdown -->
    </ul>
  </div>
</nav>