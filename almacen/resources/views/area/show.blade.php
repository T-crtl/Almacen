<div class="modal draggable">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Ver registro</h3>
            </div>
            <div class="modal-body">
            
                <div class="form-group">
                    <strong>Numero:</strong>
                    {{ $area->numero }}
                </div>
                <div class="form-group">
                    <strong>Descripcion:</strong>
                    {{ $area->descripcion }}
                </div>
                <div class="form-group">
                    <strong>Tipo:</strong>
                    {{ $area->tipo }}
                </div>
                <div class="form-group">
                    <strong>Division:</strong>
                    {{ $area->division }}
                </div>
                <div class="form-group">
                    <strong>Plantel:</strong>
                    {{ $area->campuses->descripcion }}
                </div>
                <div class="form-group">
                    <strong>Edificio:</strong>
                    {{ $area->edificios->descripcion }}
                </div>
                <div class="form-group">
                    <strong>Nivel:</strong>
                    {{ $area->nivel }}
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>