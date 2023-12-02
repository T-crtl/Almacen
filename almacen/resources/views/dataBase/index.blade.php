@extends('layouts.appTest')

@section('content')
@if (Auth::check())
<div class="row" id="work_area">
    <div class="container h-85 moduloActivo" style="overflow: auto;" id="container-area">
        <div class="row h-50" id="work_area">
            <!--EQUIPOS CARD -->
            <div class="col-md-3 getModulos" style="margin-top:20px;">
                <div class="card text-center module">
                    <div class="card-header text-center">
                        <a class="nav-link" href="{{ route('equipos.index') }}">{{ __('Equipos') }}</a>
                    </div>
                        <div class="card-body" style="background-color: #035374;-webkit-mask: url(icons/57.svg) no-repeat center;mask: url(icons/57.svg) no-repeat center;margin: 35px;-webkit-mask-size: contain;">
                        </div>
                    </div>
                </div>
                <!--EDIFICIOS CARD -->
                <div class="col-md-3 getModulos" style="margin-top:20px;">
                    <div class="card text-center module">
                        <div class="card-header text-center">
                            <a class="nav-link" href="{{ route('edificios.index') }}">{{ __('Edificios') }}</a>
                        </div>
                            <div class="card-body" style="background-color: #CCCCCC; -webkit-mask: url(icons/otra_icono.svg) no-repeat center; mask: url(icons/otra_icono.svg) no-repeat center; margin: 35px; -webkit-mask-size: contain;">
                        </div>
                    </div>
                </div>
                    <!--PLANTELES CARD -->
                <div class="col-md-3 getModulos" style="margin-top:20px;">
                    <div class="card text-center module">
                        <div class="card-header text-center">
                            <a class="nav-link" href="{{ route('campuses.index') }}">{{ __('Planteles') }}</a>
                        </div>
                        <div class="card-body" style="background-color: #CCCCCC; -webkit-mask: url(icons/otra_icono.svg) no-repeat center; mask: url(icons/otra_icono.svg) no-repeat center; margin: 35px; -webkit-mask-size: contain;">
                            
                        </div>
                    </div>
                </div>
                    <!--AREAS CARD -->
                <div class="col-md-3 getModulos" style="margin-top:20px;">
                    <div class="card text-center module">
                        <div class="card-header text-center">
                            <a class="nav-link" href="{{ route('areas.index') }}">{{ __('Areas') }}</a>
                        </div>
                        <div class="card-body" style="background-color: #CCCCCC; -webkit-mask: url(icons/otra_icono.svg) no-repeat center; mask: url(icons/otra_icono.svg) no-repeat center; margin: 35px; -webkit-mask-size: contain;">
                            
                        </div>
                    </div>
                </div>
                    <!--FIRMAS CARD -->
                <div class="col-md-3 getModulos" style="margin-top:20px;">
                    <div class="card text-center module">
                        <div class="card-header text-center">
                            <a class="nav-link" href="{{ route('firmas.index') }}">{{ __('Firmas') }}</a>
                        </div>
                        <div class="card-body" style="background-color: #CCCCCC; -webkit-mask: url(icons/otra_icono.svg) no-repeat center; mask: url(icons/otra_icono.svg) no-repeat center; margin: 35px; -webkit-mask-size: contain;">
                            
                        </div>
                    </div>
                </div>
                    <!--RESGUARDOS CARD -->
                <div class="col-md-3 getModulos" style="margin-top:20px;">
                    <div class="card text-center module">
                        <div class="card-header text-center">
                            <a class="nav-link" href="{{ route('safeguards.index') }}">{{ __('Resguardos') }}</a>
                        </div>
                        <div class="card-body" style="background-color: #CCCCCC; -webkit-mask: url(icons/otra_icono.svg) no-repeat center; mask: url(icons/otra_icono.svg) no-repeat center; margin: 35px; -webkit-mask-size: contain;">
                            
                        </div>
                    </div>
                </div>
                    <!--PERSONAL CARD -->
                <div class="col-md-3 getModulos" style="margin-top:20px;">
                    <div class="card text-center module">
                        <div class="card-header text-center">
                            <a class="nav-link" href="{{ route('peopledatabases.index') }}">{{ __('Personal') }}</a>
                        </div>
                        <div class="card-body" style="background-color: #CCCCCC; -webkit-mask: url(icons/otra_icono.svg) no-repeat center; mask: url(icons/otra_icono.svg) no-repeat center; margin: 35px; -webkit-mask-size: contain;">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    @endsection
