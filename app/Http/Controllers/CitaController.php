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
        // Validar los datos del formulario
        $request->validate([
            'cliente_id' => 'required',
            'servicio_id' => 'required',
            'fecha' => 'required|date',
            'hora' => 'required',
        ]);

        // Crear una nueva cita
        Cita::create([
            'cliente_id' => $request->cliente_id,
            'servicio_id' => $request->servicio_id,
            'fecha' => $request->fecha,
            'hora' => $request->hora,
            'metodo_pago' => $request->metodo_pago,
            'total' => $request->total,
        ]);

        // Redirigir a una página
        return redirect()->route('citas.index')->with('success', 'Cita creada con éxito');
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
