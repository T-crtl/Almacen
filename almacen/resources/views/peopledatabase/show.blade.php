@extends('layouts.app')

@section('template_title')
    {{ $peopledatabase->name ?? "{{ __('Show') Peopledatabase" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Peopledatabase</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('peopledatabases.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nomina:</strong>
                            {{ $peopledatabase->registro }}
                        </div>
                        
                        <div class="form-group">
                            <strong>Nomina:</strong>
                            {{ $peopledatabase->nomina }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $peopledatabase->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Adscripcion:</strong>
                            {{ $peopledatabase->adscripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Contrato:</strong>
                            {{ $peopledatabase->tipo_contrato }}
                        </div>
                        <div class="form-group">
                            <strong>Funcion:</strong>
                            {{ $peopledatabase->funcion }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $peopledatabase->correo }}
                        </div>
                        <div class="form-group">
                            <strong>Rutaimg:</strong>
                            {{ $peopledatabase->foto }}
                        </div>
                        <div class="form-group">
                            <strong>Estatus:</strong>
                            {{ $peopledatabase->estatus }}
                        </div>
                        <div class="form-group">
                            <strong>Nivel Educativo:</strong>
                            {{ $peopledatabase->nivel_educativo }}
                        </div>
                        <div class="form-group">
                            <strong>Plantel:</strong>
                            {{ $peopledatabase->campus->descripcion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
