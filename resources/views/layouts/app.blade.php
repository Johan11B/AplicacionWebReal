<!doctype html>
<html lang="es"><head>
  <title>Panel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('asset/css/app.css') }}">
</head><body>
  <nav class="navbar-madrid">
    <div class="container-fluid">
      <div class="row align-items-center w-100 mx-0">
        <div class="col-8 d-flex align-items-center gap-3 justify-content-start">
          <img src="{{ asset('asset/images/logo.webp') }}" alt="Logo" style="height: 80px">
          <h3 class="fw-bold mb-0 fs-1">MADRIDISTA</h3>
        </div>
        <div class="col-4 text-end align-items-center justify-content-end d-flex">
            <span class="user-name me-3">{{ auth()->user()->name?? 'Usuario'}}</span>
            <a class="navbar-brand" href="{{ route('dashboard.index') }}">Dashboard</a>
            <a href="{{ route('posts.index') }}">Posts</a>
            <form action="{{ route('logout') }}" method="POST">
              @csrf  <button>Cerrar sesión</button>
            </form>
        </div>
      </div>
    </div>
  </nav>
  <main>@yield('content')</main>
</body></html>