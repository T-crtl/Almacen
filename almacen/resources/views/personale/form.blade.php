<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nomina') }}
            {{ Form::text('nomina', $personale->nomina, ['class' => 'form-control' . ($errors->has('nomina') ? ' is-invalid' : ''), 'placeholder' => 'Nomina']) }}
            {!! $errors->first('nomina', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $personale->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('adscripcion') }}
            {{ Form::text('adscripcion', $personale->adscripcion, ['class' => 'form-control' . ($errors->has('adscripcion') ? ' is-invalid' : ''), 'placeholder' => 'Adscripcion']) }}
            {!! $errors->first('adscripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo_contrato') }}
            {{ Form::text('tipo_contrato', $personale->tipo_contrato, ['class' => 'form-control' . ($errors->has('tipo_contrato') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Contrato']) }}
            {!! $errors->first('tipo_contrato', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('plantelId') }}
            {{ Form::text('plantelId', $personale->plantelId, ['class' => 'form-control' . ($errors->has('plantelId') ? ' is-invalid' : ''), 'placeholder' => 'Plantelid']) }}
            {!! $errors->first('plantelId', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('funcion') }}
            {{ Form::text('funcion', $personale->funcion, ['class' => 'form-control' . ($errors->has('funcion') ? ' is-invalid' : ''), 'placeholder' => 'Funcion']) }}
            {!! $errors->first('funcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('correo') }}
            {{ Form::text('correo', $personale->correo, ['class' => 'form-control' . ($errors->has('correo') ? ' is-invalid' : ''), 'placeholder' => 'Correo']) }}
            {!! $errors->first('correo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('rutaImg') }}
            {{ Form::text('rutaImg', $personale->rutaImg, ['class' => 'form-control' . ($errors->has('rutaImg') ? ' is-invalid' : ''), 'placeholder' => 'Rutaimg']) }}
            {!! $errors->first('rutaImg', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estatus') }}
            {{ Form::text('estatus', $personale->estatus, ['class' => 'form-control' . ($errors->has('estatus') ? ' is-invalid' : ''), 'placeholder' => 'Estatus']) }}
            {!! $errors->first('estatus', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nivel_educativo') }}
            {{ Form::text('nivel_educativo', $personale->nivel_educativo, ['class' => 'form-control' . ($errors->has('nivel_educativo') ? ' is-invalid' : ''), 'placeholder' => 'Nivel Educativo']) }}
            {!! $errors->first('nivel_educativo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>