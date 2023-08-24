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
                            <span class="card-title">{{ __('Show') }} Firma</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('firmas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombrepersonal:</strong>
                            {{ $firma->NombrePersonal }}
                        </div>
                        <div class="form-group">
                            <strong>Funcion:</strong>
                            {{ $firma->Funcion }}
                        </div>
                        <div class="form-group">
                            <strong>Plantelid:</strong>
                            {{ $firma->PlantelID }}
                        </div>
                        <div class="form-group">
                            <strong>Nivelpuesto:</strong>
                            {{ $firma->NivelPuesto }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
