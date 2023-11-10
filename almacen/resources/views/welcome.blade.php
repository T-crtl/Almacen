@extends('layouts.app')

@section('content')
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <div class="container">
        <div class="row justify-content-center">
            <title>Almacen</title>
            <div class="col-md-8">






            </div>
        </div>
    </div>
    <footer>
        <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
            Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
        </div>
    </footer>
@endsection
