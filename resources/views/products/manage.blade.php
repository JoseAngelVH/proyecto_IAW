<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @extends('layouts.app')
    @section('title', 'Modificar / Borrar')
    @section('content')
    <div class="bg-white p-4 rounded shadow-sm">
        <h2>Gestionar productos</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th><th>Descripción</th><th>Categoría</th><th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $p)
                <tr>
                    <td>{{ $p->id }}</td>
                    <td>{{ $p->description }}</td>
                    <td>{{ $p->category?->name }}</td>
                    <td class="d-flex gap-2">
                        <a class="btn btn-sm btn-warning" href="{{ route('products.edit', $p) }}">Editar</a>
                        <form method="POST" action="{{ route('products.destroy', $p) }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('¿Borrar producto?')">
                                Borrar
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endsection
</body>
</html>