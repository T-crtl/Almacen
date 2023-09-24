@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <style>
                    main {
                        padding: 20px;
                    }

                    label {
                        display: block;
                        margin-bottom: 10px;
                        font-weight: bold;
                    }

                    select {
                        width: 100%;
                        padding: 10px;
                        border: 1px solid #ccc;
                        border-radius: 5px;
                    }



                    input[type="submit"]:hover {
                        background-color: #0056b3;
                    }

                    .nav2 {
                        background-color: #ffffff;
                        display: flex;
                        left: 0;
                        position: fixed;
                        padding: 20px;
                        flex-direction: column;

                    }

                    .nav-link2 {
                        color: rgb(0, 0, 0);
                        text-decoration: none;
                        margin: 0 15px;
                        padding: 5px 10px;
                        border-radius: 5px;
                        transition: background-color 0.3s ease;
                    }

                    .nav-link2:hover {
                        background-color: #dfe3ff;
                    }

                    nav ul {
                        list-style: none;
                        padding: 0;
                        margin: 20px;
                    }

                    nav ul li {
                        margin: 10px 0;
                    }

                    nav ul li a {
                        text-decoration: none;
                        color: white;
                    }
                </style>

                <nav class="nav2">
                    <ul>
                        <li><a href="{{ route('resguardo') }}" class="nav-link2">Resguardo</a></li>
                        <li><a href="{{ route('traslado') }}" class="nav-link2">Traslado</a></li>
                        <li><a href="{{ route('division') }}" class="nav-link2">Division o departamento</a></li>
                        <li><a href="{{ route('articulo') }}" class="nav-link2">Articulo</a></li>
                        <li><a href="{{ route('consultas') }}" class="nav-link2">Area</a></li>
                    </ul>
                </nav>
                <br>
                <div>
                    <h1>Resguardo</h1>
                </div>
            </div>
        </div>
    </div>
@endsection
