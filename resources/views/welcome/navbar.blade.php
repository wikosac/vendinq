<nav class="navbar navbar-expand-lg navbar-light shadow fixed-top" style="background-color: rgb(255, 215, 82)">
    <div class="container">
      <a class="navbar-brand fw-bold">VendinQ</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/feature">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/about">About</a>
          </li>
        </ul>
      </div>

      <div>
        @if (Route::has('login'))
            <div>
                @auth
                    <a href="{{ url('/dashboard') }}" class="nav-link text-dark">Dashboard</a>
                @else
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link text-dark">Log in</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="navbar-nav">
                        <a href="{{ route('register') }}" class="nav-link text-dark">Register</a>
                    </li>
                    @endif
                </ul>
                @endauth
            </div>
        @endif
      </div>
    </div>
  </nav>