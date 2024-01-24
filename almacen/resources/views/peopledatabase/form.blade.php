<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nomina') }}
            {{ Form::text('nomina', $peopledatabase->nomina, ['class' => 'form-control' . ($errors->has('nomina') ? ' is-invalid' : ''), 'placeholder' => 'Nomina']) }}
            {!! $errors->first('nomina', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $peopledatabase->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('adscripcion') }}
            {{ Form::text('adscripcion', $peopledatabase->adscripcion, ['class' => 'form-control' . ($errors->has('adscripcion') ? ' is-invalid' : ''), 'placeholder' => 'Adscripcion']) }}
            {!! $errors->first('adscripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo_contrato') }}
            {{ Form::text('tipo_contrato', $peopledatabase->tipo_contrato, ['class' => 'form-control' . ($errors->has('tipo_contrato') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Contrato']) }}
            {!! $errors->first('tipo_contrato', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('funcion') }}
            {{ Form::text('funcion', $peopledatabase->funcion, ['class' => 'form-control' . ($errors->has('funcion') ? ' is-invalid' : ''), 'placeholder' => 'Funcion']) }}
            {!! $errors->first('funcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('password') }}
            {{ Form::text('password', $peopledatabase->funcion, ['class' => 'form-control' . ($errors->has('password') ? ' is-invalid' : ''), 'placeholder' => 'Password']) }}
            {!! $errors->first('password', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        
        <div class="form-group">
            {{ Form::label('correo') }}
            {{ Form::text('correo', $peopledatabase->correo, ['class' => 'form-control' . ($errors->has('correo') ? ' is-invalid' : ''), 'placeholder' => 'Correo']) }}
            {!! $errors->first('correo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('foto') }}
            {{ Form::text('foto', $peopledatabase->foto, ['class' => 'form-control' . ($errors->has('foto') ? ' is-invalid' : ''), 'placeholder' => 'foto']) }}
            {!! $errors->first('foto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estatus') }}
            {{ Form::text('estatus', $peopledatabase->estatus, ['class' => 'form-control' . ($errors->has('estatus') ? ' is-invalid' : ''), 'placeholder' => 'Estatus']) }}
            {!! $errors->first('estatus', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nivel_educativo') }}
            {{ Form::text('nivel_educativo', $peopledatabase->nivel_educativo, ['class' => 'form-control' . ($errors->has('nivel_educativo') ? ' is-invalid' : ''), 'placeholder' => 'Nivel Educativo']) }}
            {!! $errors->first('nivel_educativo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('plantelID') }}
            {{ Form::select('plantelID', $campus, $peopledatabase->plantelID, ['class' => 'form-control' . ($errors->has('plantelID') ? ' is-invalid' : ''), 'placeholder' => 'Plantel']) }}
            {!! $errors->first('plantelID', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>