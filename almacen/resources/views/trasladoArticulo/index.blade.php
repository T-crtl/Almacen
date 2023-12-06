
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Traslado Articulo') }}
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
                                        
										<th>Numero inventario</th>
                                        <th>Descripción</th>
                                        <th>Valor historico</th>
										<th>Nomina Resguardatario anterior</th>
                                        <th>Función Resguardatario anterior</th>
                                        <th>Adscripción Resguardatario anterior</th>
										<th>Nomina nuevo</th>
                                        <th>Función Resguardatario nuevo</th>
                                        <th>Adscripción Resguardatario nuevo</th>
										<th>Plantel</th>
										<th>Firma</th>
										<th>Observaciones</th>
										<th>Fecha de traslado</th>
										<th>Documento</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($traslados as $traslado)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $traslado->numInv }}</td>
                                            <td>{{ $traslado->equipo->descripcion }}</td>
                                            <td>{{ $traslado->equipo->precio }}</td>
											<td>{{ $traslado->nominaAnterior }}</td>
                                            <td>{{ $traslado->personalA->funcion }}</td>
                                            <td>{{ $traslado->personalA->adscripcion }}</td>
											<td>{{ $traslado->nominaNuevo }}</td>
                                            <td>{{ $traslado->personalN->funcion }}</td>
                                            <td>{{ $traslado->personalN->adscripcion }}</td>
											<td>{{ $traslado->campus->descripcion }}</td>
											<td>{{ $traslado->firma }}</td>
											<td>{{ $traslado->observaciones }}</td>
											<td>{{ $traslado->fechaTraslado }}</td>
											<td>{{ $traslado->documento }}</td>

                                            <td>
                                                <form action="{{ route('trasladoArticulo.destroy',$traslado->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('trasladoArticulo.show',$traslado->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    
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
                {!! $traslados->links() !!}
            </div>
        </div>
    </div>

