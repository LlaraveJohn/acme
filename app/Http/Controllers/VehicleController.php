<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Vehicle;
use App\Driver;
use App\Owner;

class VehicleController extends Controller
{
    public function index() {
        $vehicle = Vehicle::select('vehicles.*',
                                   'drivers.primer_nombre AS nombre1_conductor',
                                   'drivers.segundo_nombre AS nombre2_conductor',
                                   'drivers.apellidos AS apellido_conductor',
                                   'owners.primer_nombre AS nombre1_propietario',
                                   'owners.segundo_nombre AS nombre2_propietario',
                                   'owners.apellidos AS apellido_propietario')
                            ->join('drivers',  'vehicles.id_driver', '=', 'drivers.id')
                            ->join('owners',  'vehicles.id_owner', '=', 'owners.id')
                             ->get();

        return view('vehicle.index')->with(compact('vehicle'));
    }

    public function create () {
        $driver = Driver::all();
        $owner = Owner::all();

        return view('vehicle.create')->with(compact('driver', 'owner'));
    }

    public function store (Request $request) {
        $messages = [
            'placa.required' => 'Este campo es obligatorio',
            'placa.unique' => 'Esta placa ya esta creada en la base de datos',
            'color.required' => 'Este campo es obligatorio',
            'marca.required' => 'Este campo es obligatorio',
            'tipo.required' => 'Este campo es obligatorio',
            'conductor.required' => 'Este campo es obligatorio',
            'propietario.required' => 'Este campo es obligatorio'
        ];

        $rules = [
            'placa' => 'required|unique:vehicles',
            'color' => 'required',
            'marca' => 'required',
            'tipo' => 'required',
            'conductor' => 'required',
            'propietario' => 'required'
        ];

        $this->validate($request, $rules, $messages);

        $vehicle = new Vehicle();
        $vehicle->placa = $request->input('placa');
        $vehicle->color = $request->input('color');
        $vehicle->marca = $request->input('marca');
        $vehicle->tipo = $request->input('tipo');
        $vehicle->id_driver = $request->input('conductor');
        $vehicle->id_owner = $request->input('propietario');
        $vehicle->save();

        return redirect('/');
    }

    public function edit ($id) {
        $vehicle = Vehicle::find($id);
        $driver = Driver::all();
        $owner = Owner::all();

        return view('vehicle.edit')->with(compact('vehicle', 'driver', 'owner'));
    }

    public function update (Request $request, $id) {
        $messages = [
            'placa.required' => 'Este campo es obligatorio',
            'placa.unique' => 'Esta placa ya esta creada en la base de datos',
            'color.required' => 'Este campo es obligatorio',
            'marca.required' => 'Este campo es obligatorio',
            'tipo.required' => 'Este campo es obligatorio',
            'conductor.required' => 'Este campo es obligatorio',
            'propietario.required' => 'Este campo es obligatorio'
        ];

        $vehicle = Vehicle::find($id);

        $rules = [
            'placa' => 'required|unique:vehicles,placa,'.$vehicle->id,
            'color' => 'required',
            'marca' => 'required',
            'tipo' => 'required',
            'conductor' => 'required',
            'propietario' => 'required'
        ];

        $this->validate($request, $rules, $messages);

        $vehicle->placa = $request->input('placa');
        $vehicle->color = $request->input('color');
        $vehicle->marca = $request->input('marca');
        $vehicle->tipo = $request->input('tipo');
        $vehicle->id_driver = $request->input('conductor');
        $vehicle->id_owner = $request->input('propietario');
        $vehicle->save();

        return redirect('/');
    }

    public function destroy ($id) {
        $vehicle = Vehicle::find($id);
        $vehicle->delete();
        return back();
    }
}
