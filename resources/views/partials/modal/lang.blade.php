<div class="modal fade none-border" id="add-lang">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"><strong>Agregar Lenguaje</strong></h4>
            </div>
            <form action="{{ route('lang') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="modal-body">
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="lenguaje" class=" form-control-label">Lenguaje</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="lenguaje" name="lenguaje" class="form-control"></div>
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
