@extends('layouts.app')

@section('template_title')
    {{ $equipo->name ?? "{{ __('Show') Equipo" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Equipo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('equipos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Numero de Inventario:</strong>
                            {{ $equipo->numInv }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $equipo->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Marca:</strong>
                            {{ $equipo->marca }}
                        </div>
                        <div class="form-group">
                            <strong>Modelo:</strong>
                            {{ $equipo->modelo }}
                        </div>
                        <div class="form-group">
                            <strong>Serie:</strong>
                            {{ $equipo->serie }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $equipo->precio }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de entrada:</strong>
                            {{ $equipo->fechaEntrada }}
                        </div>
                        <div class="form-group">
                            <strong>Estatus:</strong>
                            {{ $equipo->estatus }}
                        </div>
                        <div class="form-group">
                            <strong>Articulo:</strong>
                            {{ $equipo->articulo }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            {{ $equipo->rutaImg }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo de adquisicion:</strong>
                            {{ $equipo->tipoAdq }}
                        </div>
                        <div class="form-group">
                            <strong>Area:</strong>
                            {{ $equipo->areas->descripcion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
