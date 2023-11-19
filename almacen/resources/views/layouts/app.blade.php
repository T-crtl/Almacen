<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">



    <title>Sistema de Inventarios</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <!-- MODIFICACION INCLUDE BOOTSTRAP - DAVID -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- Scripts -->
    <!-- @vite(['almacen/resources/sass/app.scss', 'almacen/resources/js/app.js']) -->
    <!-- MODIFICACION INCLUDE BOOTSTRAP - DAVID -->
    @yield('contenido')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style>
        footer {

            color: #000000;
            text-align: center;
            padding: 10px;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

        .Logo-CETI {
            width: 100px;
            /* Cambia este valor según tus necesidades */
            height: auto;
            /* Para mantener la proporción original de la imagen */
        }

        .custom-navbar {
            background-color: #035374;
            color: white;
            padding: 20px;
            /* Ajusta el espacio interno según tus necesidades */
            height: 80px;
            /* Ajusta la altura según tus necesidades */
        }

        .custom-navbar .navbar-brand .{
            color: white;
        }
    </style>


</head>

<body>
    <div id="app">

        <nav class="navbar navbar-expand-md navbar-light custom-navbar">

            <div class="container">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3c/CETI_Logo.png/776px-CETI_Logo.png"
                    alt="Logo CETI" class="Logo-CETI">
                <a class="navbar-brand" href="{{ url('home') }}" style="color: white">Sistema de Inventarios</a>
                <!-- {{ config('app.name', 'Sistema de Inventarios') }} -->

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                        @if (Auth::check())
                            <li class="nav-item">
                                <a class="nav-link"
                                    href="{{ route('reportesConsultas.index') }}" style="color: white">{{ __('Reportes y Consultas') }}</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('dataBase.index') }}" style="color: white">{{ __('Base de datos') }}</a>
                            </li>

                    </ul>
                    @endif

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}" style="color: white">{{ __('Login') }}</a>
                                </li>
                            @endif
                            {{-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif --}}
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color: white">
                                    {{ Auth::user()->email }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    
    <!--  @if (Auth::check())
<nav class="nav2">
            <ul>
                <li><a href="{{ route('resguardo') }}" class="nav-link2">Resguardo</a></li>
                <li><a href="{{ route('traslado') }}" class="nav-link2">Traslado</a></li>
                <li><a href="{{ route('division') }}" class="nav-link2">Division o departamento</a></li>
                <li><a href="{{ route('articulo') }}" class="nav-link2">Articulo</a></li>
                <li><a href="{{ route('areaConsulta.index') }}" class="nav-link2">Area</a></li>
            </ul>
        </nav>
@endif-->
    <br>
</body>

</html>
