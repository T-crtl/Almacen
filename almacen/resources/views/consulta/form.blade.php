<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('nomina') }}
            {{ Form::select('nomina', $nominas, $consulta->nomina, ['class' => 'form-control', 'id' => 'nomina', 'placeholder' => 'Nomina']) }}
            {!! $errors->first('nomina', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('resguardatario') }}
            {{ Form::select('resguardatario', $nombres, $consulta->resguardatario, ['class' => 'form-control', 'id' => 'resguardatario', 'placeholder' => 'Resguardatario']) }}
            {!! $errors->first('resguardatario', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#nomina').change(function() {
                    var nominaId = $(this).val();

                    // Realizar la solicitud AJAX
                    $.ajax({
                        type: 'GET',
                        url: '/obtener-resguardatarios/' + nominaId,
                        success: function(data) {
                            // Actualizar dinámicamente el campo resguardatario
                            $('#resguardatario').empty(); // Limpiar opciones existentes
                            $.each(data, function(key, value) {
                                $('#resguardatario').append('<option value="' + key + '">' +
                                    value + '</option>');
                            });
                        }
                    });
                });
            });
        </script>

        <div class="form-group">
            {{ Form::label('fecha') }}
            {{ Form::text('fecha', $consulta->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('area') }}
            {{ Form::select('area', $areas, $consulta->area, ['class' => 'form-control' . ($errors->has('area') ? ' is-invalid' : ''), 'placeholder' => 'Area']) }}
            {!! $errors->first('area', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('observaciones') }}
            {{ Form::text('observaciones', $consulta->observaciones, ['class' => 'form-control' . ($errors->has('observaciones') ? ' is-invalid' : ''), 'placeholder' => 'Observaciones']) }}
            {!! $errors->first('observaciones', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('documento') }}
            {{ Form::text('documento', $consulta->documento, ['class' => 'form-control' . ($errors->has('documento') ? ' is-invalid' : ''), 'placeholder' => 'Documento']) }}
            {!! $errors->first('documento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numInv') }}
            {{ Form::text('numInv', $consulta->numInv, ['class' => 'form-control' . ($errors->has('numInv') ? ' is-invalid' : ''), 'placeholder' => 'Numero de Inventario']) }}
            {!! $errors->first('numInv', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('articulo') }}
            {{ Form::text('articulo', $consulta->articulo, ['class' => 'form-control' . ($errors->has('articulo') ? ' is-invalid' : ''), 'placeholder' => 'Articulo']) }}
            {!! $errors->first('articulo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $consulta->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('marca') }}
            {{ Form::text('marca', $consulta->marca, ['class' => 'form-control' . ($errors->has('marca') ? ' is-invalid' : ''), 'placeholder' => 'Marca']) }}
            {!! $errors->first('marca', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('modelo') }}
            {{ Form::text('modelo', $consulta->modelo, ['class' => 'form-control' . ($errors->has('modelo') ? ' is-invalid' : ''), 'placeholder' => 'Modelo']) }}
            {!! $errors->first('modelo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('serie') }}
            {{ Form::text('serie', $consulta->serie, ['class' => 'form-control' . ($errors->has('serie') ? ' is-invalid' : ''), 'placeholder' => 'Serie']) }}
            {!! $errors->first('serie', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fechaEntrada') }}
            {{ Form::text('fechaEntrada', $consulta->fechaEntrada, ['class' => 'form-control' . ($errors->has('fechaEntrada') ? ' is-invalid' : ''), 'placeholder' => 'Fecha de entrada']) }}
            {!! $errors->first('fechaEntrada', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('total') }}
            {{ Form::text('total', $consulta->total, ['class' => 'form-control' . ($errors->has('total') ? ' is-invalid' : ''), 'placeholder' => 'Total']) }}
            {!! $errors->first('total', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('monto') }}
            {{ Form::text('monto', $consulta->monto, ['class' => 'form-control' . ($errors->has('monto') ? ' is-invalid' : ''), 'placeholder' => 'Monto']) }}
            {!! $errors->first('monto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('firma') }}
            {{ Form::text('firma', $consulta->firma, ['class' => 'form-control' . ($errors->has('firma') ? ' is-invalid' : ''), 'placeholder' => 'Firma']) }}
            {!! $errors->first('firma', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('inventarios') }}
            {{ Form::text('inventarios', $consulta->inventarios, ['class' => 'form-control' . ($errors->has('inventarios') ? ' is-invalid' : ''), 'placeholder' => 'Inventarios']) }}
            {!! $errors->first('inventarios', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
