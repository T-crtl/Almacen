@extends('layouts.app')

@section('template_title')
    Consulta
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Consulta') }}
                            </span>

                             
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Registro</th>
										<th>Resguardatario</th>
										<th>Fecha Asignada</th>
										<th>Area</th>
										<th>Observaciones</th>
										<th>Documento</th>
										<th>Numero Inventario</th>
										<th>Articulo</th>
										<th>Descripcion</th>
										<th>Marca</th>
										<th>Modelo</th>
										<th>Serie</th>
										<th>Fecha Entrada</th>
										<th>Total</th>
										<th>Monto</th>
										<th>Firma</th>
										<th>Inventarios</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($consultas as $consulta)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $consulta->registro }}</td>
											<td>{{ $consulta->cons->nombre }}</td>
											<td>{{ $consulta->fecha }}</td>
											<td>{{ $consulta->area }}</td>
											<td>{{ $consulta->observaciones }}</td>
											<td>{{ $consulta->documento }}</td>
											<td>{{ $consulta->equipo->numInv }}</td>
											<td>{{ $consulta->equipo->articulo }}</td>
											<td>{{ $consulta->equipo->descripcion }}</td>
											<td>{{ $consulta->equipo->marca }}</td>
											<td>{{ $consulta->equipo->modelo }}</td>
											<td>{{ $consulta->equipo->serie }}</td>
											<td>{{ $consulta->equipo->fechaEntrada }}</td>
											<td>{{ $consulta->total }}</td>
											<td>{{ $consulta->equipo->precio }}</td>
											<td>{{ $consulta->firmas->NombrePersonal }}</td>
											<td>{{ $consulta->firmas->NombrePersonal }}</td>

                                            <td>
                                                <form action="{{ route('consultas.destroy',$consulta->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('consultas.show',$consulta->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    
                                                    @csrf
                                                    
                                                    
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $consultas->links() !!}
            </div>
        </div>
    </div>
@endsection
