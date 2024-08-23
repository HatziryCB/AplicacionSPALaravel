@extends('layouts.layout')

@section('content')
    <div class="container">
        <h1>Agendar Cita</h1>

        <form action="{{ route('citas.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="cliente_id">Cliente</label>
                <select name="cliente_id" id="cliente_id" class="form-control" required>
                    <option value="">Selecciona un cliente</option>
                    @foreach($clientes as $cliente)
                        <option value="{{ $cliente->id }}">{{ $cliente->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="empleado_id">Empleado</label>
                <select name="empleado_id" id="empleado_id" class="form-control" required>
                    <option value="">Selecciona un empleado</option>
                    @foreach($empleados as $empleado)
                        <option value="{{ $empleado->id }}">{{ $empleado->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="servicio_id">Servicio</label>
                <select name="servicio_id" id="servicio_id" class="form-control" required>
                    <option value="">Selecciona un servicio</option>
                    @foreach($servicios as $servicio)
                        <option value="{{ $servicio->id }}">{{ $servicio->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="fecha">Fecha</label>
                <input type="date" name="fecha" id="fecha" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="hora">Hora</label>
                <input type="time" name="hora" id="hora" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="metodo_pago">Método de Pago</label>
                <input type="text" name="metodo_pago" id="metodo_pago" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="total_a_pagar">Total a Pagar</label>
                <input type="number" name="total_a_pagar" id="total_a_pagar" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Agendar</button>
        </form>
    </div>
@endsection
