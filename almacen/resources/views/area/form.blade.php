<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Descripcion') }}
            {{ Form::text('Descripcion', $area->Descripcion, ['class' => 'form-control' . ($errors->has('Descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('Descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo') }}
            {{ Form::text('Tipo', $area->Tipo, ['class' => 'form-control' . ($errors->has('Tipo') ? ' is-invalid' : ''), 'placeholder' => 'Tipo']) }}
            {!! $errors->first('Tipo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Division') }}
            {{ Form::text('Division', $area->Division, ['class' => 'form-control' . ($errors->has('Division') ? ' is-invalid' : ''), 'placeholder' => 'Division']) }}
            {!! $errors->first('Division', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('PlantelID') }}
            {{ Form::select('PlantelID', $campuses, $area->PlantelID, ['class' => 'form-control' . ($errors->has('PlantelID') ? ' is-invalid' : ''), 'placeholder' => 'Plantelid']) }}
            {!! $errors->first('PlantelID', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('EdificioID') }}
            {{ Form::select('EdificioID', $edificios, $area->EdificioID, ['class' => 'form-control' . ($errors->has('EdificioID') ? ' is-invalid' : ''), 'placeholder' => 'Edificioid']) }}
            {!! $errors->first('EdificioID', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nivel') }}
            {{ Form::select('Nivel', $niveles, $area->Nivel, ['class' => 'form-control' . ($errors->has('Nivel') ? ' is-invalid' : ''), 'placeholder' => 'Nivel']) }}
            {!! $errors->first('Nivel', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>