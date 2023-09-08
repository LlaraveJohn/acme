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
                <div class="col-md-12">
                    <h5>Formulario creación de Vehiculos</h5>
                    <a href="{{url('/')}}">
                        <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="button">
                            <strong>Regresar</strong>
                        </button>
                    </a>
                </div>
            </div>

            <div class="ibox-content" style="padding: 15px 20px 0px 20px;">
                <div class="row">
                    <form method="POST" action="{{url('/vehicle')}}" role="form" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group col-md-3">
                            <label>Placa</label>
                            <input type="text" name="placa" value="{{old('placa')}}" class="form-control">
                            @error('placa')
                                <span class="invalid-feedback" role="alert">
                                    <i style="color: red; font-size: 0.8em;"><b>{{ $message }}</b></i>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group col-md-3">
                            <label>Color</label>
                            <input type="text" name="color" value="{{old('color')}}" class="form-control">
                            @error('color')
                                <span class="invalid-feedback" role="alert">
                                    <i style="color: red; font-size: 0.8em;"><b>{{ $message }}</b></i>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group col-md-3">
                            <label>Marca</label>
                            <input type="text" name="marca" value="{{old('marca')}}" class="form-control">
                            @error('marca')
                                <span class="invalid-feedback" role="alert">
                                    <i style="color: red; font-size: 0.8em;"><b>{{ $message }}</b></i>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group col-md-3">
                            <label>Tipo</label>
                            <select name="tipo" class="form-control">
                                <option></option>
                                <option value="Particular">Particular</option>
                                <option value="Camioneta">Camioneta</option>
                            </select>
                            @error('tipo')
                                <span class="invalid-feedback" role="alert">
                                    <i style="color: red; font-size: 0.8em;"><b>{{ $message }}</b></i>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label>Conductor</label>
                            <select name="conductor" class="form-control">
                                <option></option>
                                @foreach ($driver as $row_driver)
                                    <option value="{{$row_driver->id}}">
                                        {{$row_driver->primer_nombre}} 
                                        {{$row_driver->segundo_nombre}} 
                                        {{$row_driver->apellidos}}
                                    </option>
                                @endforeach
                            </select>
                            @error('telefono')
                                <span class="invalid-feedback" role="alert">
                                    <i style="color: red; font-size: 0.8em;"><b>{{ $message }}</b></i>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label>Propietario</label>
                            <select name="propietario" class="form-control">
                                <option></option>
                                @foreach ($owner as $row_owner)
                                    <option value="{{$row_owner->id}}">
                                        {{$row_owner->primer_nombre}} 
                                        {{$row_owner->segundo_nombre}} 
                                        {{$row_owner->apellidos}}
                                    </option>
                                @endforeach
                            </select>
                            @error('ciudad')
                                <span class="invalid-feedback" role="alert">
                                    <i style="color: red; font-size: 0.8em;"><b>{{ $message }}</b></i>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group col-md-12">
                            <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit">
                                <strong>Guardar</strong>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection