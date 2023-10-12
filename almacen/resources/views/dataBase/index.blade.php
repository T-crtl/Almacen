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
                                <a class="nav-link" href="{{ route('equipos.index') }}">{{ __('Equipos') }}</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('edificios.index') }}">{{ __('Edificios') }}</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('campuses.index') }}">{{ __('Campuses') }}</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('areas.index') }}">{{ __('Areas') }}</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('firmas.index') }}">{{ __('Firmas') }}</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('safeguards.index') }}">{{ __('Resguardos') }}</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('peopledatabases.index') }}">{{ __('Personal') }}</a>
                            </li>

                    </ul>
                    @endif
                    
                </div>
            </div>
        </div>
    @endsection
