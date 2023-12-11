
@if (Auth::check())
<div class="row" id="work_area">
    <div class="container h-85 moduloActivo" style="overflow: auto;" id="container-area">
        <div class="row h-50" id="work_area">
            <!--EQUIPOS CARD -->
            <div class="col-md-3 getModulos"  data-ruta="{{route('equipos.index')}}" data-method="get" style="margin-top:20px;">
                <div class="card text-center module">
                    <div class="card-header text-center">
                        Equipos
                    </div>
                        <div class="card-body" style="background-color: #035374;-webkit-mask: url(icons/57.svg) no-repeat center;mask: url(icons/57.svg) no-repeat center;margin: 35px;-webkit-mask-size: contain;">
                        </div>
                    </div>
                </div>
                <!--EDIFICIOS CARD -->
                <div class="col-md-3 getModulos" data-ruta="{{route('edificios.index')}}" data-method="get" style="margin-top:20px;">
                    <div class="card text-center module">
                        <div class="card-header text-center">
                            Edificios
                        </div>
                            <div class="card-body" style="background-color: #CCCCCC; -webkit-mask: url(icons/otra_icono.svg) no-repeat center; mask: url(icons/otra_icono.svg) no-repeat center; margin: 35px; -webkit-mask-size: contain;">
                        </div>
                    </div>
                </div>
                    <!--PLANTELES CARD -->
                <div class="col-md-3 getModulos" data-ruta="{{route('campuses.index')}}" data-method="get" style="margin-top:20px;">
                    <div class="card text-center module">
                        <div class="card-header text-center">
                            Planteles
                        </div>
                        <div class="card-body" style="background-color: #CCCCCC; -webkit-mask: url(icons/otra_icono.svg) no-repeat center; mask: url(icons/otra_icono.svg) no-repeat center; margin: 35px; -webkit-mask-size: contain;">
                            
                        </div>
                    </div>
                </div>
                    <!--AREAS CARD -->
                <div class="col-md-3 getModulos" data-ruta="{{route('areas.index')}}" data-method="get" style="margin-top:20px;">
                    <div class="card text-center module">
                        <div class="card-header text-center">
                            Areas
                        </div>
                        <div class="card-body" style="background-color: #CCCCCC; -webkit-mask: url(icons/otra_icono.svg) no-repeat center; mask: url(icons/otra_icono.svg) no-repeat center; margin: 35px; -webkit-mask-size: contain;">
                            
                        </div>
                    </div>
                </div>
                    <!--FIRMAS CARD -->
                <div class="col-md-3 getModulos" data-ruta="{{route('firmas.index')}}" data-method="get" style="margin-top:20px;">
                    <div class="card text-center module">
                        <div class="card-header text-center">
                            Firmas
                        </div>
                        <div class="card-body" style="background-color: #CCCCCC; -webkit-mask: url(icons/otra_icono.svg) no-repeat center; mask: url(icons/otra_icono.svg) no-repeat center; margin: 35px; -webkit-mask-size: contain;">
                            
                        </div>
                    </div>
                </div>
                    <!--RESGUARDOS CARD -->
                <div class="col-md-3 getModulos" data-ruta="{{route('safeguards.index')}}" data-method="get" style="margin-top:20px;">
                    <div class="card text-center module">
                        <div class="card-header text-center">
                            Resguardos

                        </div>
                        <div class="card-body" style="background-color: #CCCCCC; -webkit-mask: url(icons/otra_icono.svg) no-repeat center; mask: url(icons/otra_icono.svg) no-repeat center; margin: 35px; -webkit-mask-size: contain;">
                            
                        </div>
                    </div>
                </div>
                    <!--PERSONAL CARD -->
                <div class="col-md-3 getModulos" data-ruta="{{route('peopledatabases.index')}}" data-method="get" style="margin-top:20px;">
                    <div class="card text-center module">
                        <div class="card-header text-center">
                            Personal
                        </div>
                        <div class="card-body" style="background-color: #CCCCCC; -webkit-mask: url(icons/otra_icono.svg) no-repeat center; mask: url(icons/otra_icono.svg) no-repeat center; margin: 35px; -webkit-mask-size: contain;">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif


<!-- Page level custom scripts -->
<script src="https://cdn.ceti.mx/siic/v2/js/siic.js"></script>
<script src="https://cdn.ceti.mx/siic/v2/js/app-siic1.0.0.js"></script>