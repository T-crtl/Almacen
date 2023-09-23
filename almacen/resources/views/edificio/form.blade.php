<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('numero') }}
            {{ Form::text('numero', $edificio->numero, ['class' => 'form-control' . ($errors->has('numero') ? ' is-invalid' : ''), 'placeholder' => 'Numero']) }}
            {!! $errors->first('numero', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $edificio->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nivelId') }}
            {{ Form::text('nivelId', $edificio->nivelId, ['class' => 'form-control' . ($errors->has('nivelId') ? ' is-invalid' : ''), 'placeholder' => 'Nivelid']) }}
            {!! $errors->first('nivelId', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('areaId') }}
            {{ Form::select('areaId', $areas, $edificio->areaId, ['class' => 'form-control' . ($errors->has('areaId') ? ' is-invalid' : ''), 'placeholder' => 'Areaid']) }}
            {!! $errors->first('areaId', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>