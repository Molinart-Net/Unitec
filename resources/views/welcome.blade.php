@extends('layouts.app')
@section('content')
    <div class="animated fadeIn">

        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-1">
                                <i class="pe-7s-user"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text"><span class="count">{{ $empleados->count() }}</span></div>
                                    <div class="stat-heading">Empleados</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-2">
                                <i class="pe-7s-study"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text"><span class="count">{{ $cursos->count() }}</span></div>
                                    <div class="stat-heading">Cursos</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-3">
                                <i class="pe-7s-ticket"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text"><span class="count">{{ $lenguajes->count() }}</span></div>
                                    <div class="stat-heading">Lenguajes</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div style="margin-bottom: 20px">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add-user"><i class="fa fa-plus"></i> Empleado</button>
        </div>

        <div class="clearfix"></div>

        <div class="orders">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="box-title">Empleados </h4>
                        </div>
                        <div class="card-body--">
                            <div class="table-stats order-table ov-h">
                                <table class="table ">
                                    <thead>
                                    <tr>
                                        <th class="serial">ID</th>
                                        <th>Nombre</th>
                                        <th>Cursos</th>
                                        <th>Estado</th>
                                        <th>Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($empleados as $empleado)
                                    <tr>
                                        <td class="serial"><a href="{{ route('user', $empleado->id) }}">{{ $empleado->id }}</a></td>
                                        <td><span class="name"><a href="{{ route('user', $empleado->id) }}">{{ $empleado->nombre }}</a></span> </td>
                                        <td><span class="product">{{ $empleado->conocimiento ? $empleado->conocimiento->count() : '0' }}</span> </td>
                                        <td>
                                            @if($empleado->estado = 1)
                                                <a href="#" title="Desactivar Usuario"><span class="badge badge-complete">Activo</span></a>
                                            @else
                                                <a href="#" title="Activar USuario"><span class="badge badge-pending">Inactivo</span></a>
                                            @endif
                                        </td>
                                        <td>
                                            <button type="button"
                                                    class="btn btn-success"
                                                    title="Agregar Curso"
                                                    data-toggle="modal"
                                                    data-target="#add-course"
                                                    data-user="{{ $empleado->nombre }}"
                                                    data-id="{{ $empleado->id }}">
                                                <i class="fa fa-plus-circle"></i>
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
            </div>
        </div>

        @include('partials.modal.course')

        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Idiomas</strong>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Lenguaje</th>
                            <th scope="col">Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($lenguajes as $lang)
                        <tr>
                            <th scope="row">{{ $lang->id }}</th>
                            <td>{{ $lang->lenguaje }}</td>
                            <td>
                                <a href="{{ route('delete.lang', $lang->id) }}" type="button" class="btn btn-danger" title="Eliminar">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
