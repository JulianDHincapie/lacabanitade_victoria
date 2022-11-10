@extends('layouts.main')

@section('titulo', 'Reservas')

@section('content')
@can(['administrador'])
<div class="mt-3 ms-5">
    <a href="{{ route('reservas.create') }}" class="btn btn-secondary shadow">
        Hacer una reserva.
    </a>
</div>
@endcan
    @if($query)
        <div class="alert alert-warning" role="alert">
            <p>A continuación se presentan los resultados de la búsqueda: <span class="fw-bold">{{ $query }}</span></p>
        </div>
        
    @endif
    <div class="my-3 px-5">
        @if(count($reservas) > 0)
        <table class="table table-hover border" style="">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reservas as $item)
                <tr class="">
                    <td>{{ $item->nombre }}</td>
                    <td class="d-flex">
                        <a href="{{ route('reservas.show', $item->id) }}"
                            class="btn btn-outline-primary me-3">Ver</a>
                        <a href="{{ route('reservas.edit', $item->id) }}"
                            class="btn btn-outline-warning me-3">Editar</a>
                        <form action="{{ route('reservas.destroy', $item->id) }}" method="post"
                            class="justify-content-start form-delete">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger me-3">Borrar</button>
                        </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $reservas->links() }}
        @else
            <p>La búsqueda no encontró resultados</p>
        @endif
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        //Captura del evento submit del formulario para eliminar
        $('.form-delete').submit(function(e){
            // Para el lanzamiento del evento
            e.preventDefault();
            //Lanzar alerta de sweetAlert
            Swal.fire({
                title: '¿Está seguro de eliminar el proyecto?',
                text: "¡Esta acción no se podrá deshacer!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#dc4545',
                confirmButtonText: 'Sí, eliminar!'
                }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                }
            })
        });
    </script>
@endsection