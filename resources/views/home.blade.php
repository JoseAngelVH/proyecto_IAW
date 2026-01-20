<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @extends('layouts.app')
    @section('title', 'Bienvenida')
    @section('content')
        <div class="p-4 bg-white rounded shadow-sm">
            <h2>Bienvenido/a</h2>
            <p>Usa los botones superiores para gestionar el inventario.</p>
        </div>
    @endsection
</body>
</html>