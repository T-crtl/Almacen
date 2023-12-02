@extends('layouts.appCat')

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
                                <!--- ====================      BOTON DE IMPORTAR EXCEL / FORM    ==================== -->
                                <form action=" {{ route('equipos.import.excel')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="file" name="file">
                                    <button class="btn btn-success btn-sm float-right"> Importar usuarios</button>
                                    </form>
                                <!--- ====================      BOTON DE DESCARGAR EXCEL     ==================== -->
                                <a href="{{ route('equipos.excel') }}" class="btn btn-success btn-sm float-right"  data-placement="left">
                                    {{ __('Descargar excel') }}
                                  </a>
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
                                        
										<th>Numero de Inventario</th>
										<th>Descripcion</th>
										<th>Marca</th>
										<th>Modelo</th>
										<th>Serie</th>
										<th>Precio</th>
										<th>Fecha entrada</th>
										<th>Estatus</th>
										<th>Articulo</th>
										<th>Imagen</th>
										<th>Tipo adquisicion</th>
										<th>Area</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($equipos as $equipo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $equipo->numInv }}</td>
											<td>{{ $equipo->descripcion }}</td>
											<td>{{ $equipo->marca }}</td>
											<td>{{ $equipo->modelo }}</td>
											<td>{{ $equipo->serie }}</td>
											<td>{{ $equipo->precio }}</td>
											<td>{{ $equipo->fechaEntrada }}</td>
											<td>{{ $equipo->estatus }}</td>
											<td>{{ $equipo->articulo }}</td>
											<td>{{ $equipo->rutaImg }}</td>
											<td>{{ $equipo->tipoAdq }}</td>
											<td>{{ $equipo->areas->descripcion }}</td>

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
