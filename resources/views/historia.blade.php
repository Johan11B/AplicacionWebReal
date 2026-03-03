@extends('principal')

@section('contenido')

<header>
  <div class="container mt-2 mb-3">
      <h2 class="text-center text-warning fs-1">
          Historia del Real Madrid
      </h2>
  </div>
  
  <div class="container-fluid bg-light">
  
      <div class="row"> <!--Filas-->
          <div class="col-12 "> <!--Columnas-->
              <div class="card mb-2 border-primary border-3 rounded-3 shadow-lg">
                <div class="row g-0">
                  <div class="col-md-2">
                    <img src="asset/images/escudo1.webp" class="img-fluid rounded-start m-1" alt="...">
                  </div>
                  <div class="col-md-10">
                    <div class="card-body">
                      <h5 class="card-title">El Nacimiento de una Leyenda</h5>
                      <p class="card-text">El Real Madrid fue fundado el 6 de marzo de 1902 por un grupo de futbolistas aficionados en la capital española, Madrid.
                           La primera reunión se desarrollo en la cafetería Fonda de los Fornos, donde se tomó la decisión de crear un club que  el deporte del fútbol en la ciudad. 
                           Desde su creación, el club busca fomentar el espíritu deportivo y la participación de los jóvenes.</p>
                      <p class="card-text"><small class="text-body-secondary">"Real" (1902 - 1920)</small></p>
                    </div>
                  </div>
                </div>
              </div>
          </div>
      </div>
    
      <div class="col-12 mb-4">
          <div class="card mb-3 border-warning border-3 rounded-3 shadow-lg">
            <div class="row g-0">
              <div class="col-md-10">
                <div class="card-body">
                  <h5 class="card-title">El Madrid de las 5 Copas de Europa</h5>
                  <p class="card-text">El Real Madrid obtuvo las primeras cinco ediciones consecutivas de la Copa de Europa (1956-1960), 
                      una logro que hasta hoy permanece inalcanzable y que le sirvio para ser reconocido como el mejor club del siglo XX.</p>
                  <p class="card-text"><small class="text-body-secondary">La Era Dorada de Di Stéfano (1953 - 1964)</small></p>
                </div>
              </div>
              <div class="col-md-2">
                <img src="asset/images/historia2.webp" class="img-fluid rounded-end" alt="...">
              </div>
            </div>
          </div>
      </div>
    
      <div class="row"> <!--Filas-->
          <div class="col-12 "> <!--Columnas-->
              <div class="card mb-3 border-primary border-3 rounded-3 shadow-lg">
                <div class="row g-0">
                  <div class="col-md-3">
                    <img src="asset/images/historia3.webp" class="img-fluid rounded-start m-1" alt="...">
                  </div>
                  <div class="col-md-9">
                    <div class="card-body">
                      <h5 class="card-title">La Identidad de Cantera</h5>
                      <p class="card-text">En la década de los 80, jugadores formados en la casa, 
                          liderada por Emilio Butragueño, dominó el fútbol español. Junto a Hugo Sánchez, 
                          lograron el récord de 5 Ligas consecutivas y dos Copas de la UEFA, 
                          con un fútbol ofensivo y remontadas épicas en el Bernabéu.</p>
                      <p class="card-text"><small class="text-body-secondary">La Quinta del Buitre (Años 80)</small></p>
                    </div>
                  </div>
                </div>
              </div>
          </div>
      </div>
    
      <div class="col-12 mb-4">
          <div class="card mb-3 border-warning border-3 rounded-3 shadow-lg">
            <div class="row g-0">
              <div class="col-md-10">
                <div class="card-body">
                  <h5 class="card-title">El Madrid de las 5 Copas de Europa</h5>
                  <P class="card-text">Despues de varios años de espera, la "Décima" en Lisboa dio inició un ciclo histórico.
                       Con la dirección de Zidane y el liderazgo en el campo de figuras de gran renombre como Cristiano Ronaldo, Ramos y Modrić, 
                       el club logró un hito sin precedentes en el formato Champions League: 
                       coronandose campeon tres veces consecutivas (2016, 2017 y 2018).</P>
                  <p class="card-text"><small class="text-body-secondary">Las Tres Consecutivas (2014 - 2018)</small></p>
                </div>
              </div>
              <div class="col-md-2">
                <img src="asset/images/historia4.webp" class="img-fluid rounded-end" alt="...">
              </div>
            </div>
          </div>
      </div>
  </div>
</header>

@endsection