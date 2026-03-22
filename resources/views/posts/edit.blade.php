@extends('layouts.app')
@section('content')
<div id="edit-post-bg" class="min-vh-100 d-flex align-items-center py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="text-center fw-bold text-madrid-edit p-0">Editar publicación</h1>
                <div class="card shadow-sm p-4 border-0 rounded-4">
                    <form method="POST"
                          action="{{ route('posts.update',$post->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                        <label class="form-label fw-bold">Título</label>
                        <input type="text" name="title" class="form-control"
                               value="{{ old('title', $post->title) }}"
                               maxlength="150" required>
                        </div>              
                        <div class="mb-3">
                        <label class="form-label fw-bold">Slug</label>
                        <input type="text" name="slug" class="form-control"
                               value="{{ old('slug', $post->slug) }}" required>
                        </div>
                    
                        <div class="mb-3">
                        <label class="form-label fw-bold">Contenido</label>
                        <textarea name="content" class="form-control" rows="6">{{ old('content', $post->content) }}</textarea>
                        </div>
                    
                        <div class="mb-4">
                        <label class="form-label fw-bold">Estado</label>
                        <select name="status" class="form-control">
                            <option value="draft"
                                {{ $post->status == 'draft' ? 'selected' : '' }}>
                                Borrador
                            </option>
                            <option value="published"
                                {{ $post->status == 'published' ? 'selected' : '' }}>
                                Publicado
                            </option>
                        </select>
                        </div>
                        <div class="d-grid">
                        <button type="submit" class="btn btn-warning fw-bold shadow-sm">Actualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection