@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <h1>Consulta de datos</h1>
            
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
