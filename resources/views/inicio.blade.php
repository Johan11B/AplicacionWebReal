@extends('principal')
@section('contenido')
<!--Carrusel-->
<header>
    <div id="carouselExampleCaptions" class="carousel slide">
       <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
       <div class="carousel-inner">
           <div class="carousel-item active">
               <img src="asset/images/fondo5.webp" class="d-block w-100" style="object-fit: cover; max-height: 520px;" alt="...">
               <div class="carousel-caption d-none d-md-block">
                   <h5 class="text-warning fs-1"> ¡Bienvenido al Club de Fans del Real Madrid!</h5>
                   <p class="text-white">Descubre todo sobre el mejor club del mundo, sus éxitos, jugadores y comó unirte a nuestra comunidad de fans.</p>
                   <a href="{{ route('login') }}" class="btn btn-primary border-light border-2 text-light">Únete ahora</a>
               </div>
           </div>
           <div class="carousel-item">
               <img src="asset/images/fondo2.webp" class="d-block w-100" style="object-fit: cover; max-height: 520px;" alt="...">
               <div class="carousel-caption d-none d-md-block">
                   <h5 class="text-warning fs-1"> ¡Bienvenido al Club de Fans del Real Madrid!</h5>
                   <p>Descubre todo sobre el mejor club del mundo, sus éxitos, jugadores y cómo unirte a nuestra comunidad de fans.</p>
                   <a href="{{ route('login') }}" class="btn btn-primary border-light border-2 text-light">Únete ahora</a>
               </div>
           </div>
           <div class="carousel-item">
               <img src="asset/images/fondo3.webp" class="d-block w-100" style="object-fit: cover; max-height: 520px;" alt="Champions League">
               <div class="carousel-caption d-none d-md-block">
                   <h5 class="text-warning fs-1"> ¡Bienvenido al Club de Fans del Real Madrid!</h5>
                   <p>Descubre todo sobre el mejor club del mundo, sus éxitos, jugadores y comó unirte a nuestra comunidad de fans.</p>
                   <a href="{{ route('login') }}" class="btn btn-primary border-light border-2 text-light">Únete ahora</a>
               </div>
           </div>
       </div>
       <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
           <span class="visually-hidden">Previous</span>
       </button>
       <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
           <span class="visually-hidden">Next</span>
       </button>
    </div>
</header>
@endsection

         