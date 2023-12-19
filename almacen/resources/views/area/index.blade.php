<div class="containter2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header" style="height: 100%">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Area') }}
                            </span>

                            <div>
                                <!-- Botón de Importar Excel / Form -->
                                <form action="{{ route('areas.import.excel') }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="input-group">
                                        <input type="file" name="file" class="form-control-file">
                                        <div class="input-group-append">
                                            <button class="btn btn-success" type="submit">Importar archivo</button>
                                        </div>
                                    </div>
                                </form>

                                <!-- Botón de Descargar Excel -->
                                <a href="{{ route('areas.excel') }}" class="btn btn-success">Descargar Excel</a>

                                <!-- Botón para Crear Nuevo -->
                                <a href="{{ route('areas.create') }}" class="btn btn-primary">Agregar Area</a>
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
                                                <form action="{{ route('areas.destroy', $area->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary ver"
                                                        data-url="{{ route('areas.show', $area->id) }}"><i
                                                            class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success"
                                                        href="{{ route('areas.edit', $area->id) }}"><i
                                                            class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i
                                                            class="fa fa-fw fa-trash"></i>
                                                        {{ __('Eliminar') }}</button>
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
</div>
