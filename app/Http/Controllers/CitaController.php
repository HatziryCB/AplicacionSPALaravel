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
            'hora' => 'required|date_format:H:i',
            'servicios' => 'required|array',
            'servicios.*' => 'exists:servicios,id',
        ]);

        // Cálculo del total
        $total = 0;
        foreach ($validatedData['servicios'] as $servicioId) {
            $servicio = Servicio::findOrFail($servicioId);
            $total += $servicio->precio;
        }

        // Crear la cita
        $cita = new Cita();
        $cita->cliente_id = $validatedData['cliente_id'];
        $cita->empleado_id = $validatedData['empleado_id'];
        $cita->fecha = $validatedData['fecha'];
        $cita->hora = $validatedData['hora'];
        $cita->total = $total;  // Guardar el total en la base de datos
        $cita->save();

        // Guardar los servicios en la tabla
        $cita->servicios()->attach($validatedData['servicios']);

        return redirect()->route('citas.index')->with('success', 'Cita agendada con éxito.');
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
