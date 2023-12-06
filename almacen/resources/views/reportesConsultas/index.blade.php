@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div>
                    @if (Auth::check())
                        
                        <!--RESGUARDOS CARD -->
                        <div class="col-md-3 getModulos" data-ruta="{{ route('consultas.index') }}" data-method="get"
                            style="margin-top:20px;">
                            <div class="card text-center module">
                                <div class="card-header text-center">
                                    Resguardos
                                </div>
                                <div class="card-body"
                                    style="background-color: #CCCCCC; -webkit-mask: url(icons/otra_icono.svg) no-repeat center; mask: url(icons/otra_icono.svg) no-repeat center; margin: 35px; -webkit-mask-size: contain;">

                                </div>
                            </div>
                        </div>
                        <!--Traslados CARD -->
                        <div class="col-md-3 getModulos" data-ruta="{{ route('trasladoArticulo.index') }}" data-method="get"
                            style="margin-top:20px;">
                            <div class="card text-center module">
                                <div class="card-header text-center">
                                    Traslados
                                </div>
                                <div class="card-body"
                                    style="background-color: #CCCCCC; -webkit-mask: url(icons/otra_icono.svg) no-repeat center; mask: url(icons/otra_icono.svg) no-repeat center; margin: 35px; -webkit-mask-size: contain;">

                                </div>
                            </div>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    @endsection
