
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
                        <div class="card-body" style="mask: url(icons/57.svg) no-repeat center;margin: 15px;-webkit-mask-size: contain;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="#035374" class="bi bi-tools" viewBox="0 0 16 16">
                                <path d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.27 3.27a.997.997 0 0 0 1.414 0l1.586-1.586a.997.997 0 0 0 0-1.414l-3.27-3.27a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814zm9.646 10.646a.5.5 0 0 1 .708 0l2.914 2.915a.5.5 0 0 1-.707.707l-2.915-2.914a.5.5 0 0 1 0-.708M3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026z"/>
                              </svg>
                        </div>
                    </div>
                </div>
                <!--EDIFICIOS CARD -->
                <div class="col-md-3 getModulos" data-ruta="{{route('edificios.index')}}" data-method="get" style="margin-top:20px;">
                    <div class="card text-center module">
                        <div class="card-header text-center">
                            Edificios
                        </div>
                            <div class="card-body" style=" mask: url(icons/otra_icono.svg) no-repeat center; margin: 15px; -webkit-mask-size: contain;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="#035374" class="bi bi-building" viewBox="0 0 16 16">
                                    <path d="M4 2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zM4 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zM7.5 5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zM4.5 8a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z"/>
                                    <path d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1zm11 0H3v14h3v-2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V15h3z"/>
                                  </svg>
                        </div>
                    </div>
                </div>
                    <!--PLANTELES CARD -->
                <div class="col-md-3 getModulos" data-ruta="{{route('campuses.index')}}" data-method="get" style="margin-top:20px;">
                    <div class="card text-center module">
                        <div class="card-header text-center">
                            Planteles
                        </div>
                        <div class="card-body" style="mask: url(icons/otra_icono.svg) no-repeat center; margin: 15px; -webkit-mask-size: contain;">
                              <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="#035374" class="bi bi-buildings" viewBox="0 0 16 16">
                                <path d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022ZM6 8.694 1 10.36V15h5zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5z"/>
                                <path d="M2 11h1v1H2zm2 0h1v1H4zm-2 2h1v1H2zm2 0h1v1H4zm4-4h1v1H8zm2 0h1v1h-1zm-2 2h1v1H8zm2 0h1v1h-1zm2-2h1v1h-1zm0 2h1v1h-1zM8 7h1v1H8zm2 0h1v1h-1zm2 0h1v1h-1zM8 5h1v1H8zm2 0h1v1h-1zm2 0h1v1h-1zm0-2h1v1h-1z"/>
                              </svg>
                        </div>
                    </div>
                </div>
                    <!--AREAS CARD -->
                <div class="col-md-3 getModulos" data-ruta="{{route('areas.index')}}" data-method="get" style="margin-top:20px;">
                    <div class="card text-center module">
                        <div class="card-header text-center">
                            Areas
                        </div>
                        <div class="card-body" style="mask: url(icons/otra_icono.svg) no-repeat center; margin: 15px; -webkit-mask-size: contain;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="#035374" class="bi bi-boxes" viewBox="0 0 16 16">
                                <path d="M7.752.066a.5.5 0 0 1 .496 0l3.75 2.143a.5.5 0 0 1 .252.434v3.995l3.498 2A.5.5 0 0 1 16 9.07v4.286a.5.5 0 0 1-.252.434l-3.75 2.143a.5.5 0 0 1-.496 0l-3.502-2-3.502 2.001a.5.5 0 0 1-.496 0l-3.75-2.143A.5.5 0 0 1 0 13.357V9.071a.5.5 0 0 1 .252-.434L3.75 6.638V2.643a.5.5 0 0 1 .252-.434L7.752.066ZM4.25 7.504 1.508 9.071l2.742 1.567 2.742-1.567zM7.5 9.933l-2.75 1.571v3.134l2.75-1.571zm1 3.134 2.75 1.571v-3.134L8.5 9.933zm.508-3.996 2.742 1.567 2.742-1.567-2.742-1.567zm2.242-2.433V3.504L8.5 5.076V8.21l2.75-1.572ZM7.5 8.21V5.076L4.75 3.504v3.134zM5.258 2.643 8 4.21l2.742-1.567L8 1.076zM15 9.933l-2.75 1.571v3.134L15 13.067zM3.75 14.638v-3.134L1 9.933v3.134z"/>
                              </svg>
                        </div>
                    </div>
                </div>
                    <!--FIRMAS CARD -->
                <div class="col-md-3 getModulos" data-ruta="{{route('firmas.index')}}" data-method="get" style="margin-top:20px;">
                    <div class="card text-center module">
                        <div class="card-header text-center">
                            Firmas
                        </div>
                        <div class="card-body" style="mask: url(icons/otra_icono.svg) no-repeat center; margin: 15px; -webkit-mask-size: contain;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="#035374" class="bi bi-cash-stack" viewBox="0 0 16 16">
                                <path d="M1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zm7 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
                                <path d="M0 5a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V7a2 2 0 0 1-2-2z"/>
                              </svg>
                        </div>
                    </div>
                </div>
                    <!--RESGUARDOS CARD -->
                <div class="col-md-3 getModulos" data-ruta="{{route('safeguards.index')}}" data-method="get" style="margin-top:20px;">
                    <div class="card text-center module">
                        <div class="card-header text-center">
                            Resguardos

                        </div>
                        <div class="card-body" style="mask: url(icons/otra_icono.svg) no-repeat center; margin: 15px; -webkit-mask-size: contain;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="#035374" class="bi bi-clipboard-data" viewBox="0 0 16 16">
                                <path d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0z"/>
                                <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1z"/>
                                <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0z"/>
                              </svg>
                        </div>
                    </div>
                </div>
                    <!--PERSONAL CARD -->
                <div class="col-md-3 getModulos" data-ruta="{{route('peopledatabases.index')}}" data-method="get" style="margin-top:20px;">
                    <div class="card text-center module">
                        <div class="card-header text-center">
                            Personal
                        </div>
                        <div class="card-body" style="mask: url(icons/otra_icono.svg) no-repeat center; margin: 15px; -webkit-mask-size: contain;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="#035374" class="bi bi-people-fill" viewBox="0 0 16 16">
                                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
                              </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

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