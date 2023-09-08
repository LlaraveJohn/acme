@extends('layouts.app')

@section('title', 'Conductortes')

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
                    <h5>Formulario creación de conductores</h5>
                    <a href="{{url('/driver')}}">
                        <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="button">
                            <strong>Regresar</strong>
                        </button>
                    </a>
                </div>
            </div>

            <div class="ibox-content" style="padding: 15px 20px 0px 20px;">
                <div class="row">
                    <form method="POST" action="{{url('/driver')}}" role="form" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group col-md-3">
                            <label>Documento</label>
                            <input type="text" name="documento" value="{{old('documento')}}" class="form-control">
                            @error('documento')
                                <span class="invalid-feedback" role="alert">
                                    <i style="color: red; font-size: 0.8em;"><b>{{ $message }}</b></i>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group col-md-3">
                            <label>Primer nombre</label>
                            <input type="text" name="primer_nombre" value="{{old('primer_nombre')}}" class="form-control">
                            @error('primer_nombre')
                                <span class="invalid-feedback" role="alert">
                                    <i style="color: red; font-size: 0.8em;"><b>{{ $message }}</b></i>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group col-md-3">
                            <label>Segundo Nombre</label>
                            <input type="text" name="segundo_nombre" value="{{old('segundo_nombre')}}" class="form-control">
                            @error('segundo_nombre')
                                <span class="invalid-feedback" role="alert">
                                    <i style="color: red; font-size: 0.8em;"><b>{{ $message }}</b></i>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group col-md-3">
                            <label>Apellidos</label>
                            <input type="text" name="apellidos" value="{{old('apellidos')}}" class="form-control">
                            @error('apellidos')
                                <span class="invalid-feedback" role="alert">
                                    <i style="color: red; font-size: 0.8em;"><b>{{ $message }}</b></i>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group col-md-4">
                            <label>Direccion</label>
                            <input type="text" name="direccion" value="{{old('direccion')}}" class="form-control">
                            @error('direccion')
                                <span class="invalid-feedback" role="alert">
                                    <i style="color: red; font-size: 0.8em;"><b>{{ $message }}</b></i>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group col-md-4">
                            <label>Teléfono</label>
                            <input type="text" name="telefono" value="{{old('telefono')}}" class="form-control">
                            @error('telefono')
                                <span class="invalid-feedback" role="alert">
                                    <i style="color: red; font-size: 0.8em;"><b>{{ $message }}</b></i>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group col-md-4">
                            <label>Ciudad</label>
                            <input type="text" name="ciudad" value="{{old('ciudad')}}" class="form-control">
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