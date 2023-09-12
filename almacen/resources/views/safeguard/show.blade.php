@extends('layouts.app')

@section('template_title')
    {{ $safeguard->name ?? "{{ __('Show') Safeguard" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Safeguard</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('safeguards.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cuenta Contable:</strong>
                            {{ $safeguard->cuenta_contable }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $safeguard->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Precio Inicial:</strong>
                            {{ $safeguard->precio_inicial }}
                        </div>
                        <div class="form-group">
                            <strong>Ejercicio:</strong>
                            {{ $safeguard->ejercicio }}
                        </div>
                        <div class="form-group">
                            <strong>Porcentaje Depresiacion:</strong>
                            {{ $safeguard->porcentaje_depresiacion }}
                        </div>
                        <div class="form-group">
                            <strong>Valor Historico:</strong>
                            {{ $safeguard->valor_historico }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
