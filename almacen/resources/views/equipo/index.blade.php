@extends('layouts.app')

@section('template_title')
    Equipo
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Equipo') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('equipos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
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
										<th>Descripcion</th>
                                        <th>Cuenta</th>
                                        <th>Numero de inventario</th>
										<th>Marca</th>
										<th>Modelo</th>
                                        <th>Serie</th>
                                        <th>No.Referencia</th>
                                        <th>Factura</th>
                                        <th>Proveedor</th>
                                        <th>Pedido</th>
                                        <th>Contrato</th>
                                        <th>Estado</th>
                                        <th>Resguardo</th>
                                        <th>Resguardo 2</th>
                                        <th>Observaciones</th>
										<th>Precio</th>
										<th>Fecha de Entrada</th>
                                        <th>Fecha de Baja</th>
                                        <th>Nomina</th>
                                        <th>Nomina 2</th>
										<th>Estatus</th>
										<th>Articulo</th>
										<th>Rutaimg</th>
										<th>Tipoadq</th>
										<th>Areaid</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($equipos as $equipo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $equipo->descripcion }}</td>
                                            <td>{{ $equipo->cuenta }}</td>
                                            <td>{{ $equipo->numInv }}</td>
                                            <td>{{ $equipo->marca }}</td>
											<td>{{ $equipo->modelo }}</td>
                                            <td>{{ $equipo->serie }}</td>
                                            <td>{{ $equipo->num_ref }}</td>
                                            <td>{{ $equipo->factura }}</td>
                                            <td>{{ $equipo->proveedor }}</td>
                                            <td>{{ $equipo->pedido }}</td>
                                            <td>{{ $equipo->contrato }}</td>
                                            <td>{{ $equipo->estado }}</td>
                                            <td>{{ $equipo->resguardo }}</td>
                                            <td>{{ $equipo->resguardo2}}</td>
                                            <td>{{ $equipo->observaciones }}</td>
											<td>{{ $equipo->precio }}</td>
											<td>{{ $equipo->fechaEntrada }}</td>
                                            <td>{{ $equipo->fechaBaja }}</td>
                                            <td>{{ $equipo->nomina }}</td>
                                            <td>{{ $equipo->nomina2 }}</td>
											<td>{{ $equipo->estatus }}</td>
											<td>{{ $equipo->articulo }}</td>
											<td>{{ $equipo->rutaImg }}</td>
											<td>{{ $equipo->tipoAdq }}</td>
											<td>{{ $equipo->areaId }}</td>

                                            <td>
                                                <form action="{{ route('equipos.destroy',$equipo->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('equipos.show',$equipo->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('equipos.edit',$equipo->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $equipos->links() !!}
            </div>
        </div>
    </div>
@endsection
