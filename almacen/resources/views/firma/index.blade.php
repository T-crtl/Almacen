
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Base de datos Firma') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('firmas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Añadir') }}
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
                                        
										<th>Nombre</th>
										<th>Funcion</th>
										<th>Plantel</th>
										<th>Nivel de puesto</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($firmas as $firma)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $firma->NombrePersonal }}</td>
											<td>{{ $firma->Funcion }}</td>
											<td>{{ $firma->campus->descripcion }}</td>
											<td>{{ $firma->NivelPuesto }}</td>

                                            <td>
                                                <form action="{{ route('firmas.destroy',$firma->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('firmas.show',$firma->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mas Info') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('firmas.edit',$firma->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $firmas->links() !!}
            </div>
        </div>
    </div>

