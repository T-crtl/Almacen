<div class="containter2">
    <div class="containter2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <div style="display: flex; justify-content: space-between; align-items: center;">

                                <span id="card_title">
                                    {{ __('Resguardos') }}
                                </span>

                                <div class="float-right">
                                    <a href="{{ route('safeguards.create') }}"
                                        class="btn btn-primary btn-sm float-right" data-placement="left">
                                        {{ __('Agregar Resguardo') }}
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

                                            <th>Cuenta Contable</th>
                                            <th>Descripcion</th>
                                            <th>Precio Inicial</th>
                                            <th>Ejercicio</th>
                                            <th>Porcentaje Depresiacion</th>
                                            <th>Valor Historico</th>

                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($safeguards as $safeguard)
                                            <tr>
                                                <td>{{ ++$i }}</td>

                                                <td>{{ $safeguard->cuenta_contable }}</td>
                                                <td>{{ $safeguard->descripcion }}</td>
                                                <td>{{ $safeguard->precio_inicial }}</td>
                                                <td>{{ $safeguard->ejercicio }}</td>
                                                <td>{{ $safeguard->porcentaje_depresiacion }}</td>
                                                <td>{{ $safeguard->valor_historico }}</td>

                                                <td>
                                                    <form action="{{ route('safeguards.destroy', $safeguard->id) }}"
                                                        method="POST">
                                                        <a class="btn btn-sm btn-primary ver"
                                                            data-url="{{ route('safeguards.show', $safeguard->id) }}"><i
                                                                class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                        <a class="btn btn-sm btn-success"
                                                            href="{{ route('safeguards.edit', $safeguard->id) }}"><i
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
                    {!! $safeguards->links() !!}
                </div>
            </div>
        </div>



    </div>
</div>
