<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @extends('layouts.app')
    @section('title', 'Venta')

    @section('content')
    <div class="bg-white p-4 rounded shadow-sm">
    <h2>Venta de productos</h2>

    @if($products->isEmpty())
        <p>No hay productos para vender.</p>
    @else
        <form method="POST" action="{{ route('products.sell') }}">
        @csrf

        <div class="mb-3">
            <label class="form-label">Producto</label>
            <select name="product_id" class="form-select" required>
            <option value="">-- Selecciona un producto --</option>
            @foreach($products as $p)
                <option value="{{ $p->id }}">
                {{ $p->description }} ({{ $p->category?->name }})
                </option>
            @endforeach
            </select>
        </div>

        <button class="btn btn-primary">
            Vender producto
        </button>
        </form>
    @endif
    </div>
    @endsection
</body>
</html>