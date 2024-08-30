@extends('layouts.layout')

@section('title', 'Citas')

@section('content')
    <div class="row justify-content-center bg-appointment mx-0">
        <div class="col-lg-8 py-5">
            <div class="p-5 my=5" style="background: rgba(33, 30, 28, 0.7);">
                <h1 class="text-white text-center mb-4">Agendar Cita</h1>
                <form action="{{ route('citas.store') }}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <select name="cliente_id" id="cliente_id" class="custom-select bg-transparent" required>
                                    <option value="">Selecciona un cliente</option>
                                    @foreach($clientes as $cliente)
                                        <option value="{{ $cliente->id }}">{{ $cliente->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <select name="servicios[]" class="custom-select servicio-select bg-transparent" multiple>
                                    @foreach($servicios as $servicio)
                                        <option value="{{ $servicio->id }}" data-precio="{{ $servicio->precio }}">
                                            {{ $servicio->nombre }} - Q{{ $servicio->precio }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <select name="empleado_id" id="empleado_id" class="custom-select bg-transparent" required>
                                    <option value="">Especialista...</option>
                                    @foreach($empleados as $empleado)
                                        <option value="{{ $empleado->id }}">{{ $empleado->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <input type="date" name="fecha" id="fecha" class="custom-select bg-transparent" required>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <input type="time" name="hora" id="hora" class="custom-select bg-transparent" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">Agendar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const servicioSelect = document.querySelectorAll('.servicio-select');
            const totalField = document.getElementById('total');

            servicioSelect.forEach(select => {
                select.addEventListener('change', calcularTotal);
            });

            function calcularTotal() {
                let total = 0;
                servicioSelect.forEach(select => {
                    Array.from(select.selectedOptions).forEach(option => {
                        total += parseFloat(option.getAttribute('data-precio'));
                    });
                });

                totalField.value = total;
            }
        });

    </script>
@endsection


