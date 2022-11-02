@extends('layouts.main')

@section('titulo', 'Editar reserva')

@section('content')
    <form action="{{ route('reservas.update', $reserva->id) }}" method="post" class="needs-validation" novalidate>
        @method('PUT')
        @csrf 
        <div class="form-floating mb-3">
            <input type="number" class="form-control" id="cedula" name="cedula" placeholder="cedula" value="{{ $reserva->cedula }}" required>
            <label for="cedula">Cedula</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre" value="{{ $reserva->nombre }}" required>
            <label for="nombre">Nombre</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="apellido" name="apellido" placeholder="apellido" value="{{ $reserva->apellido }}" required>
            <label for="apellido">Apellido</label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" class="form-control" id="telefono" name="telefono" placeholder="telefono" value="{{ $reserva->telefono }}" required>
            <label for="telefono">Telefono</label>
        </div>
        <div class="form-floating mb-3">
            <input type="date" class="form-control" id="fecha_entrada" name="fecha_entrada" placeholder="fecha_entrada" value="{{ $reserva->fecha_entrada }}" required>
            <label for="fecha_entrada">Fecha entrada</label>
        </div>
        <div class="form-floating mb-3">
            <input type="date" class="form-control" id="fecha_salida" name="fecha_salida" placeholder="fecha_salida" value="{{ $reserva->fecha_salida }}" required>
            <label for="fecha_salida">Fecha salida</label>
        </div>
        <button type="submit" class="btn btn-outline-secondary">Guardar</button>
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
