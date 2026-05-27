<!DOCTYPE html>
<html lang="en">
<head>

    <!--
    Formulario de filtrado.
    Permite seleccionar criterios para mostrar solo ciertos productos.
    -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @extends('layouts.app')
    @section('title', 'Listado filtrado')
    @section('content')
    <div class="bg-white p-4 rounded shadow-sm">
        <h2>Filtrar productos</h2>
        <form method="GET" action="{{ route('products.filter.results') }}">
            <div class="mb-3">
                <label class="form-label">Criterio</label>
                <select class="form-select" name="criterion">
                    <option value="">-- Sin criterio --</option>
                    <option value="low_stock" @selected(old('criterion') == 'low_stock')>Stock bajo (<= 5)</option>
                    <option value="stock_gt_10" @selected(old('criterion') == 'stock_gt_10')>Stock alto (> 10)</option>
                    <option value="price_lt_20" @selected(old('criterion') == 'price_lt_20')>Precio barato (< 20)</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Categoría</label>
                <select class="form-select" name="category_id">
                    <option value="">-- Todas las categorías --</option>
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}" @selected(old('category_id') == $category->id)>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <button class="btn btn-primary">Aplicar filtro</button>
        </form>
    </div>
    @endsection
</body>
</html>