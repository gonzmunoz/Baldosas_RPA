@extends('layout')

@section('additional-header')
<link rel="stylesheet" type="text/css" href="plugins/datatable/datatables.css">
@endsection

@section('content')
<div class="pl-5 pr-5 mt-5 mx-auto">
    <div class="row">
        <div class="col-12 m-b30">
            <div class="table-responsive">
                <table class="table check-tbl text-center pr-5" id="budgets-table">
                    <thead style="background-color: #EE3131" class="text-light">
                        <tr>
                            <th class="align-middle text-white">ID</th>
                            <th class="align-middle text-white">Nombre y Apellidos</th>
                            <th class="align-middle text-white">Email</th>
                            <th class="align-middle text-white">Teléfono</th>
                            <th class="align-middle text-white">Dirección</th>
                            <th class="align-middle text-white">Código Postal</th>
                            <th class="align-middle text-white">Metros Cuadrados</th>
                            <th class="align-middle text-white">Tipo de Suelo</th>
                            <th class="align-middle text-white">Tipo de Habitación</th>
                            <th class="align-middle text-white">Fecha Finalización</th>
                            <th class="align-middle text-white">Fecha Solicitud</th>
                            <th class="align-middle text-white">Validado</th>
                            <th class="align-middle text-white">Aprobado</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($budgets as $budget)
                        <tr>
                            <th scope="row" class="align-middle" title="{{ $budget['id'] }}">
                                {{ $budget['id'] }}
                            </th>
                            <td class="align-middle" title="{{ $budget['nombre_apellidos'] }}">{{ $budget['nombre_apellidos'] }}</td>
                            <td class="align-middle" title="{{ $budget['email'] }}">{{ $budget['email'] }}</td>
                            <td class="align-middle" title="{{ $budget['telefono'] }}">{{ $budget['telefono'] }}</td>
                            <td class="align-middle" title="{{ $budget['direccion'] }}">{{ $budget['direccion'] }}</td>
                            <td class="align-middle" title="{{ $budget['codigo_postal'] }}">{{ $budget['codigo_postal'] }}</td>
                            <td class="align-middle" title="{{ $budget['metros_cuadrados'] }}">{{ $budget['metros_cuadrados'] }}</td>
                            <td class="align-middle" title="{{ $budget['tipo_suelo'] }}">{{ $budget['tipo_suelo'] }}</td>
                            <td class="align-middle" title="{{ $budget['tipo_habitacion'] }}">{{ $budget['tipo_habitacion'] }}</td>
                            <td class="align-middle" title="{{ $budget['fecha_finalizacion'] }}">{{ date('d-m-Y', strtotime($budget['fecha_finalizacion'])) }}</td>
                            <td class="align-middle" title="{{ $budget['fecha_solicitud'] }}">{{ date('d-m-Y', strtotime($budget['fecha_solicitud'])) }}</td>
                            @if($budget['validado'] == 0)
                            <td class="align-middle" title="No">No</td>
                            @else
                            <td class="align-middle" title="Si">Si</td>
                            @endif
                            @if($budget['aprobado'] == 0)
                            <td class="align-middle" title="No">No</td>
                            @else
                            <td class="align-middle" title="Si">Si</td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('additional-scripts')
<script src="plugins/datatable/datatables.min.js" type="text/javascript"></script>
<script src="plugins/datatable/spanish-datatable.json" type="text/javascript"></script>
<script src="js/datatable-responsive.js" type="text/javascript"></script>
<script>
    $(window).on("load", function() {
        $(function() {
            $("#budgets-table").dataTable({
                pageLength: 6,
                "language": {
                    "url": "plugins/datatable/spanish-datatable.json"
                },
                lengthChange: false,
            });
        });
    });
</script>
@endsection