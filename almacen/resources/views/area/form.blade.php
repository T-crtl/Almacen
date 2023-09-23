<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('numero') }}
            {{ Form::text('numero', $area->numero, ['class' => 'form-control' . ($errors->has('numero') ? ' is-invalid' : ''), 'placeholder' => 'Numero']) }}
            {!! $errors->first('numero', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $area->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo') }}
            {{ Form::text('tipo', $area->tipo, ['class' => 'form-control' . ($errors->has('tipo') ? ' is-invalid' : ''), 'placeholder' => 'Tipo']) }}
            {!! $errors->first('tipo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('division') }}
            {{ Form::text('division', $area->division, ['class' => 'form-control' . ($errors->has('division') ? ' is-invalid' : ''), 'placeholder' => 'Division']) }}
            {!! $errors->first('division', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('plantelID') }}
            {{ Form::select('plantelID', $campuses, $area->plantelID, ['class' => 'form-control' . ($errors->has('plantelID') ? ' is-invalid' : ''), 'placeholder' => 'Plantelid']) }}
            {!! $errors->first('plantelID', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('edificioID') }}
            {{ Form::select('edificioID', $edificios, $area->edificioID, ['class' => 'form-control' . ($errors->has('edificioID') ? ' is-invalid' : ''), 'placeholder' => 'Edificioid']) }}
            {!! $errors->first('edificioID', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nivel') }}
            {{ Form::text('nivel', $area->nivel, ['class' => 'form-control' . ($errors->has('nivel') ? ' is-invalid' : ''), 'placeholder' => 'Nivel']) }}
            {!! $errors->first('nivel', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>