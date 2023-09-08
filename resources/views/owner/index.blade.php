@extends('layouts.app')

@section('title', 'Propietario')

@section('content')

<div id="wrapper">
    @include('includes.menu_lateral')

    <div id="page-wrapper" class="gray-bg dashbard-1">
    	<div class="row border-bottom">
            @include('includes.menu_superior')
        </div>

        <div class="row border-bottom white-bg dashboard-header">
            <div class="ibox-title">
                <h5>Lista de propietarios</h5>
                <a href="{{url('/owner/create')}}">
                    <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="button">
                        <strong>Crear nuevo propietario</strong>
                    </button>
                </a>
            </div>
            <div class="ibox-content">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example">
                        <thead>
                            <tr>
                                <th>Documento</th>
                                <th>Nombre</th>
                                <th>Dirección</th>
                                <th>Teléfono</th>
                                <th>Ciudad</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($owner as $row)
                                <tr>
                                    <td>{{$row->documento}}</td>
                                    <td>
                                        {{$row->primer_nombre}} 
                                        {{$row->segundo_nombre}} 
                                        {{$row->apellidos}}
                                    </td>
                                    <td>{{$row->direccion}}</td>
                                    <td>{{$row->telefono}}</td>
                                    <td>{{$row->ciudad}}</td>
                                    <td>
                                        <a href="{{url('/owner/'.$row->id.'/edit')}}" rel="tooltip" title="Editar" class="btn btn-link btn-simple btn-xs">
                                            <i class="fas fa-user-edit iconos_oc"></i> 
                                        </a>

                                        <a href="{{url('/owner/'.$row->id.'/delete')}}" rel="tooltip" title="Eliminar" class="btn btn-link btn-simple btn-xs" onclick="return confirm('¿Está seguro de que desea eliminar este registro?')">
                                            <i class="fas fa-trash-alt fa-fw iconos_oc"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                        <tfoot>
                            <tr>
                                <th>Documento</th>
                                <th>Nombre</th>
                                <th>Dirección</th>
                                <th>Teléfono</th>
                                <th>Ciudad</th>
                                <th>Acciones</th>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@include('includes.config_table')

@endsection