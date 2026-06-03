@extends('principal')
@section('contenido')
    <div class="container-fluid">
        <div class="row pt-3 border-bottom">
            <div class="col-12 px-5 d-flex justify-content-between align-items-center pb-2">
                <div>
                    <h3 class="fw-bold mb-0 fs-1">Dashboard</h3>
                    <p class="fs-5 text-primary">Bienvenido, {{ auth()->user()->name?? 'Usuario'}}</p>
                </div>
                <img src="asset/images/logo.webp" alt="Logo" style="height: 80px">
            </div>
        </div>
        <div class="row px-4">
            <div class="col-12 col-md-3 col-lg-2">
                <div id="sidebar-gestion" class="card  shadow-sm p-3 bg-light siderbar-card">
                    <ul class="nav flex-column mb-auto">
                        <li class="nav-item">
                            <a href="{{ route('posts.index') }}" class="btn btn-gestion w-100 text-center fw-bold">
                                Gestionar Posts
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="btn-logout mt-2" href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Cerrar Sesión
                            </a>
                            
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-9 col-lg-10">
                <div class="banner-madrid p-5 rounded-4 text-white shadow d-flex align-items-center mb-4">
                    <div>
                        <h1 class="fw-black text-uppercase display-5">Hala Madrid</h1>
                        <p class="fs-5 opacity-75 mb-0">Gestión oficial madridista.</p>
                    </div>
                </div>
                <div class="row mb-3"> 
                    <div class="col-md-4">
                        <div class="card shadow-sm border-primary border-5">
                            <div class="card-body text-center">
                                <h5 class="card-title fs-5 small fw-bold text-muted">Próximo Partido</h5>
                                <p class="h4 my-3">Real Madrid vs Benfica</p>
                                <span class="badge bg-warning text-dark">Santiago Bernabéu</span>
                            </div>    
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card shadow-sm border-primary border-5">
                            <div class="card-body text-center">
                                <h5 class="card-title fs-5 small fw-bold text-muted">Mensajes</h5>
                                <p class="h4 my-3">1 pendiente</p>
                                <span class="badge bg-warning text-dark">Ver más</span>
                            </div>    
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card shadow-sm border-primary border-5">
                            <div class="card-body text-center">
                                <h5 class="card-title fs-5 small fw-bold text-muted">Estado</h5>
                                <p class="h4 my-3">Activo</p>
                                <span class="badge bg-warning text-dark">No. 1</span>
                            </div>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>   
@endsection

