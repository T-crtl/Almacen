@extends('layouts.app')

@section('content')
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <div class="container">
        <div class="row justify-content-center">
            <title>Almacen</title>
            <div class="col-md-8">
                <div class="mt-5">
                    <h2>Bienvenido al Sistema de Inventarios</h2>
                    <p>Administre fácilmente los inventarios de la institución con nuestra aplicación web. </p>
                    <p>Explore las funciones disponibles y optimice la gestión de activos.</p>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
            Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
        </div>
    </footer>
@endsection
