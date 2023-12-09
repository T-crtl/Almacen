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

        <!-- Page level plugins -->
<script src="https://cdn.ceti.mx/siic/v2/js/Chart.js"></script>
<!-- Page level custom scripts -->
<script src="https://cdn.ceti.mx/siic/v2/js/chart-area-demo.js"></script>
<script src="https://cdn.ceti.mx/siic/v2/js/chart-pie-demo.js"></script>
<script src="https://cdn.ceti.mx/siic/v2/js/imask.js"></script>
<script src="https://cdn.ceti.mx/siic/v2/js/sweetalert2.all.js"></script>
<script src="https://cdn.ceti.mx/siic/v2/js/siic.js"></script>
<script src="https://cdn.ceti.mx/siic/v2/js/reloj.js"></script>
<script src="https://cdn.ceti.mx/siic/v2/js/app-siic1.0.0.js"></script>
<script src="https://cdn.ceti.mx/siic/v2/js/app-contextMenu.js"></script>