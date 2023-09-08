@extends('layouts.app')

@section('title', 'Reporte')

@section('content')

<div id="wrapper">
    @include('includes.menu_lateral')

    <div id="page-wrapper" class="gray-bg dashbard-1">
    	<div class="row border-bottom">
            @include('includes.menu_superior')
        </div>

        <div class="row border-bottom white-bg dashboard-header">
            <div class="ibox-title">
                <h5>Reporte de vehiculos</h5>
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
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@include('includes.config_table')

@endsection