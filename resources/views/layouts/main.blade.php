<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <title>@yield('titulo')</title>
</head>
<body class="bg-light">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
        <div class="container">
            <a class="navbar-brand" href="index.php">Gestión de Reservas</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"*>
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Reservas
                        </a>
                        <ul class="dropdown-menu">
                            @can(['administrador'])
                            <li><a class="dropdown-item" href="{{ route('reservas.index') }}">Listar</a></li>
                            @endcan
                                <li><a class="dropdown-item" href="{{ route('reservas.create') }}">Crear nuevo</a></li>
                            
                        </ul>
                        @can(['administrador'])
                        <li class="nav-item ">
                            <a class="nav-link text-light" href="{{ route('usuarios.index') }}">Usuarios</a>
                        </li>
                        @endcan
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar..." name="buscar" aria-label="Buscar">
                    <button class="btn btn-outline-light" type="submit">Buscar</button>
                </form>
                <ul class="navbar-nav text-white ms-3">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="{{ route('logout')}}"
                                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                Cerrar sesión
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="post">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <h1 class="text-center mt-4">@yield('titulo')</h1>
    <div class="my-3 container">
        @yield('content')
    </div>
    

    <script src="{{ asset('css/bootstrap/js/bootstrap.bundle.js') }}"></script>
    @yield('scripts')
</body>
</html>