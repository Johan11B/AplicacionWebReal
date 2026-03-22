@extends('layouts.app')
@section('content')

<div id="create-post-bg" class="min-vh-100 d-flex align-items-center py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="text-center fw-bold text-madrid-dark mb-4">Nueva publicación</h1>
                <div class="card-edit shadow-sm p-4 border-0 rounded-4">
                    <form method="POST" action="{{ route('posts.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label fw-bold">Título</label>
                            <input type="text" name="title" class="form-control"
                                   value="{{ old('title') }}"
                                   maxlength="150" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Slug</label>
                            <input type="text" name="slug" class="form-control"
                                   value="{{ old('slug') }}" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Contenido</label>
                            <textarea name="content" class="form-control" rows="6" required>{{ old('content') }}</textarea>
                        </div>
                        <div class="mb-4">
                            <label class="form-label fw-bold">Estado</label>
                            <select name="status" class="form-control">
                                <option value="draft">Borrador</option>
                                <option value="published">Publicado</option>
                            </select>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-warning fw-bold shadow-sm">Guardar</button>
                        </div>
                        <div class="d-flex justify-content-center mt-2">
                            <a href="{{ route('posts.index') }}" class="btn btn-outline-danger btn-sm px-5 fw-bold shadow-sm">
                                <i class="bi bi-x-circle me-1"></i> CANCELAR Y VOLVER
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

