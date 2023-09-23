@extends('layouts.app')

@section('template_title')
    {{ $personale->name ?? "{{ __('Show') Personale" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Personale</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('personales.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nomina:</strong>
                            {{ $personale->nomina }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $personale->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Adscripcion:</strong>
                            {{ $personale->adscripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Contrato:</strong>
                            {{ $personale->tipo_contrato }}
                        </div>
                        <div class="form-group">
                            <strong>Plantelid:</strong>
                            {{ $personale->plantelId }}
                        </div>
                        <div class="form-group">
                            <strong>Funcion:</strong>
                            {{ $personale->funcion }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $personale->correo }}
                        </div>
                        <div class="form-group">
                            <strong>Rutaimg:</strong>
                            {{ $personale->rutaImg }}
                        </div>
                        <div class="form-group">
                            <strong>Estatus:</strong>
                            {{ $personale->estatus }}
                        </div>
                        <div class="form-group">
                            <strong>Nivel Educativo:</strong>
                            {{ $personale->nivel_educativo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
