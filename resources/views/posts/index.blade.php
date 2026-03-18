@extends('layouts.app')
@section('content')

<div class="container">

    <h1>Gestion de Publicaciones</h1>
    <a href="{{route('posts.create')}}">Crear publicación</a>
    <hr>
    @if(session('ok'))
        <p>{{session('ok')}}</p>
    @endif
    <table class="Tabla">
        <thead>
            <tr>
                <th>Id</th>
                <th>Titulo</th>
                <th>Estado</th>
                <th>Slug</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($posts as $post)
              <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->status }}</td>
                <td>{{ $post->slug }}</td>
                <td class="d-flex gap-2">
                  <a href="{{ route('posts.show',$post) }}">Ver</a>
                  <a href="{{ route('posts.edit',$post) }}">Editar</a>
                  <form method="POST" action="{{ route('posts.destroy',$post) }}">
                      @csrf 
                      @method('DELETE')
                      <button onclick="return confirm('¿Eliminar?')">Eliminar</button>
                  </form>
                </td>
              </tr>
              @empty
              <tr><td colspan="5">No hay publicaciones.</td></tr>
              @endforelse
        </tbody>
    </table>  
</div>
@endsection

