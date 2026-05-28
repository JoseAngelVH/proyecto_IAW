<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventas</title>
</head>
<body>
    @extends('layouts.app')
    @section('title', 'Listado de Ventas')

    @section('content')
    <div class="bg-white p-4 rounded shadow-sm">
        <div style="display:flex;justify-content:space-between;align-items:center;">
            <h2>Ventas realizadas</h2>
        </div>

        <div id="sell-form" style="display:none; margin-top:1rem;">
            <div class="card p-3 mb-3">
                <form method="POST" action="{{ route('products.sell') }}">
                    @csrf
                    <div style="display:flex;gap:0.5rem;align-items:center;flex-wrap:wrap;">
                        <label for="product_id">Producto</label>
                        <select name="product_id" id="product_id" required>
                            <option value="">-- Seleccione --</option>
                            @foreach($products as $prod)
                                <option value="{{ $prod->id }}">{{ $prod->description }} (stock: {{ $prod->stock }})</option>
                            @endforeach
                        </select>

                        <label for="quantity">Cantidad</label>
                        <input type="number" name="quantity" id="quantity" min="1" value="1" required />

                        <button type="submit" class="btn-custom btn-nav-primary">Registrar</button>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th><th>Producto</th><th>Cantidad</th><th>Precio unit.</th><th>Total</th><th>Fecha</th>
                </tr>
            </thead>
            <tbody>
                @forelse($sales as $s)
                <tr>
                    <td>{{ $s->id }}</td>
                    <td>{{ $s->product?->description }}</td>
                    <td>{{ $s->quantity }}</td>
                    <td>{{ number_format($s->unit_price, 2) }}</td>
                    <td>{{ number_format($s->total_price, 2) }}</td>
                    <td>{{ $s->created_at->format('Y-m-d H:i') }}</td>
                </tr>
                @empty
                <tr><td colspan="6">No hay ventas registradas.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <script>
        document.getElementById('show-sell-btn').addEventListener('click', function(){
            var f = document.getElementById('sell-form');
            f.style.display = (f.style.display === 'none' || f.style.display === '') ? 'block' : 'none';
            if (f.style.display === 'block') { document.getElementById('product_id').focus(); }
        });
    </script>
    @endsection
</body>
</html>
