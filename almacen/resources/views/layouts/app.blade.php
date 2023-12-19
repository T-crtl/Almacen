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
        @keyframes chartjs-render-animation {
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
                <img class="img-profile rounded-circle"
                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3c/CETI_Logo.png/776px-CETI_Logo.png"
                    style="width: 50px;">
                <div class="sidebar-brand-text mx-3">
                    Gestión de Inventarios Ceti
                </div>
                </img>
            </a>
            @if (Auth::check())
            <li class="nav-item getModulos" data-ruta="{{ route('reportesConsultas.index') }}" data-method="get">
                <a class="nav-link module" module="c4ca4238a0b923820dcc509a6f75849b" style="width: auto !important;">
                    <div class="card-body"
                        style="background-color: #ffffff;-webkit-mask: url(icons/57.svg) no-repeat center;padding: 0.75rem !important;-webkit-mask-size: contain;">
                    </div>
                    <div class="row text-center">
                        <div class="col-md-12">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-card-text" viewBox="0 0 16 16">
                                <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2z"/>
                                <path d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M3 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 8m0 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5"/>
                              </svg>
                            <div class="text-center d-none d-md-inline">
                                 Reportes y Consultas
                            </div>
                        </div>
                    </div>
                </a>
            </li>
            <hr class="sidebar-divider">
            <!--<div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>-->
            <li class="nav-item getModulos" data-ruta="{{ route('dataBase.index') }}" data-method="get">
                <a class="nav-link module" module="c4ca4238a0b923820dcc509a6f75849b" style="width: auto !important;">
                    <div class="card-body"
                        style="background-color: #ffffff;-webkit-mask: url(icons/57.svg) no-repeat center;padding: 0.75rem !important;-webkit-mask-size: contain;">
                    </div>
                    <div class="row text-center">
                        <div class="col-md-12">
                            <!-- ICONO BASE DE DATOS-->
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-database" viewBox="0 0 16 16">
                                <path d="M4.318 2.687C5.234 2.271 6.536 2 8 2s2.766.27 3.682.687C12.644 3.125 13 3.627 13 4c0 .374-.356.875-1.318 1.313C10.766 5.729 9.464 6 8 6s-2.766-.27-3.682-.687C3.356 4.875 3 4.373 3 4c0-.374.356-.875 1.318-1.313ZM13 5.698V7c0 .374-.356.875-1.318 1.313C10.766 8.729 9.464 9 8 9s-2.766-.27-3.682-.687C3.356 7.875 3 7.373 3 7V5.698c.271.202.58.378.904.525C4.978 6.711 6.427 7 8 7s3.022-.289 4.096-.777A4.92 4.92 0 0 0 13 5.698M14 4c0-1.007-.875-1.755-1.904-2.223C11.022 1.289 9.573 1 8 1s-3.022.289-4.096.777C2.875 2.245 2 2.993 2 4v9c0 1.007.875 1.755 1.904 2.223C4.978 15.71 6.427 16 8 16s3.022-.289 4.096-.777C13.125 14.755 14 14.007 14 13zm-1 4.698V10c0 .374-.356.875-1.318 1.313C10.766 11.729 9.464 12 8 12s-2.766-.27-3.682-.687C3.356 10.875 3 10.373 3 10V8.698c.271.202.58.378.904.525C4.978 9.71 6.427 10 8 10s3.022-.289 4.096-.777A4.92 4.92 0 0 0 13 8.698m0 3V13c0 .374-.356.875-1.318 1.313C10.766 14.729 9.464 15 8 15s-2.766-.27-3.682-.687C3.356 13.875 3 13.373 3 13v-1.302c.271.202.58.378.904.525C4.978 12.71 6.427 13 8 13s3.022-.289 4.096-.777c.324-.147.633-.323.904-.525"/>
                              </svg>
                            <div class="text-center d-none d-md-inline">
                                 Base de datos
                            </div>
                        </div>
                    </div>
                </a>
            </li>
            <hr class="sidebar-divider">
            @endif
        </ul>
        <nav class="navbar navbar-expand navbar-light bg-aquaCeti text-light topbar mb-4 static-top shadow"
            style="position: absolute;z-index: 1000;width: 100vw;">
            <a class="sidebar-brand d-flex align-items-center justify-content-center bg-aquaCeti text-light"
                href="/">
                <img class="img-profile rounded-circle"
                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3c/CETI_Logo.png/776px-CETI_Logo.png"style="width: 50px; ">
                <div class="sidebar-brand-text mx-3">Sistema de Inventarios Ceti</div>
                </img>
            </a>
            <button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop"><i
                    class="fa fa-bars"></i></button>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item no-arrow">
                    <!--<form action="/logout" method="POST">
                        <input type="hidden" name="_token" value="i7SvbgCPG7mmdiuqKrdlwoL7Lu1gHXOLVT6I6JYe">  -->
                    @if (Auth::check())
                        <button style="background: none !important; border:none !important;"><a class="nav-link"
                                href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Salir') }}
                            </a>
                            <!--<span class="mr-2 d-lg-inline text-white small">Salir</span>-->
                            </a></button>
                    @else
                        <button style="background: none !important; border:none !important;">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('login') }}
                            <!--<span class="mr-2 d-lg-inline text-white small">Salir</span>-->
                            </a></button
                    @endif

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        <!--</form>-->
                </li>
                <div class="topbar-divider d-none d-sm-block"></div>
                <li class="nav-item no-arrow">
                    <div class="btn-group">
                        <a class="nav-link" aria-haspopup="true" aria-expanded="false">
                            @guest
                                @if (Route::has('login'))
                                @endif
                            @else
                                <span class="mr-2 d-lg-inline text-white small text-white">
                                    {{ Auth::user()->email }}
                                </span>
                                <img class="img-profile rounded-circle"
                                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3c/CETI_Logo.png/776px-CETI_Logo.png">
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
                            CENTRO DE ENSEÑANZA TÉCNICA INDUSTRIAL - DERECHOS RESERVADOS @ 2023 </span>
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
