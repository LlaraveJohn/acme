@extends('layouts.app')

@section('title', 'Vehiculo')

@section('content')

<div id="wrapper">
    @include('includes.menu_lateral')

    <div id="page-wrapper" class="gray-bg dashbard-1">
    	<div class="row border-bottom">
            @include('includes.menu_superior')
        </div>

        <div class="row border-bottom white-bg dashboard-header">
            <div class="ibox-title">
                <h5>Lista de Vehiculos</h5>
                <a href="{{url('/vehicle/create')}}">
                    <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="button">
                        <strong>Crear nuevo vehiculo</strong>
                    </button>
                </a>
            </div>
            <div class="ibox-content">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example">
                        <thead>
                            <tr>
                                <th>Placa</th>
                                <th>Color</th>
                                <th>Marca</th>
                                <th>Tipo</th>
                                <th>Conductor</th>
                                <th>Propietario</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($vehicle as $row)
                                <tr>
                                    <td>{{$row->placa}}</td>
                                    <td>{{$row->color}}</td>
                                    <td>{{$row->marca}}</td>
                                    <td>{{$row->tipo}}</td>
                                    <td>
                                        {{$row->nombre1_conductor}} 
                                        {{$row->nombre2_conductor}} 
                                        {{$row->apellido_conductor}}
                                    </td>
                                    <td>
                                        {{$row->nombre1_propietario}} 
                                        {{$row->nombre2_propietario}} 
                                        {{$row->nombre2_propietario}}
                                    </td>
                                    <td>
                                        <a href="{{url('/vehicle/'.$row->id.'/edit')}}" rel="tooltip" title="Editar" class="btn btn-link btn-simple btn-xs">
                                            <i class="fas fa-user-edit iconos_oc"></i> 
                                        </a>

                                        <a href="{{url('/vehicle/'.$row->id.'/delete')}}" rel="tooltip" title="Eliminar" class="btn btn-link btn-simple btn-xs" onclick="return confirm('¿Está seguro de que desea eliminar este registro?')">
                                            <i class="fas fa-trash-alt fa-fw iconos_oc"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                        <tfoot>
                            <tr>
                                <th>Placa</th>
                                <th>Color</th>
                                <th>Marca</th>
                                <th>Tipo</th>
                                <th>Conductor</th>
                                <th>Propietario</th>
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