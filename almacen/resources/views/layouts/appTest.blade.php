<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <meta name="csrf-token" content="i7SvbgCPG7mmdiuqKrdlwoL7Lu1gHXOLVT6I6JYe">


    <title>Gestión de Inventarios</title>


    
    <link href="https://cdn.ceti.mx/siic/v2/favicon.ico" rel="shortcut icon">
    
    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://cdn.ceti.mx/siic/v2/fontawesome-free/css/all.min.css">

    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script src="https://cdn.ceti.mx/siic/v2/js/jquery-3.4.1.js"></script>

    <link rel="stylesheet" href="https://cdn.ceti.mx/siic/v2/css/style.css">
    <link rel="stylesheet" href="https://cdn.ceti.mx/siic/v2/css/cursor.css">


    <link rel="stylesheet" href="https://cdn.ceti.mx/siic/v2/css/fontawesome-free-5.15.2/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css" />

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <link href="https://cdn.ceti.mx/siic/v2/css/bootstrap-tagsinput.css" rel="stylesheet" />
    <script src="https://cdn.ceti.mx/siic/v2/js/bootstrap-tagsinput.js"></script>

    

    

    
    <script src="https://cdn.ceti.mx/siic/v2/popmenu.js"></script>

    <script src="https://unpkg.com/@yaireo/tagify"></script>
    <script src="https://unpkg.com/@yaireo/tagify/dist/tagify.polyfills.min.js"></script>
    <link href="https://unpkg.com/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
    <style>
        .containter2 {
            padding-left: 1rem !important;
            padding-right: 1rem !important;
            padding-top: 1rem !important;
        }
    </style>
    <style type="text/css">
        /* Chart.js */
        @keyframes  chartjs-render-animation {
            from {
                opacity: .99
            }

            to {
                opacity: 1
            }
        }

        .chartjs-render-monitor {
            animation: chartjs-render-animation 1ms
        }

        .chartjs-size-monitor,
        .chartjs-size-monitor-expand,
        .chartjs-size-monitor-shrink {
            position: absolute;
            direction: ltr;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            overflow: hidden;
            pointer-events: none;
            visibility: hidden;
            z-index: -1
        }

        .chartjs-size-monitor-expand>div {
            position: absolute;
            width: 1000000px;
            height: 1000000px;
            left: 0;
            top: 0
        }

        .chartjs-size-monitor-shrink>div {
            position: absolute;
            width: 200%;
            height: 200%;
            left: 0;
            top: 0
        }

        .centrar {
            overflow: hidden;
            position: absolute;
            height: 200px;
            width: 300px;
            left: 50%;
            top: 50%;
            margin-top: -100px;
            margin-left: -150px;
        }

        body {
            font-family: 'Montserrat' !important;
        }
    </style>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css">

    
    

</head>

