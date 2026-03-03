<!doctype html>
<html lang="en">
    <head>
        <title>Registro de Usuario</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="{{ asset('asset/css/app.css') }}">
    </head>

    <body id= "pagina-register" >
        <main class="container-fluid d-flex align-items-center justify-content-center min-vh-100">
            <div class="card shadow-lg border-0">
                <div class="card-body p-4">
                    <header>
                        <div id= "logo-register"> 
                            <img src="asset/images/logo.webp" alt="Real Madrid" class="img-fluid">
                        </div>
                        <h1>Registro de Usuario
                        </h1>
                    </header>
                    <form action="{{ route('register.store') }}" method="post">
                        @csrf
                        <label for="name">Nombre:</label>
                        <input type="text" name="name" placeholder="Nombre" value="{{ old('name') }}"/>
                        <label for="email">Correo Electrónico:</label>
                        <input type="email" name="email" placeholder="Correo Electrónico" value="{{ old('email') }}"/>
                        <label for="password">Contraseña:</label>
                        <input type="password" name="password" placeholder="Contraseña"/> 
                        <label for="password_confirmation">Confirmar Contraseña:</label>
                        <input type="password" name="password_confirmation" placeholder="Confirmar Contraseña"/>
                        <button id="botonR" class="btn" type="submit">Registrar</button>
                        @if($errors->any())
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $error)
                                    <p style="color: red">{{ $error }}</p>
                                @endforeach
                            </div>
                        @endif
                        <a href="{{ route('login') }}">¿Ya tienes una cuenta? Inicia sesión</a>
                    </form>
                </div>
            </div>
        </main> 
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
    </body>
    <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
</html>
