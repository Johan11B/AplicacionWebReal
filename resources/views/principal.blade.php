<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>REAL MADRID</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('asset/css/app.css') }}">
</head>
<body>
    
    <div class="container-fluid bg-primary "> 
        <div class="row">
            <div class="col-1 bg-primary ms-3 p-0"> 
                <img src="asset/images/logo.webp" alt="Real Madrid" class="img-fluid">
            </div>
            <div class="col-10 ">
                <!--Titulo Principal-->
                <div class="d-flex justify-content-between align-items-center mt-3">
                  <h1 class=" bg-primary text-white mx-2 mt-3 fs-1">
                      Real Madrid Club de Fútbol
                  </h1>
                  <div class="auth-buttons me-3">
                        @guest 
                          <a class="btn text-primary btn-light me-2 btn-light" href="{{ route('login') }}">Iniciar Sesión</a>
                          <a class="btn btn-light text-primary" href="{{ route('register') }}">Registrarse</a>
                        @endguest
                  </div>
                </div>
                 <!--Menu de navegacion--> 
                <div>
                 <nav class="navbar navbar-expand-lg bg-primary">
                  <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                      <ul class="navbar-nav">
                        <li class="nav-item">
                          <a class="nav-link active text-white" aria-current="page" href="{{ url ('/') }}">Inicio</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-white" href="{{ url('/historia') }}">Historia</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-white" href="{{ url('/titulos') }}">Titulos</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-white" href="{{ url('/jugadores') }}">Jugadores</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-white" href="{{ url('/formulario') }}">Formulario</a>
                        </li>
                        @auth
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('dashboard.index') }}">Dashboard</a>
                            </li>
                        @endauth
                      
                      </ul>
                    </div>
                  </div>
                </nav>
                </div>
            </div>
        </div>
    </div>

    @yield('contenido') 

    <footer>
        <div class="container-fluid bg-primary text-white p-3 text-center">
            <p class="fs-3">&copy; 2026 Johan Steven Briceño Laytón</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>


         