<body class="noscroll" id="page-top">
    <!-- <div class="preloader">
        <img class="loader" src="https://upload.wikimedia.org/wikipedia/commons/3/3c/CETI_Logo.png">
    </div> -->
    <!-- <div class="prelogout d-none warningLO">
        <h1 class="display-3 timeLO">Tu sesión se cerrara en</h1>
        <button type="button" id="resetTimeLO" class="btn btn-light">Continuar con la sesión</button>
    </div> -->
    <div id="wrapper" class="contendedorWraper">
        <ul class="navbar-nav sidebar sidebar-dark accordion text-center" id="accordionSidebar"
            style="background-size: cover;background-color: #1293D4;overflow-y: auto;overflow-x: hidden;height: 100vh;">
            <a class="sidebar-brand d-flex align-items-center justify-content-center bg-aquaCeti text-light"
                href="index.php">
                <img class="img-profile rounded-circle" src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3c/CETI_Logo.png/776px-CETI_Logo.png" style="width: 50px;">
                <div class="sidebar-brand-text mx-3">
                    Gestión de Inventarios Ceti
                </div>
                </img>
            </a>

                            <li class="nav-item getModulos" data-ruta="modulos/prueba" data-method="get">
                    <a class="nav-link module" module="c4ca4238a0b923820dcc509a6f75849b"
                        style="width: auto !important;">
                                                    <div class="card-body"
                                style="background-color: #ffffff;-webkit-mask: url(icons/57.svg) no-repeat center;padding: 0.75rem !important;-webkit-mask-size: contain;">
                            </div>
                                                <div class="row text-center">
                            <div class="col-md-12">
                                Gestión
                            </div>
                        </div>
                    </a>
                </li>
                <hr class="sidebar-divider">
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
            <div class="text-center d-none d-md-inline">
                <a class="nav-link" href="{{ route('reportesConsultas.index') }}" style="color: white">{{ __('Reportes y Consultas') }}</a>
            </div>
            <div class="text-center d-none d-md-inline">
                <a class="nav-link" href="{{ route('dataBase.index') }}" style="color: white">{{ __('Base de datos') }}</a>
            </div>
        </ul>
        <nav class="navbar navbar-expand navbar-light bg-aquaCeti text-light topbar mb-4 static-top shadow"
            style="position: absolute;z-index: 1000;width: 100vw;">
            <a class="sidebar-brand d-flex align-items-center justify-content-center bg-aquaCeti text-light"
                href="">
                <img class="img-profile rounded-circle" src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3c/CETI_Logo.png/776px-CETI_Logo.png"style="width: 50px;">
                <div class="sidebar-brand-text mx-3">Sistema de Inventarios Ceti</div>
                </img>
            </a>
            <button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop"><i
                    class="fa fa-bars"></i></button>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item no-arrow">
                    <!--<form action="/logout" method="POST">
                        <input type="hidden" name="_token" value="i7SvbgCPG7mmdiuqKrdlwoL7Lu1gHXOLVT6I6JYe">  -->                      
                        <button style="background: none !important; border:none !important;"><a class="nav-link" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Salir') }}
                                    </a>
                            <!--<span class="mr-2 d-lg-inline text-white small">Salir</span>-->
                        </a></button>
                                    

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                    <!--</form>-->
                </li>
                <div class="topbar-divider d-none d-sm-block"></div>
                <li class="nav-item no-arrow">
                    <div class="btn-group">
                        <a class="nav-link" aria-haspopup="true"
                            aria-expanded="false">
                            @guest
                                @if (Route::has('login'))
                                @endif
                            @else
                                <span class="mr-2 d-lg-inline text-white small text-white">
                                    {{ Auth::user()->email }}
                                </span>
                                <img class="img-profile rounded-circle" src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3c/CETI_Logo.png/776px-CETI_Logo.png">
                            @endguest
                        </a>
                        <!--<div class="dropdown-menu">
                            <a class="dropdown-item ver" id="miPerfil" data-url="/mi-perfil/index">Mi
                                Perfil</a>
                            <a class="dropdown-item ver" id="configuracionPersonal"
                                data-url="/configuracion-personal/index">Configuracion</a>
                                                    </div>
                    </div>-->
                </li>
            </ul>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content" style="max-height: 89.5vh; overflow: auto;margin-top: 100px !important;">
                <div class="container h-85 moduloActivo" id="container-area">
                    @yield('content')
                    </div>
                </div>
            <div class="contenedorF">
                <button class="botonF1">+</button>
                <button class="btnF botonF2">+ A</button>
                <button class="btnF botonF3">- A</button>
                <button class="btnF botonF4" style="bottom: 60px;"><i class="fas fa-sync"></i></button>
            </div>
            <!-- Footer -->
            <footer class="sticky-footer bg-white" style="background-color: #373B40 !important;">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto text-white">
                        <span>
                            CENTRO DE ENSEÑANZA TÉCNICA INDUSTRIAL - DERECHOS RESERVADOS @ 2023                        </span>
                    </div>
                </div>
            </footer>
        </div>
        <!--  Scripts-->



<script src="https://cdn.ceti.mx/siic/v2/js/materialize.min.js"></script>
<script src="https://cdn.ceti.mx/siic/v2/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="https://cdn.ceti.mx/siic/v2/js/jquery.easing.min.js"></script>
<!-- Custom scripts for all pages-->
<script type="text/javascript" src="https://oss.sheetjs.com/sheetjs/xlsx.full.min.js"></script>


<script src="https://cdn.ceti.mx/siic/v2/js/main.js"></script>





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
<!-- <script src="js/acciones.js"></script> -->

<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>

</body>

</html>
