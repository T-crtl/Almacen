<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $equipo->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cuenta') }}
            {{ Form::text('cuenta', $equipo->cuenta, ['class' => 'form-control' . ($errors->has('cuenta') ? ' is-invalid' : ''), 'placeholder' => 'Cuenta']) }}
            {!! $errors->first('cuenta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numInv') }}
            {{ Form::text('numInv', $equipo->numInv, ['class' => 'form-control' . ($errors->has('numInv') ? ' is-invalid' : ''), 'placeholder' => 'Numero inventario']) }}
            {!! $errors->first('numInv', '<div class="invalid-feedback">:message</div>') !!}
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
            {{ Form::label('num_ref') }}
            {{ Form::text('num_ref', $equipo->num_ref, ['class' => 'form-control' . ($errors->has('num_ref') ? ' is-invalid' : ''), 'placeholder' => 'Numero referencia']) }}
            {!! $errors->first('num_ref', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('factura') }}
            {{ Form::text('factura', $equipo->factura, ['class' => 'form-control' . ($errors->has('factura') ? ' is-invalid' : ''), 'placeholder' => 'Factura']) }}
            {!! $errors->first('factura', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('proveedor') }}
            {{ Form::text('proveedor', $equipo->proveedor, ['class' => 'form-control' . ($errors->has('proveedor') ? ' is-invalid' : ''), 'placeholder' => 'Proveedor']) }}
            {!! $errors->first('proveedor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pedido') }}
            {{ Form::text('pedido', $equipo->pedido, ['class' => 'form-control' . ($errors->has('pedido') ? ' is-invalid' : ''), 'placeholder' => 'Pedido']) }}
            {!! $errors->first('pedido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('contrato') }}
            {{ Form::text('contrato', $equipo->contrato, ['class' => 'form-control' . ($errors->has('contrato') ? ' is-invalid' : ''), 'placeholder' => 'Contrato']) }}
            {!! $errors->first('contrato', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::text('estado', $equipo->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('resguardo') }}
            {{ Form::text('resguardo', $equipo->resguardo, ['class' => 'form-control' . ($errors->has('resguardo') ? ' is-invalid' : ''), 'placeholder' => 'Resguardo']) }}
            {!! $errors->first('resguardo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('resguardo2') }}
            {{ Form::text('resguardo2', $equipo->resguardo2, ['class' => 'form-control' . ($errors->has('resguardo2') ? ' is-invalid' : ''), 'placeholder' => 'Resguardo 2']) }}
            {!! $errors->first('resguardo2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('observaciones') }}
            {{ Form::text('observaciones', $equipo->observaciones, ['class' => 'form-control' . ($errors->has('observaciones') ? ' is-invalid' : ''), 'placeholder' => 'Observaciones']) }}
            {!! $errors->first('observaciones', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precio') }}
            {{ Form::text('precio', $equipo->precio, ['class' => 'form-control' . ($errors->has('precio') ? ' is-invalid' : ''), 'placeholder' => 'Precio']) }}
            {!! $errors->first('precio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fechaEntrada') }}
            {{ Form::text('fechaEntrada', $equipo->fechaEntrada, ['class' => 'form-control' . ($errors->has('fechaEntrada') ? ' is-invalid' : ''), 'placeholder' => 'Fecha de entrada']) }}
            {!! $errors->first('fechaEntrada', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fechaBaja') }}
            {{ Form::text('fechaBaja', $equipo->fechaBaja, ['class' => 'form-control' . ($errors->has('fechaBaja') ? ' is-invalid' : ''), 'placeholder' => 'Fecha de baja']) }}
            {!! $errors->first('fechaBaja', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nomina') }}
            {{ Form::text('nomina', $equipo->nomina, ['class' => 'form-control' . ($errors->has('nomina') ? ' is-invalid' : ''), 'placeholder' => 'Nomina']) }}
            {!! $errors->first('nomina', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nomina2') }}
            {{ Form::text('nomina2', $equipo->nomina2, ['class' => 'form-control' . ($errors->has('nomina2') ? ' is-invalid' : ''), 'placeholder' => 'Nomina 2']) }}
            {!! $errors->first('nomina2', '<div class="invalid-feedback">:message</div>') !!}
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
            {{ Form::text('areaId', $equipo->areaId, ['class' => 'form-control' . ($errors->has('areaId') ? ' is-invalid' : ''), 'placeholder' => 'Areaid']) }}
            {!! $errors->first('areaId', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>