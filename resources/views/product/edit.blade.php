@extends('layout.projects')

@section('title')
    Editar Producto
@endsection

@section('main')
    <div class="card shadow rounded-4 border-0 p-5">
        <h1 class="fw-bolder mb-4">Editar Producto</h1>

        <form action="{{ route('prod.update', $product->id) }}" method="POST">
            @method('PUT')
            @include('product._form')

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary px-4">
                    <i class="bi bi-check-circle"></i> Actualizar
                </button>
                <a href="{{ route('prod.index') }}" class="btn btn-outline-secondary px-4">
                    Cancelar
                </a>
            </div>
        </form>
    </div>
@endsection
