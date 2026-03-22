@extends('layouts.app')
@section('content')
<div id="pagina-index">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold text-madrid">Gestión de Publicaciones</h2>
            <a href="{{route('posts.create')}}" class="btn btn-madrid-gold shadow-sm">
               + Crear publicación
            </a>
        </div>
        @if(session('ok'))
            <p class="alert alert-success shadow-sm border-0">{{session('ok')}}</p>
        @endif
        <div class="card shadow-sm border-0 rounded-3 overflow-hidden">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="bg-madrid text-white">
                        <tr>
                            <th class=ps-3>Id</th>
                            <th>Titulo</th>
                            <th>Estado</th>
                            <th>Slug</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($posts as $post)
                          <tr>
                            <td class="ps-3">{{ $post->id }}</td>
                            <td>{{ $post->title }}</td>
                            <td><span class="badge-{{ $post->status == 'published' ? 'publicado' : 'borrador' }}">
                                {{ $post->status }}
                                </span>
                            </td>
                            <td>{{ $post->slug }}</td>
                            <td>
                                <div class="d-flex justify-content-center gap-2">
                                    <a href="{{ route('posts.show',$post) }}" class="btn btn-ve btn-info">Ver</a>
                                    <a href="{{ route('posts.edit',$post) }}" class="btn btn-ed ">Editar</a>
                                    <form method="POST" action="{{ route('posts.destroy',$post) }}" class="d-inline m-0">
                                        @csrf 
                                        @method('DELETE')
                                        <button class="btn btn-el btn-danger"onclick="return confirm('¿Eliminar?')">Eliminar</button>
                                    </form>
                                </div>
                            </td>
                          </tr>
                          @empty
                          <tr><td colspan="5">No hay publicaciones.</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>    
    </div>
</div>
@endsection

