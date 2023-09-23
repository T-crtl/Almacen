@extends('layouts.app')

@section('template_title')
    {{ $area->name ?? "{{ __('Show') Area" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Area</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('areas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Numero:</strong>
                            {{ $area->numero }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $area->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $area->tipo }}
                        </div>
                        <div class="form-group">
                            <strong>Division:</strong>
                            {{ $area->division }}
                        </div>
                        <div class="form-group">
                            <strong>Plantelid:</strong>
                            {{ $area->plantelID }}
                        </div>
                        <div class="form-group">
                            <strong>Edificioid:</strong>
                            {{ $area->edificioID }}
                        </div>
                        <div class="form-group">
                            <strong>Nivel:</strong>
                            {{ $area->nivel }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
