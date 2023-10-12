@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div>
                    @if (Auth::check())
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('consultas.index') }}">{{ __('Resguardos') }}</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('trasladoArticulo.index') }}">{{ __('Traslados') }}</a>
                            </li>

                        </ul>
                    @endif

                </div>
            </div>
        </div>
    @endsection
