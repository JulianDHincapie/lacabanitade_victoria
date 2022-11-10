@extends('layouts.main')

@section('titulo', 'Hacer reserva')

@section('content')
    {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}
    <form action="{{ route('reservas.store') }}" method="post" class="needs-validation" novalidate>
        @csrf
    <div class="row">
        <div class="col-sm-6">
            <div class="form-floating mb-3">
                <input type="number" class="form-control @error('cedula') is-invalid @enderror" id="cedula" name="cedula" placeholder="cedula"
                    value="{{ old('cedula') }}">
                <label for="cedula">Cedula</label>
                @error('cedula')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                {{-- @if ($errors->has('cedula'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('cedula') }}</strong>
                    </span>
                @endif --}}
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control @error('nombre') is-invalid @enderror" id="nombre" name="nombre" placeholder="nombre"
                    value="{{ old('nombre') }}">
                <label for="nombre">Nombre</label>
                @error('nombre')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control @error('apellido') is-invalid @enderror" id="apellido" name="apellido" placeholder="apellido"
                    value="{{ old('apellido') }}">
                <label for="apellido">Apellido</label>
                @error('apellido')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-floating mb-3">
                <input type="number" class="form-control @error('telefono') is-invalid @enderror" id="telefono" name="telefono" placeholder="telefono"
                    value="{{ old('telefono') }}">
                <label for="telefono">Telefono</label>
                @error('telefono')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="date" class="form-control @error('fecha_entrada') is-invalid @enderror" id="fecha_entrada" name="fecha_entrada" placeholder="fecha_entrada"
                    value="{{ old('fecha_entrada') }}">
                <label for="fecha_entrada">Fecha entrada</label>
                @error('fecha_entrada')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="date" class="form-control @error('fecha_salida') is-invalid @enderror" id="fecha_salida" name="fecha_salida" placeholder="fecha_salida"
                    value="{{ old('fecha_salida') }}">
                <label for="fecha_salida">Fecha salida</label>
                @error('fecha_salida')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3 mt-2">
            <button class="btn btn-danger w-100" href="/">Cancelar</button>
        </div>
        <div class="col-sm-9 mt-2">
            <button type="submit" class="btn btn-outline-dark w-100">Confirmar</button>
        </div>
    </div>
        
        
    </form>
@endsection

@section('scripts')
    <script>
        (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>
@endsection
