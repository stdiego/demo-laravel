@csrf

<div class="mb-3">
    <label for="name" class="form-label fw-bold">Nombre</label>
    <input
        type="text"
        class="form-control @error('name') is-invalid @enderror"
        id="name"
        name="name"
        value="{{ old('name', $product->name ?? '') }}"
        placeholder="Nombre del producto"
        required
        autofocus
    />
    @error('name')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="description" class="form-label fw-bold">Descripción</label>
    <textarea
        class="form-control @error('description') is-invalid @enderror"
        id="description"
        name="description"
        rows="4"
        placeholder="Descripción del producto"
    >{{ old('description', $product->description ?? '') }}</textarea>
    @error('description')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-4">
    <label for="price" class="form-label fw-bold">Precio</label>
    <div class="input-group">
        <span class="input-group-text">$</span>
        <input
            type="number"
            step="0.01"
            min="0"
            class="form-control @error('price') is-invalid @enderror"
            id="price"
            name="price"
            value="{{ old('price', $product->price ?? '') }}"
            placeholder="0.00"
            required
        />
        @error('price')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>
