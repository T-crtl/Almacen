        <div class="modal draggable">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title">Ver registro</h3>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <strong>Nombre del personal:</strong>
                            {{ $firma->NombrePersonal }}
                        </div>
                        <div class="form-group">
                            <strong>Funcion:</strong>
                            {{ $firma->Funcion }}
                        </div>
                        <div class="form-group">
                            <strong>Plantel:</strong>
                            {{ $firma->campus->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Nivel de puesto:</strong>
                            {{ $firma->NivelPuesto }}
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>