<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Vehicle;

class ReportController extends Controller
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

        return view('report.index')->with(compact('vehicle'));
    }
}
