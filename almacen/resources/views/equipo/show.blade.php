    <div class="modal draggable">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Ver registro</h3>
                </div>
                <div class="modal-body">
                    
                    <div class="form-group">
                        <strong>Numero de Inventario:</strong>
                        {{ $equipo->numInv }}
                    </div>
                    <div class="form-group">
                        <strong>Descripcion:</strong>
                        {{ $equipo->descripcion }}
                    </div>
                    <div class="form-group">
                        <strong>Marca:</strong>
                        {{ $equipo->marca }}
                    </div>
                    <div class="form-group">
                        <strong>Modelo:</strong>
                        {{ $equipo->modelo }}
                    </div>
                    <div class="form-group">
                        <strong>Serie:</strong>
                        {{ $equipo->serie }}
                    </div>
                    <div class="form-group">
                        <strong>Precio:</strong>
                        {{ $equipo->precio }}
                    </div>
                    <div class="form-group">
                        <strong>Fecha de entrada:</strong>
                        {{ $equipo->fechaEntrada }}
                    </div>
                    <div class="form-group">
                        <strong>Estatus:</strong>
                        {{ $equipo->estatus }}
                    </div>
                    <div class="form-group">
                        <strong>Articulo:</strong>
                        {{ $equipo->articulo }}
                    </div>
                    <div class="form-group">
                        <strong>Imagen:</strong>
                        {{ $equipo->rutaImg }}
                    </div>
                    <div class="form-group">
                        <strong>Tipo de adquisicion:</strong>
                        {{ $equipo->tipoAdq }}
                    </div>
                    <div class="form-group">
                        <strong>Area:</strong>
                        {{ $equipo->areas->descripcion }}
                    </div>
                
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>