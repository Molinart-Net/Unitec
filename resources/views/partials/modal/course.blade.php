<div class="modal fade none-border" id="add-course">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"><strong>Agregar Curso</strong></h4>
            </div>
            <form action="{{ route('course') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                @csrf

                <div class="modal-body">
                    <div class="row form-group">
                        <div class="col col-md-3"><label class=" form-control-label">Empleado</label></div>
                        <div class="col-12 col-md-9">
                            <p class="form-control-static" id="empleado"></p>
                        </div>
                    </div>

                    <input type="hidden" id="empleado_id" name="empleado_id" class="form-control">

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="lenguaje" class=" form-control-label">Lenguaje</label></div>
                        <div class="col-12 col-md-9">
                            <select name="lenguaje" id="lenguaje" class="form-control">
                                @foreach($lenguajes as $lenguaje)
                                <option value="{{ $lenguaje->id }}">{{ $lenguaje->lenguaje }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-success save-event waves-effect waves-light">Crear</button>
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>
