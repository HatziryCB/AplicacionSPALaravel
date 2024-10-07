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
        $validatedData = $request->validate([
            'cliente_id' => 'required|exists:clientes,id',
            'empleado_id' => 'required|exists:empleados,id',
            'fecha' => 'required|date',
            'hora' => 'required',
            'servicios' => 'required|array',
            'servicios.*' => 'exists:servicios,id',
        ]);

        $total = 0;

        // Calcular el total
        foreach ($validatedData['servicios'] as $servicioId) {
            $servicio = Servicio::find($servicioId);
            if ($servicio) {
                $total += $servicio->precio;
            }
        }

        // Crear la cita y guardar el total
        $cita = Cita::create([
            'cliente_id' => $validatedData['cliente_id'],
            'empleado_id' => $validatedData['empleado_id'],
            'fecha' => $validatedData['fecha'],
            'hora' => $validatedData['hora'],
            'total' => $total, // Se almacena el total calculado
        ]);

        // Guardar los servicios seleccionados
        $cita->servicios()->attach($validatedData['servicios']);

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

    public function update(Request $request, $id)
    {
        $cita = Cita::findOfFail($id);
        $cita->update($request->all());
        return response()->json(['message' => 'Cita actualizada exitosamente.']);
    }

    public function destroy($id)
    {
        $cita = Cita::findOrFail($id);
        $cita->delete();
        return response()->json(['message' => 'Cita eliminada exitosamente.']);
    }
}
