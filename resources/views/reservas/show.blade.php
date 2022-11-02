@extends('layouts.main')

@section('titulo', 'Detalle del reserva')

@section('content')

<div class="container">
    <table class="table table-bordered">
        <tr>
            <td>cedula</td>
            <td> {{ $reserva->cedula }}</td>
        </tr>
        <tr>
            <td>Nombre</td>
            <td> {{ $reserva->nombre }} </td>
        </tr>
        <tr>
            <td>Apellido</td>
            <td> {{ $reserva->apellido }} </td>
        </tr>
        <tr>
            <td>Telefono</td>
            <td> {{ $reserva->telefono }} </td>
        </tr>
        <tr>
            <td>Fecha entrada</td>
            <td> {{ $reserva->fecha_entrada }} </td>
        </tr>
        <tr>
            <td>Fecha salida</td>
            <td> {{ $reserva->fecha_salida }} </td>
        </tr>
    </table>
    {{-- @can(['administrador'])
    <h5 class="my-3">Desarrolladores: </h5>
    <ul class="list-group mb-3">
        @foreach($desarrolladores as $item)
            <li class="list-group-item list-group-item-info">{{ $item->nombre }} {{ $item->apellido }}</li>
        @endforeach
    </ul>
    @endcan --}}

    <a href="{{ route('reservas.index') }}" class="btn btn-outline-secondary"><i class="fa-solid fa-arrow-left"></i></a>
</div>


@endsection