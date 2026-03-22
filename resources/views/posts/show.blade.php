@extends('layouts.app')
@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <a href="{{ route('posts.index') }}" class="btn btn-sm btn-outline-secondary mb-4">
                <i class="bi bi-arrow-left"></i> Volver a la lista
            </a>
            <div class="post-header mb-5">
                <h1 class="display-4 fw-bold text-madrid-blue mb-3">{{ $post->title }}</h1>
                <div class="d-flex align-items-center text-muted border-bottom pb-3">
                    <span class="badge bg-warning text-dark rounded-pill me-3 px-3 py-2 fw-bold">NOTICIA</span>
                    <p class="text-uppercase fw-bold ls-1 mb-0">{{ $post->slug }}</p>
                </div>
            </div>
            <div class="post-content bg-white p-4 p-md-5 rounded-4 shadow-sm border-top  border-5">
                <div class="content-text fs-5 lh-lg">
                    {!! nl2br(e($post->content)) !!}
                    <!-- e() escapa HTML primero, nl2br() solo convierte saltos -->
                </div>
            </div>
            <div class="bg-light p-4 my-2 border-top text-center">
                <div class="small text-muted fw-bold">
                    REAL MADRID FAN CLUB
                </div>
                <div class="social-placeholders">
                    <i class="bi bi-share me-2"></i>
                    <i class="bi bi-facebook mx-1"></i>
                    <i class="bi bi-twitter-x mx-1"></i>
                    <i class="bi bi-whatsapp mx-1"></i>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection