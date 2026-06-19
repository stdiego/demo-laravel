@extends('layout.projects')

@section('title')
    Crear Producto
@endsection

@section('main')
    <div class="card shadow rounded-4 border-0 p-5">
        <h1 class="fw-bolder mb-4">Crear Producto</h1>

        <form action="{{ route('prod.store') }}" method="POST">
            @include('product._form')

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary px-4">
                    <i class="bi bi-check-circle"></i> Guardar
                </button>
                <a href="{{ route('prod.index') }}" class="btn btn-outline-secondary px-4">
                    Cancelar
                </a>
            </div>
        </form>
    </div>
@endsection
