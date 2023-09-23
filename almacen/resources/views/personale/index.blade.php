@extends('layouts.app')

@section('template_title')
    Personale
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Personale') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('personales.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Tipo Contrato</th>
										<th>Plantelid</th>
										<th>Funcion</th>
										<th>Correo</th>
										<th>Rutaimg</th>
										<th>Estatus</th>
										<th>Nivel Educativo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($personales as $personale)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $personale->nomina }}</td>
											<td>{{ $personale->nombre }}</td>
											<td>{{ $personale->adscripcion }}</td>
											<td>{{ $personale->tipo_contrato }}</td>
											<td>{{ $personale->plantelId }}</td>
											<td>{{ $personale->funcion }}</td>
											<td>{{ $personale->correo }}</td>
											<td>{{ $personale->rutaImg }}</td>
											<td>{{ $personale->estatus }}</td>
											<td>{{ $personale->nivel_educativo }}</td>

                                            <td>
                                                <form action="{{ route('personales.destroy',$personale->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('personales.show',$personale->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('personales.edit',$personale->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $personales->links() !!}
            </div>
        </div>
    </div>
@endsection
