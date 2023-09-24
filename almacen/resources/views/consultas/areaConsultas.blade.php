@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                
                <div>
                    <h1>area</h1>
                    $tuId = 1;
                    <h1>Lista de Equipos</h1>
                    <a href="{{ route('area-consultas', ['id' => $tuId]) }}">Ver detalles</a>
                    <ul>
                        @foreach ($equipos as $equipo)
                            <li>{{ $equipo->descripcion }} - {{ $equipo->precio }} USD</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
