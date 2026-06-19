@extends('layout.projects')

@section('title')
    Product List
@endsection

@section('main')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="mb-0">Product List</h1>
        <a href="{{ route('prod.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle"></i> Nuevo producto
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    @if(isset($products) && count($products) > 0)
        @foreach($products as $product)
            <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                <div class="card-body p-0">
                    <div class="d-flex align-items-center">
                        <div class="p-5 flex-grow-1">
                            <h2 class="fw-bolder">{{ $product->name }}</h2>
                            <p>{{ $product->description }}</p>
                            <p>Price: ${{ number_format($product->price, 2) }}</p>
                            <a href="{{ route('prod.edit', $product->id) }}" class="btn btn-outline-primary">
                                <i class="bi bi-pencil"></i> Editar
                            </a>
                        </div>
                        <img class="img-fluid" src="https://dummyimage.com/300x400/343a40/6c757d" alt="..." />
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p>No products available.</p>
    @endif
@endsection
