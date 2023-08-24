<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('NombrePersonal') }}
            {{ Form::text('NombrePersonal', $firma->NombrePersonal, ['class' => 'form-control' . ($errors->has('NombrePersonal') ? ' is-invalid' : ''), 'placeholder' => 'Nombrepersonal']) }}
            {!! $errors->first('NombrePersonal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Funcion') }}
            {{ Form::text('Funcion', $firma->Funcion, ['class' => 'form-control' . ($errors->has('Funcion') ? ' is-invalid' : ''), 'placeholder' => 'Funcion']) }}
            {!! $errors->first('Funcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('PlantelID') }}
            {{ Form::select('PlantelID', $campuses, $firma->PlantelID, ['class' => 'form-control' . ($errors->has('PlantelID') ? ' is-invalid' : ''), 'placeholder' => 'Plantelid']) }}
            {!! $errors->first('PlantelID', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('NivelPuesto') }}
            {{ Form::text('NivelPuesto', $firma->NivelPuesto, ['class' => 'form-control' . ($errors->has('NivelPuesto') ? ' is-invalid' : ''), 'placeholder' => 'Nivelpuesto']) }}
            {!! $errors->first('NivelPuesto', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>