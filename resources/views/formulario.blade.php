@extends('principal')
@section('contenido')

<header>
  <div class="container-fluid bg-light p-3">
      <div class= "row justify-content-center">
          <div class="col-6">
              <div class="card border-2 rounded-3">
                  <div class="bg-primary p-3 text-center">
                          <h2 class="text-white fs-1">Registro de Madridista</h2>
                          <p class="text-white">Únete a la familia blanca y recibe noticias exclusivas</p>
                  </div>
                  
                  <form method="POST" action="{{ url('/formulario') }}" class="p-2"> <!--Envía datos a la ruta /registro utilizando el método POST-->
                      @csrf <!--Protección CSRF-->
                  
                    <div class="mb-3">
                      <label for="nombre" class="form-label">Nombre</label>
                      <input type="text" name="nombre" class="form-control" id="nombre" aria-describedby="emailHelp">
                      <div id="emailHelp" class="form-text"></div>
                    </div>
                    <div class="mb-3">
                      <label for="apellido" class="form-label">Apellido</label>
                      <input type="text" name="apellido" class="form-control" id="apellido" aria-describedby="emailHelp">
                      <div id="emailHelp" class="form-text"></div>
                    </div>
                    <div class="mb-3">
                      <label for="correo" class="form-label">Correo Electrónico</label>
                      <input type="email" name="correo" class="form-control" id="correo">
                    </div>
                    <div class="mb-3">
                      <label for="motivo" class="form-label">¿Por qué eres Madridista?</label>
                      <textarea name="motivo" class="form-control" id="motivo" rows="2"></textarea>
                    </div>
                    <div class="mb-3 form-check">
                      <input type="checkbox" name="terminos" class="form-check-input" id="terminos">
                      <label class="form-check-label" for="terminos">Aceptas los términos y condiciones del club</label>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">¡ENVIAR!</button>
                    </div>
                  </form>
                
                  @if(session('success')) 
                      <div class="alert alert-success text-center"> 
                          {{ session('success') }} 
                      </div>
                  @endif
                    
              </div>
          </div>
      </div>    
    
  </div>
</header>

@endsection