<!DOCTYPE html>
<html lang="en">
<head>
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
                    <option value="low_stock">Stock bajo (<= 5)</option>
                    <option value="stock_gt_10">Stock alto (> 10)</option>
                    <option value="price_lt_20">Precio barato (< 20)</option>
                </select>
            </div>
            <button class="btn btn-primary">Aplicar filtro</button>
        </form>
    </div>
    @endsection
</body>
</html>