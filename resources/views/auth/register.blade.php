<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/x-icon" href="/assets/logo-vt.svg" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('css/styless.css') }}">
</head>
<form method="POST" action="{{ route('register') }}">
    @csrf

    <body class="fondo d-flex justify-content-center align-items-center vh-100">
        <div class="color p-5 rounded-5 text-secondary shadow" style="width: 25rem">
            <div class="text-center colorr fs-1 fw-bold">register</div>
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                        <li class="alert alert-danger">
                            {{ $error }}
                        </li>
                @endforeach
            @endif
            <div class="input-group mt-4">
                <input id="name" class="form-control w-100 " placeholder="Nombre" type="name" name="name" :value="old('name')"
                    required autofocus>
            </div>
            <div class="input-group mt-2">
                <input id="email" class="form-control w-100 " placeholder="Email" type="email" name="email" :value="old('email')"
                    required autofocus>
            </div>
            <div class="input-group mt-2">
                <input id="password" class="form-control w-100" type="password" placeholder="Contraseña" :value="__('Password')" name="password" required
                    autocomplete="current-password" />
            </div>
            <div class="input-group mt-2">
                <input id="password_confirmation" class="form-control w-100" placeholder="Confirma tu contraseña" type="password" :value="__('Confirm Password')" name="password_confirmation" required
                    autocomplete="current-password_confirmation" />
            </div>
            
            <div class="">
                <button class="btn btn-info text-white w-100 mt-4 fw-semibold shadow-sm">
                    {{ __('Register') }}
                </button>
            <div class="d-flex gap-1 justify-content-center mt-1">
                <a href="{{ route('login') }}" class="text-decoration-none colorr fw-semibold">{{ __('Already registered?') }}</a>
            </div>
        </div>
    </body>
</form>

</html>
