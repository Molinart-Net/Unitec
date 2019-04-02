<div class="modal fade none-border" id="add-user">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"><strong>Agregar Empleado</strong></h4>
            </div>
            <form action="{{ route('store') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="modal-body">
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="nombre" class=" form-control-label">Nombre</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="nombre" name="nombre" class="form-control"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="edad" class=" form-control-label">Edad</label></div>
                        <div class="col-12 col-md-9"><input type="number" id="edad" name="edad" class="form-control"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="direccion" class=" form-control-label">Dirección</label></div>
                        <div class="col-12 col-md-9"><textarea name="direccion" id="direccion" rows="9" class="form-control"></textarea></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="fecha_nacimiento" class=" form-control-label">Fecha de Nacimiento</label></div>
                        <div class="col-12 col-md-9"><input type="date" id="fecha_nacimiento" name="fecha_nacimiento" class="form-control"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="telefono" class=" form-control-label">Teléfono</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="telefono" name="telefono" class="form-control"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="puesto" class="form-control-label">Puesto</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="puesto" name="puesto" class="form-control"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="salario" class="form-control-label">Salario</label></div>
                        <div class="col-12 col-md-9"><input type="number" id="salario" name="salario" class="form-control"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="select" class=" form-control-label">Estado</label></div>
                        <div class="col-12 col-md-9">
                            <select name="estado" id="estado" class="form-control">
                                <option value="1">Activo</option>
                                <option value="2">Inactivo</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-success save-event waves-effect waves-light">Crear Usuario</button>
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancelar</button>
                </div>
            </form>

        </div>
    </div>
</div>
