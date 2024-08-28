<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use App\Models\Cliente;
use App\Models\Empleado;
use App\Models\Servicio;
use Illuminate\Http\Request;

class CitaController extends Controller
{

    public function index()
    {
        $clientes = Cliente::all();
        $empleados = Empleado::all();
        $servicios = Servicio::all();

        return view('citas.index', compact('clientes', 'empleados', 'servicios'));
    }


    public function create()
    {
        $clientes = Cliente::all();
        $empleados = Empleado::all();
        $servicios = Servicio::all();
        return view('citas.create', compact('clientes', 'empleados', 'servicios'));
    }

    public function store(Request $request)
    {
        $total = 0;
        $serviciosSeleccionados = $request->input('servicios', []);

        foreach ($serviciosSeleccionados as $servicioId) {
            $servicio = Servicio::find($servicioId);
            $total += $servicio->precio;
        }

        // Guardar la cita y el total
        $cita = new Cita();
        $cita->cliente_id = $request->input('cliente_id');
        $cita->empleado_id = $request->input('empleado_id');
        $cita->fecha = $request->input('fecha');
        $cita->hora = $request->input('hora');
        $cita->total = $total;
        $cita->save();

        $cita->servicios()->attach($serviciosSeleccionados);

        return redirect()->route('citas.index')->with('success', 'Cita creada correctamente.');
    }



    public function show(Cita $cita)
    {
        //
    }


    public function edit(Cita $cita)
    {
        //
    }

    public function update(Request $request, Cita $cita)
    {
        //
    }

    public function destroy(Cita $cita)
    {
        //
    }
}
