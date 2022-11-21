<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        
    </head>
            <!-- HEADER -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="#">
    <img src="{{ asset('/img/Logo.png') }}" alt="" width="80" height="80">X Web store</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pack Service</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            NEGOCIOS
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Comprar</a></li>
            <li><a class="dropdown-item" href="#">Vender</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Promocionar</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
         @if (Route::has('login'))
            @auth
            <a href="{{ url('/dashboard') }}" id="" class="btn btn-primary mx-3" href="#" role="button">Panel de control</a>
           @else
                    <a href="{{ route('login') }}" id="" class="btn btn-primary mx-3" href="#" role="button">Inicia sesión</a>
           
           @if (Route::has('register'))
                    <a href="{{ route('register') }}" id="" class="btn btn-success mx-3" href="#" role="button">Registrate</a>
             @endif
    
            @endauth
        </div>
    @endif
</nav>
<br>



@yield('content')




        <!-- Footer  -->
        <div class="container-fluid bg-dark text-body footer">
            <div class="container py-5 px-lg-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-white h5 mb-4">DIRECCIONES<span></span></p>
                        <p class="text-white"><i class="fa fa-map-marker-alt text-white me-3"></i>Llavallol, ARGENTINA, BS. AS.</p>
                        <p class="text-white"><i class="fa fa-phone-alt text-white me-3"></i> +54 (011) 11-3936-2797</p>
                        <p class="text-white"><i class="fa fa-envelope text-white me-3"></i>info@webstore.app</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-white h5 mb-4">Quick Link<span></span></p>
                        <a class="btn btn-link text-white" href="">About</a>
                        <a class="btn btn-link text-white" href="">Contact</a>
                        <a class="btn btn-link text-white" href="">Privacy Policy</a>
                        <a class="btn btn-link text-white" href="">Terms & Conditions</a>
                        <a class="btn btn-link text-white" href="">Support</a>
                    </div>
                    <div class="col-md-6 col-lg-3 ">
                        <p class="section-title text-white h5 mb-4">Community<span></span></p>
                        <a class="btn btn-link text-white" href="">Career</a>
                        <a class="btn btn-link text-white" href="">Leadership</a>
                        <a class="btn btn-link text-white" href="">Strategy</a>
                        <a class="btn btn-link text-white" href="">History</a>
                        <a class="btn btn-link text-white" href="">Components</a>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-white h5 mb-4">Newsletter<span></span></p>
                        <p class="text-white">Recibí las ofertas, promociones oportunidades de inversion detalladas en tu mail.</p>
                        <div class="position-relative w-100 mt-3">
                            <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Your Email" style="height: 48px;">
                            <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-primary fs-4"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        @stack('modals')

        @livewireScripts

        @stack('scripts')
    </body>
</html>
