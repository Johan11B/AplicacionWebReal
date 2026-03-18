@extends('principal')
@section('contenido')
    <body>
        <div id="pagina-dashboard" class="container mt-5">
            <header class= "d-flex justify-content-between align-items-center mb-4 pb-3 border-bottom">
                <div>
                    <h1>Dashboard</h1>
                    <p>Bienvenido, {{ auth()->user()->name?? 'Usuario'}}</p>
                </div>
                <div>
                    <a href="{{ route('posts.index') }}" class="btn btn-warning">
                        Gestionar Posts
                    </a>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Cerrar Sesión
                    </a>
                </div>
                <form id="logout-form" action="{{ route('logout') }}" method="post" class="d-none">
                    @csrf
                </form>
            </header>
            <div class="row mb-4">
                <div class="col-12">
                    <div class="banner-madrid p-5 rounded-4 text-white shadow-sm d-flex align-items-center">
                        <div>
                            <h2 class="fw-bold text-uppercase">Hala Madrid y nada más</h2>
                            <p class="mb-0 opacity-75">Perfil oficial desde aquí.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-4"> 
                <div class="col-md-4">
                    <div class="card shadow-sm border-primary border-2">
                        <div class="card-body text-center">
                            <h5 class="card-title fs-5 small fw-bold text-muted">Próximo Partido</h5>
                            <p class="h4 my-3">Real Madrid vs Benfica</p>
                            <span class="badge bg-warning text-dark">Santiago Bernabéu</span>
                        </div>    
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm border-primary border-2">
                        <div class="card-body text-center">
                            <h5 class="card-title fs-5 small fw-bold text-muted">Mensajes</h5>
                            <p class="h4 my-3">1 pendiente</p>
                            <span class="badge bg-warning text-dark">Ver más</span>
                        </div>    
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm border-primary border-2">
                        <div class="card-body text-center">
                            <h5 class="card-title fs-5 small fw-bold text-muted">Estado</h5>
                            <p class="h4 my-3">Activo</p>
                            <span class="badge bg-warning text-dark">No. 1</span>
                        </div>    
                    </div>
                </div>
            </div>
        </div>   
    </body>
@endsection

