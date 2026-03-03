@extends('principal')
@section('contenido')

<header>
    <div class="container-fuid bg-light">
    
        <div class="container text-center">
            <h2 class="text-center text-warning fs-1 pt-2">
                Palmarés Histórico
            </h2>
            <p class="text-center text-dark">El club más laureado del mundo</p>
            <div class="badge bg-warning text-dark fs-5 p-2 m-2">
                Total de Títulos: 106
            </div>
        </div>
    
        <div class="container bg-light text-center ">
            <div class="row pb-3 pt-3 justify-content-center">
            
                <div class="col-4">
                    <div class="card border-warning border-3 rounded-3">
                        <img src="asset/images/internacional.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">INTERNACIONAL</h5>
                            <p class="card-text">Champions League</p>
                            <p class="card-text"><small class="text-body-secondary">La competición fetiche del Equipo.</small></p>
                        </div>
                    </div>  
                </div>
                <div class="col-4">
                    <div class="card border-warning border-3 rounded-3">
                        <img src="asset/images/nacional.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">NACIONAL</h5>
                            <p class="card-text">Ligas Españolas</p>
                            <p class="card-text"><small class="text-body-secondary">La competición más importante de España.</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="container pt-1">
            <h3 class="text-center mb-4 text-dark fs-1">Detalle del Palmarés</h3>
            <div class="row justify-content-center">
                <div class="col-8">
                    <table class="table table-bordered border-warning border-5">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Competición</th>
                          <th scope="col">Títulos</th>
                          <th scope="col">Último Título</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr >
                            <th scope="row">1</th>
                            <td>Champions League</td>
                            <td>15</td>
                            <td>2023/24</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Liga Española</td>
                            <td>36</td>
                            <td>2023/24</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Copa del Rey</td>
                            <td>20</td>
                            <td>2022/23</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Copa de la UEFA</td>
                            <td>2</td>
                            <td>1984/85, 1985/86</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Mundial de Clubes</td>
                            <td>5</td>
                            <td>2022/23</td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>Supercopa de España</td>
                            <td>13</td>
                            <td>2024</td>
                        </tr>
                        <tr>
                            <th scope="row">7</th>
                            <td>Supercopa de Europa</td>
                            <td>6</td>
                            <td>2024</td>
                        </tr>
                      </tbody>
                    </table>
                
                </div>
            </div>
        </div>
    
    
    </div>
    
    </div>

</header>

@endsection