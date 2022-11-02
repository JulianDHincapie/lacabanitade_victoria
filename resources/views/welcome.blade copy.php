<!DOCTYPE html>
<html lang="es" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Reservas de Software</title>
</head>
<body class="d-flex h-100 text-center bg-dark text-white">
    <div class="d-flex h-100 w-100 p-3 mx-auto flex-column main-container">
        <header class="mb-auto">
            <img src="{{ asset('images/logo-Sena.png') }}" alt="logo SENA" class="logo">
        </header>
        <main class="px-3">
            <h1>Reservas de Software</h1>
            <p class="fs-4 fw-lighter my-5">Sistema de información que permite gestionar los reservas de software de una casa de desarrollo</p>
            @auth 
                <div class="row gy-3">
                    <div class="col-md">
                        <a href="{{ route('reservas.index') }}" class="btn btn-light btn-lg w-100">reservas</a>     
                    </div>
                    @can(['administrador'])
                        <div class="col-md">
                            <a href="{{ route('desarrolladores.index') }}" class="btn btn-light btn-lg w-100">Desarrolladores</a>     
                        </div>
                    @endcan
                </div>
            @else
                <a href="{{ route('login') }}" class="btn btn-light btn-lg w-100">Ingresar</a>     
            @endauth
        </main>
        <footer class="mt-auto">
            . : : ADSI 2472155 : : .
        </footer>
    </div>

<script src="{{ asset('css/bootstrap/js/bootstrap.bundle.js') }}"></script>
</body>
</html>