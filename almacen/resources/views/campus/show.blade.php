    <div class="modal draggable">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Ver registro</h3>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <strong>Numero:</strong>
                        {{ $campus->numero }}
                    </div>
                    <div class="form-group">
                        <strong>Descripcion:</strong>
                        {{ $campus->descripcion }}
                    </div>
                    <div class="form-group">
                        <strong>Ubicacion:</strong>
                        {{ $campus->ubicacion }}
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>