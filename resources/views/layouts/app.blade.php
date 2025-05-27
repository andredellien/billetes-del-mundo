<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Billetes del Mundo')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar {
            background-color: #343a40 !important;
        }
        .navbar-brand, .nav-link {
            color: #ffffff !important;
        }
        .card {
            border: none;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.2s;
            height: 100%; /* Asegura que todas las tarjetas tengan la misma altura */
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .card-img-top {
            width: 100%;
            height: 180px; /* Altura fija para las imágenes */
            object-fit: contain; /* Ajusta la imagen sin distorsionarla y cubriendo el espacio */
            border-bottom: 1px solid #eee;
        }
        .card-body {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .card-title {
            font-size: 1.25rem;
            font-weight: bold;
        }
        .card-text small {
            color: #6c757d;
        }
        .footer {
            background-color: #343a40;
            color: #ffffff;
            padding: 20px 0;
            text-align: center;
            margin-top: 40px;
        }

        .control-btn {
            background-color: black;
    width: 40px;
    height: 40px;
        }

        /* Estilo para el slider (funcionalidad extra) */
        .carousel-item img {
            height: 300px; /* Altura fija para las imágenes del slider */
            object-fit: contain;
            width: 100%;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('billetes.index') }}">Billetes del Mundo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('billetes.index') }}">Lista de Billetes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('acerca.de') }}">Acerca de</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <footer class="footer">
        <div class="container">
            <p>&copy; {{ date('Y') }} Billetes del Mundo. Desarrollado con Laravel.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>