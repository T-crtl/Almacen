<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('numero') }}
            {{ Form::text('numero', $area->numero, ['class' => 'form-control' . ($errors->has('numero') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione Numero']) }}
            {!! $errors->first('numero', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $area->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo') }}
            {{ Form::text('tipo', $area->tipo, ['class' => 'form-control' . ($errors->has('tipo') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione Tipo']) }}
            {!! $errors->first('tipo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('division') }}
            {{ Form::text('division', $area->division, ['class' => 'form-control' . ($errors->has('division') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione Division']) }}
            {!! $errors->first('division', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Plantel') }}
            {{ Form::select('plantelID', $campuses, $area->plantelID, ['class' => 'form-control' . ($errors->has('plantelID') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione Plantel']) }}
            {!! $errors->first('plantelID', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Edificio') }}
            {{ Form::select('edificioID', $edificios, $area->edificioID, ['class' => 'form-control' . ($errors->has('edificioID') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione Edificio']) }}
            {!! $errors->first('edificioID', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nivel') }}
            {{ Form::text('nivel', $area->nivel, ['class' => 'form-control' . ($errors->has('nivel') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione Nivel']) }}
            {!! $errors->first('nivel', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <p></p>
        <button type="submit" class="btn btn-primary">{{ __('Siguiente') }}</button>
    </div>
</div>