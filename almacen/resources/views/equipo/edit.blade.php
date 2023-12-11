    <div class="modal draggable">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Editar equipo</h3>
                </div>
                <div class="modal-body">
                    
                                @includeif('partials.errors')
                                <form id="frmActualizaEquipo" role="form">
                                    {{ method_field('PATCH') }}
                                    @csrf
                                    @include('equipo.form')
                                </form>
                
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary formAjax" id="btnActualizarEquipo"
                    data-action="{{ route('equipos.update', $equipo->id) }}"
                    data-method="PUT"
                    data-form="#frmActualizaEquipo"
                    data-reloadData="true"
                    data-reloadAction=""
                    >Actualizar</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>