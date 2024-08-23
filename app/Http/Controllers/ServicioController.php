<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    public function index()
    {
        $servicios = Servicio::all();
        return view('servicios.index', compact('servicios'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        // Obtener un servicio por su ID
        $servicio = Servicio::findOrFail($id);

        // Retornar la vista y pasar el servicio
        return view('servicios.show', compact('servicio'));
    }

    public function edit(Servicio $servicio)
    {
        //
    }

    public function update(Request $request, Servicio $servicio)
    {
        //
    }

    public function destroy(Servicio $servicio)
    {
        //
    }
}
