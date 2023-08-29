@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <style>
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

                    input[type="submit"] {
                        width: 100%;
                        margin: 10px;
                        padding: 10px;
                        background-color: #007bff;
                        color: white;
                        border: none;
                        border-radius: 5px;
                        cursor: pointer;
                        transition: background-color 0.3s ease;
                    }

                    input[type="submit"]:hover {
                        background-color: #0056b3;
                    }

                    .nav2 {
                        background-color: #ffffff;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        padding: 10px;
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
                </style>

                <nav class="nav2">
                    <a href="#" class="nav-link2">Resguardo</a>
                    <a href="#" class="nav-link2">Traslado</a>
                    <a href="#" class="nav-link2">Division o departamento</a>
                    <a href="#" class="nav-link2">Articulo</a>
                    <a href="#" class="nav-link2">Area</a>

                </nav>
                <br>
                <div class="container">
                    <form action="consulta.php" method="post">
                        <label for="tipo_consulta">Tipo de consulta:</label>
                        <select name="tipo_consulta" id="tipo_consulta">
                            <option value="area">Área</option>
                            <option value="articulos">Artículos</option>
                            <option value="division">División</option>
                            <option value="traslado">Traslado</option>
                            <option value="resguardo">Resguardo</option>
                        </select>
                        <br>
                        <input type="submit" value="Buscar">
                    </form>

                </div>

            </div>
        </div>
    </div>
@endsection
