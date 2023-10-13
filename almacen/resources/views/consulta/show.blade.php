@extends('layouts.app')

@section('template_title')
    {{ $consulta->name ?? "{{ __('Show') Consulta" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Consulta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('consultas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Registro:</strong>
                            {{ $consulta->cons->registro }}
                        </div>
                        <div class="form-group">
                            <strong>Resguardatario:</strong>
                            {{ $consulta->cons->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $consulta->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Area:</strong>
                            {{ $consulta->area }}
                        </div>
                        <div class="form-group">
                            <strong>Observaciones:</strong>
                            {{ $consulta->observaciones }}
                        </div>
                        <div class="form-group">
                            <strong>Documento:</strong>
                            {{ $consulta->documento }}
                        </div>
                        <div class="form-group">
                            <strong>Numinv:</strong>
                            {{ $consulta->equipo->numInv }}
                        </div>
                        <div class="form-group">
                            <strong>Articulo:</strong>
                            {{ $consulta->equipo->articulo }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $consulta->equipo->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Marca:</strong>
                            {{ $consulta->equipo->marca }}
                        </div>
                        <div class="form-group">
                            <strong>Modelo:</strong>
                            {{ $consulta->equipo->modelo }}
                        </div>
                        <div class="form-group">
                            <strong>Serie:</strong>
                            {{ $consulta->equipo->serie }}
                        </div>
                        <div class="form-group">
                            <strong>Fechaentrada:</strong>
                            {{ $consulta->equipo->fechaEntrada }}
                        </div>
                        <div class="form-group">
                            <strong>Total:</strong>
                            {{ $consulta->total }}
                        </div>
                        <div class="form-group">
                            <strong>Monto:</strong>
                            {{ $consulta->monto }}
                        </div>
                        <div class="form-group">
                            <strong>Firma:</strong>
                            {{ $consulta->firmas->NombrePersonal }}
                        </div>
                        <div class="form-group">
                            <strong>Inventarios:</strong>
                            {{ $consulta->firmas->NombrePersonal }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
