
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                
                                <h1>Area</h1>
                                <form action="{{ route('areaConsulta.index') }}" method="GET">
                                    <input type="text" name="search" placeholder="Buscar por Division">
                                    
                                    <select name="plantel">
                                        <option value="">Seleccionar Plantel</option>
                                        <option value="1">Plantel Tonala</option>
                                        <option value="2">Plantel Colomos</option>
                                        <option value="3">Plantel Rio Santiago</option>
                                        <!-- Agrega más opciones según sea necesario -->
                                    </select>
                                    <button type="submit">Buscar</button>
                                    <button type="submit">Inicio</button>
                                </form>

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
                                        
										<th>Numero</th>
										<th>Descripcion</th>
										<th>Tipo</th>
										<th>Division</th>
										<th>Plantel</th>
										<th>Edificio</th>
										<th>Nivel o Piso</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($areas as $area)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $area->numero }}</td>
											<td>{{ $area->descripcion }}</td>
											<td>{{ $area->tipo }}</td>
											<td>{{ $area->division }}</td>
											<td>{{ $area->campuses->descripcion }}</td>
											<td>{{ $area->edificios->descripcion }}</td>
											<td>{{ $area->nivel }}</td>

                                            <td>
                                                
                                                <form action="{{ route('areas.destroy',$area->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('areaConsulta.show',$area->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    
                                                    @csrf
                                                    @method('DELETE')
                                                     
                                                </form>
                                            </td>
                                        </tr>
                                        
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                </div>
                {!! $areas->links() !!}
            </div>
        </div>
    </div>

