<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/x-icon" href="/assets/logo-vt.svg" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('css/styless.css') }}">
</head>
<form method="POST" action="{{ route('login') }}">
    @csrf

    <body class="fondo d-flex justify-content-center align-items-center vh-100">
        <div class="color p-5 rounded-5 text-secondary shadow" style="width: 25rem">
            <div class="text-center colorr fs-1 fw-bold">Login</div>
            <div class="input-group mt-4">
                <input id="email" class="form-control w-100 " type="email" name="email" :value="old('email')"
                    required autofocus>
            </div>
            <div class="input-group mt-1">
                <input id="password" class="form-control w-100" type="password" name="password" required
                    autocomplete="current-password" />

            </div>
            <div class="d-flex justify-content-around mt-1">
                <div class="d-flex align-items-center gap-1">
                    <input class="form-check-input" type="checkbox" />
                    <div class="pt-1" style="font-size: 0.9rem">{{ __('Remember me') }}</div>
                </div>
                <div class="pt-1">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-decoration-none colorr fw-semibold"
                            style="font-size: 0.9rem">{{ __('Forgot your password?') }}</a>
                    @endif
                </div>
            </div>
            <div class="">
                <button class="btn btn-info text-white w-100 mt-4 fw-semibold shadow-sm">
                    {{ __('Log in') }}
                </button>
            <div class="d-flex gap-1 justify-content-center mt-1">
                <div>¿no tienes una cuenta</div>
                <a href="{{ route('register') }}" class="text-decoration-none colorr fw-semibold">Register</a>
            </div>
            <div class="p-3">
                <div class="border-bottom text-center" style="height: 0.9rem">
                    <span class="bg-white px-3">O</span>
                </div>
            </div>
            <div class="btn d-flex gap-2 justify-content-center border mt-3 shadow-sm">
                <div class="fw-semibold text-secondary">Continua con Google</div>
            </div>
        </div>
    </body>
</form>

</html>
