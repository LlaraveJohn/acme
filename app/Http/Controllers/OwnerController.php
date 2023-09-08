<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Owner;

class OwnerController extends Controller
{
    public function index() {
        $owner = Owner::all();
        return view('owner.index')->with(compact('owner'));
    }

    public function create () {
        return view('owner.create');
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
            'documento' => 'required|numeric|unique:owners',
            'primer_nombre' => 'required',
            'apellidos' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'ciudad' => 'required'
        ];

        $this->validate($request, $rules, $messages);

        $owner = new Owner();
        $owner->documento = $request->input('documento');
        $owner->primer_nombre = $request->input('primer_nombre');
        $owner->segundo_nombre = $request->input('segundo_nombre');
        $owner->apellidos = $request->input('apellidos');
        $owner->direccion = $request->input('direccion');
        $owner->telefono = $request->input('telefono');
        $owner->ciudad = $request->input('ciudad');
        $owner->save();

        return redirect('owner');
    }

    public function edit ($id) {
        $owner = Owner::find($id);
        return view('owner.edit')->with(compact('owner'));
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

        $owner = Owner::find($id);

        $rules = [
            'documento' => 'required|numeric|unique:owners,documento,'.$owner->id,
            'primer_nombre' => 'required',
            'apellidos' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'ciudad' => 'required'
        ];

        $this->validate($request, $rules, $messages);

        $owner->documento = $request->input('documento');
        $owner->primer_nombre = $request->input('primer_nombre');
        $owner->segundo_nombre = $request->input('segundo_nombre');
        $owner->apellidos = $request->input('apellidos');
        $owner->direccion = $request->input('direccion');
        $owner->telefono = $request->input('telefono');
        $owner->ciudad = $request->input('ciudad');
        $owner->save();

        return redirect('owner');
    }

    public function destroy ($id) {
        $owner = Owner::find($id);
        $owner->delete();
        return back();
    }
}
