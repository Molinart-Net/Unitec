@extends('layouts.app')
@section('content')
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>{{ $empleado->nombre }}</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li class="active">{{ $empleado->datoEconomico->puesto }}</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="animated fadeIn">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Cursos</strong>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Porcentaje</th>
                            <th scope="col">Lenguaje</th>
                            <th scope="col">Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($empleado->cursos as $curso)
                            <tr>
                                <th scope="row">{{ $curso->id }}</th>
                                <td>
                                    @if($curso->curso == 1)
                                        <a href="#" title="Desactivar Curso"><span class="badge badge-complete">Activo</span></a>
                                    @else
                                        <a href="#" title="Activar Curso"><span class="badge badge-pending">Inactivo</span></a>
                                    @endif
                                </td>
                                <td>%{{ $curso->porcentaje }}</td>
                                <td>{{ $curso->lenguaje->lenguaje }}</td>
                                <td>
                                    <button type="button"
                                            class="btn btn-primary"
                                            title="Agregar Curso"
                                            data-toggle="modal"
                                            data-target="#upd-course"
                                            data-id="{{ $curso->id }}"
                                            data-status="{{ $curso->curso }}"
                                            data-porcentaje="{{ $curso->porcentaje }}">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade none-border" id="upd-course">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"><strong>Modificar Curso</strong></h4>
                </div>
                <form action="{{ route('modify.course') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                    <div class="modal-body">
                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Empleado</label></div>
                            <div class="col-12 col-md-9">
                                <p class="form-control-static" id="empleado">{{ $empleado->nombre }}</p>
                            </div>
                        </div>

                        <input type="hidden" id="curso_id" name="curso_id" class="form-control">

                        <div class="row form-group">
                            <div class="col col-md-3"><label for="porcentaje" class=" form-control-label">Porcentaje</label></div>
                            <div class="col-12 col-md-9 perc">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-percent"></i></div>
                                    <input type="text" id="porcentaje" name="porcentaje" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3"><label for="stat" class=" form-control-label">Estado</label></div>
                            <div class="col-12 col-md-9 status">
                                <select name="stat" id="stat" class="form-control">
                                    <option value="0">Inactivo</option>
                                    <option value="1">Activo</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success save-event waves-effect waves-light">Actualizar</button>
                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
