@extends('layouts.master')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Venta Turnos Mayor</h1>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Asignación</th>
                <th scope="col">Turno</th>
                <th scope="col">Direccion</th>
                <th scope="col">Precio</th>
                <th scope="col">Disponibilidad</th>
                <th scope="col">Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach($turnos as $turno)
                <tr>
                    <td>{{ $turno->id }}</td>
                    <td>{{ $turno->asignacion }}</td>
                    <td>{{ $turno->turno }}</td>
                    <td>{{ $turno->direccion }}</td>
                    <td>{{ $turno->precio }}</td>
                    <td>{{ $turno->disponibilidad }}</td>
                    <td>
                        @if($turno->disponibilidad > 0)
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#compraModal" 
                                data-id="{{ $turno->id }}" data-turno="{{ $turno->turno }}" data-precio="{{ $turno->precio }}">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        @else
                            <button type="button" class="btn btn-secondary btn-sm" disabled>
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Modal HTML -->
    <div class="modal fade" id="compraModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Comprar Turno</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="compraForm" action="{{ route('turnos.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="turno_id" id="turno_id">
                        <div class="form-group">
                            <label for="turno">Turno</label>
                            <input type="text" class="form-control" id="turno" name="turno" readonly>
                        </div>
                        <div class="form-group">
                            <label for="precio">Precio</label>
                            <input type="text" class="form-control" id="precio" name="precio" readonly>
                        </div>
                        @can('sell multiple turns')
                        <div class="form-group">
                            <label for="quantity">Cantidad</label>
                            <input type="number" class="form-control" id="quantity" name="quantity" min="1" value="1" required>
                        </div>
                        @endcan
                        <div class="form-group">
                            <label for="DPI">DPI</label>
                            <input type="text" class="form-control" id="DPI" name="DPI">
                        </div>
                        <div class="form-group">
                            <label for="nombres">Nombres</label>
                            <input type="text" class="form-control" id="nombres" name="nombres" required>
                        </div>
                        <div class="form-group">
                            <label for="apellidos">Apellidos</label>
                            <input type="text" class="form-control" id="apellidos" name="apellidos" required>
                        </div>
                        <div class="form-group">
                            <label for="forma_pago">Forma de Pago</label>
                            <select class="form-control" id="forma_pago" name="forma_pago">
                                <option value="Efectivo">Efectivo</option>
                                @can('delete')
                                <option value="Transferencia">Transferencia</option>
                                @endcan
                            </select>
                        </div>
                        <div class="form-group" id="numero_autorizacion_group" style="display: none;">
                            <label for="numero_autorizacion">Número de Autorización</label>
                            <input type="text" class="form-control" id="numero_autorizacion" name="numero_autorizacion">
                        </div>
                        <button type="submit" class="btn btn-primary">Comprar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        $('#compraModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); // Botón que disparó el modal
            var turnoId = button.data('id');
            var turnoNombre = button.data('turno');
            var turnoPrecio = button.data('precio');

            var modal = $(this);
            modal.find('.modal-body #turno_id').val(turnoId);
            modal.find('.modal-body #turno').val(turnoNombre);
            modal.find('.modal-body #precio').val(turnoPrecio);
        });

        $('#forma_pago').change(function() {
            var selectedFormaPago = $(this).val();
            var numeroAutorizacionGroup = $('#numero_autorizacion_group');
            var numeroAutorizacion = $('#numero_autorizacion');

            if (selectedFormaPago === 'Transferencia') {
                numeroAutorizacionGroup.show();
                numeroAutorizacion.attr('required', true); // Añade el atributo 'required'
            } else {
                numeroAutorizacionGroup.hide();
                numeroAutorizacion.removeAttr('required'); // Elimina el atributo 'required'
            }
        });
    });
</script>
@endsection
