@extends('layouts.master')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detalle Venta Turnos Procesión de Velas - Bienvenido {{Auth::User()->name}}</h1>
    </div>
    @can('delete')
    <div class="mb-3">
        <a href="{{ route('velasexport.excel') }}" class="btn btn-success">Exportar a Excel</a>
    </div>
    @endcan
    <table class="table" id="turnos-table">
        <thead>
            <tr>
                <th scope="col">DPI</th>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Turno Adquirido</th>
                <th scope="col">Valor</th>
                <th scope="col">Forma de Pago</th>
                <th scope="col">Acción</th>
                <th scope="col" style="display:none;">Fecha de Creación</th> <!-- Columna oculta para created_at -->
            </tr>
        </thead>
        <tbody>
            @foreach($velasdetalle as $detalle)
                <tr>
                    <td>{{ $detalle->DPI }}</td>
                    <td>{{ $detalle->Nombres }}</td>
                    <td>{{ $detalle->Apellidos }}</td>
                    <td>{{ $detalle->turno->turno }}</td>
                    <td>{{ $detalle->Valor }}</td>
                    <td>{{ $detalle->Forma_pago }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <a href="{{ route('velasdetalle.pdf', ['id' => $detalle->id]) }}" class="btn btn-primary btn-sm">
                                <i class="fas fa-file-pdf"></i>
                            </a>
                            @can('delete')
                            <form action="{{ route('velasdetalle.destroy', ['id' => $detalle->id]) }}" method="POST" class="delete-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm delete-btn">
                                    <i class="fas fa-ban"></i>
                                </button>
                            </form>
                            @endcan
                        </div>
                    </td>
                    <td style="display:none;">{{ $detalle->created_at }}</td> <!-- Valor de created_at -->
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#turnos-table').DataTable({
                "order": [[7, "desc"]],  // Ordena por la columna de created_at (índice 7) en orden descendente
                "language": {
                    "decimal": "",
                    "emptyTable": "No hay información",
                    "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                    "infoEmpty": "Mostrando 0 a 0 de 0 Entradas",
                    "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                    "infoPostFix": "",
                    "thousands": ",",
                    "lengthMenu": "Mostrar _MENU_ entradas",
                    "loadingRecords": "Cargando...",
                    "processing": "Procesando...",
                    "search": "Buscar:",
                    "zeroRecords": "Sin resultados encontrados",
                    "paginate": {
                        "first": "Primero",
                        "last": "Último",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    },
                    "aria": {
                        "sortAscending": ": activar para ordenar la columna en orden ascendente",
                        "sortDescending": ": activar para ordenar la columna en orden descendente"
                    }
                }
            });
        });
    </script>
@endsection
