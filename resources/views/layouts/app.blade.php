<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Inventario')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --accent-color: #00d2ff;
            --bg-dark: #1a1a2e;
            --title-color: #ffffff;
            --footer-color: #051937;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f0f2f5;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        header {
            background-color: var(--bg-dark);
            padding: 2.5rem 0;
        }

        header h1 {
            color: var(--title-color);
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin: 0;
            text-align: center;
        }

        .nav-container {
            background: #ffffff;
            padding: 1.5rem 0;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        }

        .btn-custom {
            border-radius: 12px; 
            padding: 0.8rem 1.8rem;
            font-weight: 700;
            text-transform: uppercase;
            font-size: 0.85rem;
            display: inline-block;
        }

        .btn-nav-primary {
            background: #004d7a;
            color: white;
        }

        .btn-nav-primary:hover {
            background: #004d7a;
            color: white;
        }

        .btn-nav-manage {
            background: #ff4b2b;
            color: white;
        }

        .btn-nav-manage:hover {
            background: #ff4b2b;
            color: white;
        }

        .main-card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.05);
            padding: 3rem;
        }

        footer {
            background-color: var(--footer-color);
            color: #ffffff;
            padding: 2rem 0;
            margin-top: auto;
        }
    </style>
</head>

<body>
    <header>
        <div class="container text-center">
            <h1>Inventario Laravel</h1>
        </div>
    </header>

    <nav class="nav-container text-center">
        <div class="container d-flex justify-content-center gap-3 flex-wrap">
            <a class="btn-custom btn-nav-primary" href="{{ route('home') }}">Inicio</a>
            <a class="btn-custom btn-nav-primary" href="{{ route('products.create') }}">Entrada</a>
            <a class="btn-custom btn-nav-primary" href="{{ route('products.index') }}">Listado General</a>
            <a class="btn-custom btn-nav-primary" href="{{ route('products.filter.form') }}">Filtros</a>
            <a class="btn-custom btn-nav-manage" href="{{ route('products.manage') }}">Modificar / Borrar</a>
        </div>
    </nav>

    <main class="container my-5">
        @if(session('ok'))
            <div class="alert alert-success rounded-pill px-4 border-0 shadow-sm mb-4">
                <b>✓</b> {{ session('ok') }}
            </div>
        @endif

        <div class="main-card">
            @yield('content')
        </div>
    </main>

    <footer class="text-center">
        <div class="container">
            <p class="mb-0 fw-bold">Hecho por: José Ángel Vega Huelva</p>
        </div>
    </footer>
</body>
</html>