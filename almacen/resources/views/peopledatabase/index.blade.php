@extends('layouts.app')

@section('template_title')
    Peopledatabase
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Personal') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('peopledatabases.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Nomina</th>
										<th>Nombre</th>
										<th>Adscripcion</th>
										<th>Tipo De Contrato</th>
										<th>Funcion</th>
										<th>Correo</th>
										<th>Foto</th>
										<th>Estatus</th>
										<th>Nivel Educativo</th>
										<th>Plantel</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($peopledatabases as $peopledatabase)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $peopledatabase->nomina }}</td>
											<td>{{ $peopledatabase->nombre }}</td>
											<td>{{ $peopledatabase->adscripcion }}</td>
											<td>{{ $peopledatabase->tipo_contrato }}</td>
											<td>{{ $peopledatabase->funcion }}</td>
											<td>{{ $peopledatabase->correo }}</td>
											<td>{{ $peopledatabase->foto }}</td>
											<td>{{ $peopledatabase->estatus }}</td>
											<td>{{ $peopledatabase->nivel_educativo }}</td>
											<td>{{ $peopledatabase->campus->descripcion }}</td>

                                            <td>
                                                <form action="{{ route('peopledatabases.destroy',$peopledatabase->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('peopledatabases.show',$peopledatabase->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('peopledatabases.edit',$peopledatabase->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $peopledatabases->links() !!}
            </div>
        </div>
    </div>
@endsection
