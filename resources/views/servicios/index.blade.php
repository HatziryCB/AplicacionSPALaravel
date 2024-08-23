@extends('layouts.layout')

@section('title', 'Servicios')

@section('content')
    <div class="container-fluid px-0 py-5 my-5">
        <div class="row justify-content-center bg-appointment mx-0">
            <div class="col-lg-6 py-5">
                <div class="p-5 my-5" style="background: rgba(33, 30, 28, 0.7);">
                    <h1 class="text-white text-center mb-4">Agendar Cita</h1>
                    <form action="{{ route('citas.store') }}" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select name="cliente_id" id="cliente_id" class="custom-select bg-transparent px-4" required>
                                        <option value="" selected>Selecciona un cliente</option>
                                        @foreach($clientes as $cliente)
                                            <option value="{{ $cliente->id }}">{{ $cliente->nombre }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select name="empleado_id" id="empleado_id" class="custom-select bg-transparent px-4" required>
                                        <option value="" selected>Selecciona un empleado</option>
                                        @foreach($empleados as $empleado)
                                            <option value="{{ $empleado->id }}">{{ $empleado->nombre }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select name="servicio_id[]" id="servicio_id" class="custom-select bg-transparent px-4" required multiple>
                                        <option value="" disabled>Selecciona uno o más servicios</option>
                                        @foreach($servicios as $servicio)
                                            <option value="{{ $servicio->id }}">{{ $servicio->nombre }} - ${{ $servicio->precio }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="date" name="fecha" id="fecha" class="form-control bg-transparent p-4" placeholder="Select Date" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="time" name="hora" id="hora" class="form-control bg-transparent p-4" placeholder="Select Time" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="metodo_pago" id="metodo_pago" class="form-control bg-transparent p-4" placeholder="Método de Pago" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="number" name="total_a_pagar" id="total_a_pagar" class="form-control bg-transparent p-4" placeholder="Total a Pagar" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <button class="btn btn-primary btn-block" type="submit" style="height: 47px;">Agendar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
