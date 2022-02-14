@extends('layout')

@section('additional-header')
<link rel="stylesheet" type="text/css" href="plugins/datatable/datatables.css">
@endsection

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-12 m-b30">
            <div class="table-responsive">
                <table class="table check-tbl text-center" id="products-table">
                    <thead style="background-color: #EE3131" class="text-light">
                        <tr>
                            <th class="align-middle text-white">Código</th>
                            <th class="align-middle text-white">Nombre</th>
                            <th class="align-middle text-white">Precio</th>
                            <th class="align-middle text-white">Stock</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($floorTiles as $floorTile)
                        <tr>
                            <th scope="row" class="align-middle" title="{{ $floorTile['codigo'] }}">
                                {{ $floorTile['id'] }}
                            </th>
                            <td class="align-middle" title="{{ $floorTile['descripcion_producto'] }}">{{ $floorTile['nombre'] }}</td>
                            <td class="align-middle" title="{{ $floorTile['precio'] }}">{{ $floorTile['precio'] }} €</td>
                            <td class="align-middle" title="{{ $floorTile['stock'] }}">{{ $floorTile['stock'] }}</td>
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
            $("#products-table").dataTable({
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