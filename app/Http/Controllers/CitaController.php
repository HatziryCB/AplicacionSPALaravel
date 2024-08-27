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
        $request->validate([
            'cliente_id' => 'required',
            'empleado_id' => 'required',
            'fecha' => 'required|date',
            'hora' => 'required',
            'servicios' => 'required|array',
            'metodo_pago' => 'required',
        ]);

        // Crear la cita
        $cita = Cita::create([
            'cliente_id' => $request->cliente_id,
            'empleado_id' => $request->empleado_id,
            'fecha' => $request->fecha,
            'hora' => $request->hora,
            'metodo_pago' => $request->metodo_pago,
        ]);

        // Calcular el total y asociar servicios a la cita
        $total = 0;
        foreach ($request->servicios as $servicio_id) {
            $servicio = Servicio::find($servicio_id);
            $total += $servicio->precio;

            $cita->servicios()->attach($servicio_id);
        }

        // Actualizar el total en la cita
        $cita->update(['total' => $total]);

        return redirect()->route('citas.index')->with('success', 'Cita creada exitosamente.');
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
