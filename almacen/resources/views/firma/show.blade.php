@extends('layouts.app')

@section('template_title')
    {{ $firma->name ?? "{{ __('Show') Firma" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Base de datos Firma</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('firmas.index') }}"> {{ __('Atras') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre del personal:</strong>
                            {{ $firma->NombrePersonal }}
                        </div>
                        <div class="form-group">
                            <strong>Funcion:</strong>
                            {{ $firma->Funcion }}
                        </div>
                        <div class="form-group">
                            <strong>Plantel:</strong>
                            {{ $firma->campus->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Nivel de puesto:</strong>
                            {{ $firma->NivelPuesto }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
