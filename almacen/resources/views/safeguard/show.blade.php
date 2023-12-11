<div class="modal draggable">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Ver registro</h3>
            </div>
            <div class="modal-body">
                
                <div class="form-group">
                    <strong>Cuenta Contable:</strong>
                    {{ $safeguard->cuenta_contable }}
                </div>
                <div class="form-group">
                    <strong>Descripcion:</strong>
                    {{ $safeguard->descripcion }}
                </div>
                <div class="form-group">
                    <strong>Precio Inicial:</strong>
                    {{ $safeguard->precio_inicial }}
                </div>
                <div class="form-group">
                    <strong>Ejercicio:</strong>
                    {{ $safeguard->ejercicio }}
                </div>
                <div class="form-group">
                    <strong>Porcentaje Depresiacion:</strong>
                    {{ $safeguard->porcentaje_depresiacion }}
                </div>
                <div class="form-group">
                    <strong>Valor Historico:</strong>
                    {{ $safeguard->valor_historico }}
                </div>
            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>