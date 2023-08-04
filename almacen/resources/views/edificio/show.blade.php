@extends('layouts.app')

@section('template_title')
    {{ $edificio->name ?? "{{ __('Show') Edificio" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Edificio</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('edificios.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Numero:</strong>
                            {{ $edificio->numero }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $edificio->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Nivel:</strong>
                            {{ $edificio->nivel }}
                        </div>
                        <div class="form-group">
                            <strong>Areaid:</strong>
                            {{ $edificio->areaId }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
