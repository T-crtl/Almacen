<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('cuenta_contable') }}
            {{ Form::text('cuenta_contable', $safeguard->cuenta_contable, ['class' => 'form-control' . ($errors->has('cuenta_contable') ? ' is-invalid' : ''), 'placeholder' => 'Cuenta Contable']) }}
            {!! $errors->first('cuenta_contable', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $safeguard->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precio_inicial') }}
            {{ Form::text('precio_inicial', $safeguard->precio_inicial, ['class' => 'form-control' . ($errors->has('precio_inicial') ? ' is-invalid' : ''), 'placeholder' => 'Precio Inicial']) }}
            {!! $errors->first('precio_inicial', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ejercicio') }}
            {{ Form::text('ejercicio', $safeguard->ejercicio, ['class' => 'form-control' . ($errors->has('ejercicio') ? ' is-invalid' : ''), 'placeholder' => 'Ejercicio']) }}
            {!! $errors->first('ejercicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('porcentaje_depresiacion') }}
            {{ Form::text('porcentaje_depresiacion', $safeguard->porcentaje_depresiacion, ['class' => 'form-control' . ($errors->has('porcentaje_depresiacion') ? ' is-invalid' : ''), 'placeholder' => 'Porcentaje Depresiacion']) }}
            {!! $errors->first('porcentaje_depresiacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('valor_historico') }}
            {{ Form::text('valor_historico', $safeguard->valor_historico, ['class' => 'form-control' . ($errors->has('valor_historico') ? ' is-invalid' : ''), 'placeholder' => 'Valor Historico']) }}
            {!! $errors->first('valor_historico', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>