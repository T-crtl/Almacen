<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('inventario') }}
            {{ Form::text('inventario', $inventory->inventario, ['class' => 'form-control' . ($errors->has('inventario') ? ' is-invalid' : ''), 'placeholder' => 'Inventario']) }}
            {!! $errors->first('inventario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $inventory->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('area_asignada') }}
            {{ Form::text('area_asignada', $inventory->area_asignada, ['class' => 'form-control' . ($errors->has('area_asignada') ? ' is-invalid' : ''), 'placeholder' => 'Area Asignada']) }}
            {!! $errors->first('area_asignada', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_reporte') }}
            {{ Form::text('fecha_reporte', $inventory->fecha_reporte, ['class' => 'form-control' . ($errors->has('fecha_reporte') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Reporte']) }}
            {!! $errors->first('fecha_reporte', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('valor') }}
            {{ Form::text('valor', $inventory->valor, ['class' => 'form-control' . ($errors->has('valor') ? ' is-invalid' : ''), 'placeholder' => 'Valor']) }}
            {!! $errors->first('valor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('plantel') }}
            {{ Form::text('plantel', $inventory->plantel, ['class' => 'form-control' . ($errors->has('plantel') ? ' is-invalid' : ''), 'placeholder' => 'Plantel']) }}
            {!! $errors->first('plantel', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estatus') }}
            {{ Form::text('estatus', $inventory->estatus, ['class' => 'form-control' . ($errors->has('estatus') ? ' is-invalid' : ''), 'placeholder' => 'Estatus']) }}
            {!! $errors->first('estatus', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('total_bienes') }}
            {{ Form::text('total_bienes', $inventory->total_bienes, ['class' => 'form-control' . ($errors->has('total_bienes') ? ' is-invalid' : ''), 'placeholder' => 'Total Bienes']) }}
            {!! $errors->first('total_bienes', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('monto_bienes') }}
            {{ Form::text('monto_bienes', $inventory->monto_bienes, ['class' => 'form-control' . ($errors->has('monto_bienes') ? ' is-invalid' : ''), 'placeholder' => 'Monto Bienes']) }}
            {!! $errors->first('monto_bienes', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>