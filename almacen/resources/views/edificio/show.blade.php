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
                            <strong>Descripcion:</strong>
                            {{ $edificio->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Nivelid:</strong>
                            {{ $edificio->nivelId }}
                        </div>
                        <div class="form-group">
                            <strong>Area:</strong>
                            {{ $edificio->areas->descripcion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
