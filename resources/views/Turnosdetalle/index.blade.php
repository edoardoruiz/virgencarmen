@extends('layouts.master')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detalle Venta Turnos Mayor - Bienvenido {{Auth::User()->name}}</h1>
    </div>
    @can('delete')
    <div class="mb-3">
        <a href="{{ route('export.excel') }}" class="btn btn-success">Exportar a Excel</a>
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
            @foreach($turnosdetalle as $detalle)
                <tr>
                    <td>{{ $detalle->DPI }}</td>
                    <td>{{ $detalle->Nombres }}</td>
                    <td>{{ $detalle->Apellidos }}</td>
                    <td>{{ $detalle->turno->turno }}</td>
                    <td>{{ $detalle->Valor }}</td>
                    <td>{{ $detalle->Forma_pago }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <a href="{{ route('turnosdetalle.pdf', ['id' => $detalle->id]) }}" class="btn btn-primary btn-sm">
                                <i class="fas fa-file-pdf"></i>
                            </a>
                            @can('delete')
                            <button type="button" class="btn btn-warning btn-sm edit-btn"
                            data-id="{{ $detalle->id }}"
                            data-dpi="{{ $detalle->DPI }}"
                            data-nombres="{{ $detalle->Nombres }}"
                            data-apellidos="{{ $detalle->Apellidos }}"
                            data-toggle="modal"
                            data-target="#editModal">
                            <i class="fas fa-edit"></i>
                            </button>                        
                            <button type="button" class="btn btn-danger btn-sm delete-btn" 
                            data-id="{{ $detalle->id }}" 
                            data-toggle="modal" 
                            data-target="#deleteModal">
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
<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Editar Detalle</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editForm" method="POST" action="">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="editDPI">DPI</label>
                        <input type="text" class="form-control" id="editDPI" name="DPI">
                    </div>
                    <div class="form-group">
                        <label for="editNombres">Nombres</label>
                        <input type="text" class="form-control" id="editNombres" name="Nombres">
                    </div>
                    <div class="form-group">
                        <label for="editApellidos">Apellidos</label>
                        <input type="text" class="form-control" id="editApellidos" name="Apellidos">
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Delete Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Confirmar Eliminación</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ¿Estás seguro de que deseas eliminar este registro?
            </div>
            <div class="modal-footer">
                <form id="deleteForm" method="POST" action="">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
</div>

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

        // Handle edit button click
        $('.edit-btn').on('click', function() {
            var id = $(this).data('id');
            var dpi = $(this).data('dpi');
            var nombres = $(this).data('nombres');
            var apellidos = $(this).data('apellidos');

            // Fill modal form with current data
            $('#editDPI').val(dpi);
            $('#editNombres').val(nombres);
            $('#editApellidos').val(apellidos);

            // Update form action URL
            $('#editForm').attr('action', '/turnosdetalle/' + id);
        });

        $('.delete-btn').on('click', function() {
            var id = $(this).data('id');
            // Update form action URL
            $('#deleteForm').attr('action', '/turnosdetalle/' + id);
        });
    </script>
@endsection
