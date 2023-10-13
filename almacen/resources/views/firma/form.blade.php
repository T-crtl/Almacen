<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre del Personal') }}
            {{ Form::text('NombrePersonal', $firma->NombrePersonal, ['class' => 'form-control' . ($errors->has('NombrePersonal') ? ' is-invalid' : ''), 'placeholder' => 'Nombre del personal']) }}
            {!! $errors->first('NombrePersonal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div><br></div>
        <div class="form-group">
            {{ Form::label('Funcion') }}
            {{ Form::text('Funcion', $firma->Funcion, ['class' => 'form-control' . ($errors->has('Funcion') ? ' is-invalid' : ''), 'placeholder' => 'Funcion']) }}
            {!! $errors->first('Funcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div><br></div>
        <div class="form-group">
            {{ Form::label('Plantel') }}
            {{ Form::select('PlantelID', $campuses, $firma->PlantelID, ['class' => 'form-control' . ($errors->has('PlantelID') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar Plantel']) }}
            {!! $errors->first('PlantelID', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div><br></div>
        <div class="form-group">
            {{ Form::label('Nivel de Puesto') }}
            {{ Form::text('NivelPuesto', $firma->NivelPuesto, ['class' => 'form-control' . ($errors->has('NivelPuesto') ? ' is-invalid' : ''), 'placeholder' => 'Nivel asignado de puesto']) }}
            {!! $errors->first('NivelPuesto', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div><br></div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Aceptar') }}</button>
    </div>
</div>