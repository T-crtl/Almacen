@extends('layouts.appTest')

@section('content')
<div class="row" id="work_area">
    <div class="container h-85 moduloActivo" style="overflow: auto;" id="container-area">
        <div class="row h-50" id="work_area">
            <!--REPORTES Y CONSULTAS CARD -->
            <div class="col-md-3 getModulos" data-ruta="{{route('reportesConsultas.index')}}" data-method="get" style="margin-top:20px;">
                <div class="card text-center module">
                    <div class="card-header text-center">
                        Reportes y Consultas
                    </div>
                        <div class="card-body" style="background-color: #035374;-webkit-mask: url(icons/57.svg) no-repeat center;mask: url(icons/57.svg) no-repeat center;margin: 35px;-webkit-mask-size: contain;">
                            
                        </div>
                    </div>
                </div>
                <!--BASE DE DATOS CARD -->
                <div class="col-md-3 getModulos" data-ruta="{{route('dataBase.index')}}" data-method="get" style="margin-top:20px;">
                    <div class="card text-center module">
                        <div class="card-header text-center">
                            Base de datos
                        </div>
                        <div class="card-body" style="background-color: #CCCCCC; -webkit-mask: url(icons/otra_icono.svg) no-repeat center; mask: url(icons/otra_icono.svg) no-repeat center; margin: 35px; -webkit-mask-size: contain;">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
