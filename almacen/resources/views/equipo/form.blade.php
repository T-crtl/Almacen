<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('numInv') }}
            {{ Form::text('numInv', $equipo->numInv, ['class' => 'form-control' . ($errors->has('numInv') ? ' is-invalid' : ''), 'placeholder' => 'Numinv']) }}
            {!! $errors->first('numInv', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $equipo->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('marca') }}
            {{ Form::text('marca', $equipo->marca, ['class' => 'form-control' . ($errors->has('marca') ? ' is-invalid' : ''), 'placeholder' => 'Marca']) }}
            {!! $errors->first('marca', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('modelo') }}
            {{ Form::text('modelo', $equipo->modelo, ['class' => 'form-control' . ($errors->has('modelo') ? ' is-invalid' : ''), 'placeholder' => 'Modelo']) }}
            {!! $errors->first('modelo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('serie') }}
            {{ Form::text('serie', $equipo->serie, ['class' => 'form-control' . ($errors->has('serie') ? ' is-invalid' : ''), 'placeholder' => 'Serie']) }}
            {!! $errors->first('serie', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precio') }}
            {{ Form::text('precio', $equipo->precio, ['class' => 'form-control' . ($errors->has('precio') ? ' is-invalid' : ''), 'placeholder' => 'Precio']) }}
            {!! $errors->first('precio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fechaEntrada') }}
            {{ Form::text('fechaEntrada', $equipo->fechaEntrada, ['class' => 'form-control' . ($errors->has('fechaEntrada') ? ' is-invalid' : ''), 'placeholder' => 'Fechaentrada']) }}
            {!! $errors->first('fechaEntrada', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estatus') }}
            {{ Form::text('estatus', $equipo->estatus, ['class' => 'form-control' . ($errors->has('estatus') ? ' is-invalid' : ''), 'placeholder' => 'Estatus']) }}
            {!! $errors->first('estatus', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('articulo') }}
            {{ Form::text('articulo', $equipo->articulo, ['class' => 'form-control' . ($errors->has('articulo') ? ' is-invalid' : ''), 'placeholder' => 'Articulo']) }}
            {!! $errors->first('articulo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('rutaImg') }}
            {{ Form::text('rutaImg', $equipo->rutaImg, ['class' => 'form-control' . ($errors->has('rutaImg') ? ' is-invalid' : ''), 'placeholder' => 'Rutaimg']) }}
            {!! $errors->first('rutaImg', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipoAdq') }}
            {{ Form::text('tipoAdq', $equipo->tipoAdq, ['class' => 'form-control' . ($errors->has('tipoAdq') ? ' is-invalid' : ''), 'placeholder' => 'Tipoadq']) }}
            {!! $errors->first('tipoAdq', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('areaId') }}
            {{ Form::select('areaId', $areas, $equipo->areaId, ['class' => 'form-control' . ($errors->has('areaId') ? ' is-invalid' : ''), 'placeholder' => 'Areaid']) }}
            {!! $errors->first('areaId', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>