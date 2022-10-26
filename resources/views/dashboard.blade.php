<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>VendinQ</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      .whi {
          color: black
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top px-3 shadow" style="background-color: rgb(218, 129, 47)">
        <div class="container">
            <div class="navbar-nav">
                {{-- <a href="#" data-toggle="collapse">=</a> --}}
                <a class="navbar-brand fw-bold" href="/">VendinQ</a>
            </div>

            {{-- <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="true" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="color:aqua"></span>
            </button> --}}
            
            <div class="navbar-nav ms-auto">
                {{-- <a class="nav-link px-3" href="#">Sign out</a> --}}

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        
                        Hi {{ auth()->user()->username }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li>
                          <a class="dropdown-item" href="/profile">
                            <i class="bi bi-person-circle"></i>
                            Profile
                          </a>
                      </li>
                      <li><hr class="dropdown-divider"></li>
                      <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="dropdown-item" :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                <i class="bi bi-box-arrow-right"></i>
                                {{ __('Log Out') }}</a>
                        </form>
                        {{-- <a href="#modalChoice" data-toggle="modal" onclick="" class="nav-link text-muted">Log out</a> --}}
                      </li>
                    </ul>
                </li>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse" style="background-color: bisque">
                <div class="position-sticky pt-3 align-item-center">
                    <ul class="nav flex-column pt-2">
                        <li class="nav-item">
                            <a class="nav-link whi {{ Request::is('dashboard') ? 'active' : '' }}" href="/dashboard">
                                <i class="bi bi-house-door-fill"></i>
                            Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link whi {{ Request::is('product') ? 'active' : '' }}" href="/product">
                                <i class="bi bi-archive-fill"></i>
                            Product
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link whi {{ Request::is('machine') ? 'active' : '' }}" href="/machine">
                                <i class="bi bi-pip-fill"></i>
                            Machine
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link whi {{ Request::is('location') ? 'active' : '' }}" href="/location">
                                <i class="bi bi-geo-alt-fill"></i>
                            Location
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link whi {{ Request::is('purchase') ? 'active' : '' }}" href="/purchase">
                                <i class="bi bi-cart-fill"></i>
                            Purchase
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link whi {{ Route::is('report') ? 'active' : '' }}" href="/report">
                                <i class="bi bi-file-earmark-fill"></i>
                            Report
                            </a>
                        </li>
                    </ul>
                </div>

                <canvas class="my-4 w-10 row" id="myChart" width="30" height="200"></canvas>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 pt-2">
                @yield('container')
            </main>
        </div>
    </div>
    
    @include('welcome.footer')

    {{-- <div class="modal modal-alert d-block py-5" tabindex="-1" role="dialog" id="modalChoice">
        <div class="modal-dialog" role="document">
          <div class="modal-content rounded-4 shadow">
            <div class="modal-body p-4 text-center">
              <h5 class="mb-0">Enable this setting?</h5>
              <p class="mb-0">You can always change your mind in your account settings.</p>
            </div>
            <div class="modal-footer flex-nowrap p-0">
              <button type="button" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0 border-right"><strong>Yes, enable</strong></button>
              <button type="button" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0" data-bs-dismiss="modal">No thanks</button>
            </div>
          </div>
        </div>
      </div> --}}

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
    <script src="dashboard.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
