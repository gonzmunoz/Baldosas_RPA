@extends('layout')

@section('additional-header')

<style>
    /* Quitar flechas input number
     Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }
</style>

@endsection

@section('content')
<div class="section-full content-inner bg-white contact-style-1">
    <div class="container">
        <div class="row">
            <!-- Left part start -->
            <div class="col-lg-8">
                <div class="p-a30 bg-gray clearfix m-b30 ">
                    <h2 class="text-center">Pedir Presupuesto</h2>
                    <div class="dzFormMsg"></div>
                    <form method="post" action="{{ route('saveBudget') }}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <span class="font-weight-bold text-danger">Nombre y Apellidos</span>
                                    <input name="nombre_apellidos" type="text" required class="form-control" placeholder="Introduce tu Nombre y Apellidos">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <span class="font-weight-bold text-danger">Email</span>
                                    <input name="email" type="email" required class="form-control" placeholder="Introduce tu Email">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <span class="font-weight-bold text-danger">Número de Teléfono</span>
                                    <input name="telefono" type="number" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==9)  return false;" onkeydown="javascript: return event.keyCode == 69 || event.keyCode == 188 || event.keyCode == 190 ? false : true" required class="form-control" placeholder="Introduce tu Número de Telefono">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <span class="font-weight-bold text-danger">Dirección</span>
                                    <input name="direccion" type="text" required class="form-control" placeholder="Introduce tu Dirección">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <span class="font-weight-bold text-danger">Código Postal</span>
                                    <input name="codigo_postal" type="number" onKeyPress="if(this.value.length==5)  return false;" onkeydown="javascript: return event.keyCode == 69 ? false : true" required required class="form-control" placeholder="Introduce tu Código Postal">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <span class="font-weight-bold text-danger">Metros Cuadrados</span>
                                    <input name="metros_cuadrados" type="number" onkeydown="javascript: return event.keyCode == 69 || event.keyCode == 188 || event.keyCode == 190  ? false : true" required class="form-control" placeholder="Introduce los Metros Cuadrados">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <span class="font-weight-bold text-danger">Tipo de Habitación</span>
                                    <select class="form-control" id="tipo_habitacion" name="tipo_habitacion" required>
                                        <option value="">Elegir Habitación</option>
                                        <option value="Salón">Salón</option>
                                        <option value="Cocina">Cocina</option>
                                        <option value="Baño">Baño</option>
                                        <option value="Dormitorio">Dormitorio</option>
                                        <option value="Patio">Patio</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <span class="font-weight-bold text-danger">Tipo de Suelo</span>
                                    <input name="tipo_suelo" type="text" required class="form-control" value="{{ $floorTile['nombre'] }}" disabled>
                                </div>
                            </div>
                            <input type="hidden" name="id_baldosa" id="id_baldosa" value="{{ $floorTile['id'] }}">
                            <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                <span class="font-weight-bold text-danger">Fecha De Finalización</span>
                                <input type="text" required class="form-control" name="fecha_finalizacion" id="fecha_finalizacion" placeholder="Elegir una fecha">
                            </div>
                            <div class="col-lg-12">
                                <button name="submit" type="submit" value="Submit" class="site-button"> <span>Pedir Presupuesto</span> </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Left part END -->
            <!-- right part start -->
            <div class="col-lg-4 d-lg-flex">
                <div class="dlab-box">
                    <div class="dlab-info p-a20 text-center">
                        <div class="p-lr20">
                            <h4 class="m-a0">{{ $floorTile["nombre"] }}</h4>
                        </div>
                    </div>
                    <div class="dlab-media"><img src="{{ asset('images/baldosas') . '/' . $floorTile['imagen'] }}" alt=""></a></div>
                </div>
            </div>
            <!-- right part END -->
        </div>
    </div>
</div>
@endsection

@section('additional-scripts')

<script>
    jQuery(window).load(function() {
        $(".bootstrap-select").hide();
    });

    $.datepicker.regional['es'] = {
        closeText: 'Cerrar',
        prevText: '< Ant',
        nextText: 'Sig >',
        currentText: 'Hoy',
        monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
        dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
        dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mié', 'Juv', 'Vie', 'Sáb'],
        dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sá'],
        weekHeader: 'Sm',
        dateFormat: 'dd/mm/yy',
        firstDay: 1,
        isRTL: false,
        showMonthAfterYear: false,
        yearSuffix: ''
    };
    $.datepicker.setDefaults($.datepicker.regional['es']);
    $(function() {
        $("#fecha_finalizacion").datepicker({
            beforeShowDay: $.datepicker.noWeekends,
            minDate: 8,
        });
    });
</script>

@endsection