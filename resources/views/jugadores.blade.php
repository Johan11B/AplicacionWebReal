@extends('principal')
@section('contenido')

<header>
    <div class="container-fuid bg-light">

        <div class="container text-center">
            <h2 class="text-center text-warning fs-1 pt-2">
                Jugadores Legendarios
            </h2>
            <p class="text-center text-dark">Los hombres que escribieron la historia blanca con letras de oro.</p>
        </div>

        <div class="container bg-light text-center ">

            <div class="row pb-3 pt-3 justify-content-center">
                <div class="col">
                    <div class="card border-warning border-2 rounded-3">
                        <img src="asset/images/jugador1.webp" class="card-img-top" alt="..." style="height: 280px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">Alfredo Di Stéfano</h5>
                            <p class="card-text">Delantero</p>
                            <p class="badge bg-warning text-dark">5 Copas de Europa</p>
                            <p class="card-text"><small class="text-body-secondary">"Considerado el jugador que cambió la historia del club".</small></p>
                        </div>
                    </div>  
                </div>
                <div class="col">
                    <div class="card border-warning border-2 rounded-3 ">
                        <img src="asset/images/jugador2.webp" class="card-img-top" alt="..." style="height: 280px; object-fit: cover; object-position: top;">
                        <div class="card-body">
                            <h5 class="card-title">Cristiano Ronaldo</h5>
                            <p class="card-text">Delantero</p>
                            <p class="badge bg-warning text-dark">450 Goles (Máximo Goleador)</p>
                            <p class="card-text"><small class="text-body-secondary">"El máximo goleador histórico del Real Madrid".</small></p>
                        </div>
                    </div>  
                </div>
                <div class="col">
                    <div class="card border-warning border-2 rounded-3">
                        <img src="asset/images/jugador3.webp" class="card-img-top" alt="..." style="height: 280px; object-fit: cover; object-position: top;">
                        <div class="card-body">
                            <h5 class="card-title">Iker Casillas</h5>
                            <p class="card-text">Portero</p>
                            <p class="badge bg-warning text-dark">"El Santo, Capitán de la Décima"</p>
                            <p class="card-text"><small class="text-body-secondary">"Es el mejor guardameta de la historia del Real Madrid y del fútbol español".</small></p>
                        </div>
                    </div>  
                </div>
                <div class="col">
                    <div class="card border-warning border-2 rounded-3">
                        <img src="asset/images/jugador4.webp" class="card-img-top" alt="..." style="height: 280px; object-fit: cover; object-position: top;">
                        <div class="card-body">
                            <h5 class="card-title">Zinedine Zidane</h5>
                            <p class="card-text">Centrocampista</p>
                            <p class="badge bg-warning text-dark">Elegancia, autor de la volea eterna</p>
                            <p class="card-text"><small class="text-body-secondary">"Uno de los mejores futbolistas de todos los tiempos".</small></p>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>

    </div>
</header>
@endsection