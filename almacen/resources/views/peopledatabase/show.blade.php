<div class="modal draggable">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Ver registro</h3>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <strong>Nomina:</strong>
                    {{ $peopledatabase->registro }}
                </div>
                
                <div class="form-group">
                    <strong>Nomina:</strong>
                    {{ $peopledatabase->nomina }}
                </div>
                <div class="form-group">
                    <strong>Nombre:</strong>
                    {{ $peopledatabase->nombre }}
                </div>
                <div class="form-group">
                    <strong>Adscripcion:</strong>
                    {{ $peopledatabase->adscripcion }}
                </div>
                <div class="form-group">
                    <strong>Tipo Contrato:</strong>
                    {{ $peopledatabase->tipo_contrato }}
                </div>
                <div class="form-group">
                    <strong>Funcion:</strong>
                    {{ $peopledatabase->funcion }}
                </div>
                <div class="form-group">
                    <strong>Correo:</strong>
                    {{ $peopledatabase->correo }}
                </div>
                <div class="form-group">
                    <strong>Rutaimg:</strong>
                    {{ $peopledatabase->foto }}
                </div>
                <div class="form-group">
                    <strong>Estatus:</strong>
                    {{ $peopledatabase->estatus }}
                </div>
                <div class="form-group">
                    <strong>Nivel Educativo:</strong>
                    {{ $peopledatabase->nivel_educativo }}
                </div>
                <div class="form-group">
                    <strong>Plantel:</strong>
                    {{ $peopledatabase->campus->descripcion }}
                </div>
            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
