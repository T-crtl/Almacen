@extends('layouts.app')

@section('template_title')
    {{ $inventory->name ?? "{{ __('Show') Inventory" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Inventory</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('inventories.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Inventario:</strong>
                            {{ $inventory->inventario }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $inventory->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Area Asignada:</strong>
                            {{ $inventory->area_asignada }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Reporte:</strong>
                            {{ $inventory->fecha_reporte }}
                        </div>
                        <div class="form-group">
                            <strong>Valor:</strong>
                            {{ $inventory->valor }}
                        </div>
                        <div class="form-group">
                            <strong>Plantel:</strong>
                            {{ $inventory->plantel }}
                        </div>
                        <div class="form-group">
                            <strong>Estatus:</strong>
                            {{ $inventory->estatus }}
                        </div>
                        <div class="form-group">
                            <strong>Total Bienes:</strong>
                            {{ $inventory->total_bienes }}
                        </div>
                        <div class="form-group">
                            <strong>Monto Bienes:</strong>
                            {{ $inventory->monto_bienes }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
