<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Driver;

class DriverController extends Controller
{
    public function index() {
        $driver = Driver::all();
        return view('driver.index')->with(compact('driver'));
    }

    public function create () {
        return view('driver.create');
    }

    public function store (Request $request) {
        $messages = [
            'documento.required' => 'Este campo es obligatorio',
            'documento.numeric' => 'Debe ingresar solo números',
            'documento.unique' => 'Este documento ya esta creado en la base de datos',
            'primer_nombre.required' => 'Este campo es obligatorio',
            'apellidos.required' => 'Este campo es obligatorio',
            'direccion.required' => 'Este campo es obligatorio',
            'telefono.required' => 'Este campo es obligatorio',
            'ciudad.required' => 'Este campo es obligatorio'
        ];

        $rules = [
            'documento' => 'required|numeric|unique:drivers',
            'primer_nombre' => 'required',
            'apellidos' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'ciudad' => 'required'
        ];

        $this->validate($request, $rules, $messages);

        $driver = new Driver();
        $driver->documento = $request->input('documento');
        $driver->primer_nombre = $request->input('primer_nombre');
        $driver->segundo_nombre = $request->input('segundo_nombre');
        $driver->apellidos = $request->input('apellidos');
        $driver->direccion = $request->input('direccion');
        $driver->telefono = $request->input('telefono');
        $driver->ciudad = $request->input('ciudad');
        $driver->save();

        return redirect('driver');
    }

    public function edit ($id) {
        $driver = Driver::find($id);
        return view('driver.edit')->with(compact('driver'));
    }

    public function update (Request $request, $id) {
        $messages = [
            'documento.required' => 'Este campo es obligatorio',
            'documento.numeric' => 'Debe ingresar solo números',
            'documento.unique' => 'Este documento ya esta creado en la base de datos',
            'primer_nombre.required' => 'Este campo es obligatorio',
            'apellidos.required' => 'Este campo es obligatorio',
            'direccion.required' => 'Este campo es obligatorio',
            'telefono.required' => 'Este campo es obligatorio',
            'ciudad.required' => 'Este campo es obligatorio'
        ];

        $driver = Driver::find($id);

        $rules = [
            'documento' => 'required|numeric|unique:drivers,documento,'.$driver->id,
            'primer_nombre' => 'required',
            'apellidos' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'ciudad' => 'required'
        ];

        $this->validate($request, $rules, $messages);

        $driver->documento = $request->input('documento');
        $driver->primer_nombre = $request->input('primer_nombre');
        $driver->segundo_nombre = $request->input('segundo_nombre');
        $driver->apellidos = $request->input('apellidos');
        $driver->direccion = $request->input('direccion');
        $driver->telefono = $request->input('telefono');
        $driver->ciudad = $request->input('ciudad');
        $driver->save();

        return redirect('driver');
    }

    public function destroy ($id) {
        $driver = Driver::find($id);
        $driver->delete();
        return back();
    }
}
