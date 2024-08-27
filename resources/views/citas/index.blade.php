@extends('layouts.layout')

@section('content')
    <div class="row justify-content-center bg-appointment mx-0">
        <div class="col-lg-8 py-5">
            <div class="p-5 my=5" style="background: rgba(33,30,28,0.7)">
                <h1 class="text-white text-center mb-4">Agendar Cita</h1>
                <form action="{{ route('citas.store') }}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="cliente_id text-white">Cliente</label>
                                <select name="cliente_id" id="cliente_id" class="form-control" required>
                                    <option value="">Selecciona un cliente</option>
                                    @foreach($clientes as $cliente)
                                        <option value="{{ $cliente->id }}">{{ $cliente->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label for="servicio_id">Servicios a Realizar: </label>
                                <select name="servicios[]" id="servicio_id" class="form-control" multiple required>
                                    <option value="">Selecciona uno o más servicios</option>
                                    @foreach($servicios as $servicio)
                                        <option value="{{ $servicio->id }}">{{ $servicio->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="empleado_id">Especialista</label>
                                <select name="empleado_id" id="empleado_id" class="form-control" required>
                                    <option value="">Especialista...</option>
                                    @foreach($empleados as $empleado)
                                        <option value="{{ $empleado->id }}">{{ $empleado->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="fecha">Fecha</label>
                                <input type="date" name="fecha" id="fecha" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label for="hora">Hora</label>
                                <input type="time" name="hora" id="hora" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-sm-1">
                            <div class="form-group">
                                <label for="total_a_pagar">Total</label>
                                <input type="number" name="total" id="total" class="form-control" readonly required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="metodo_pago">Método de Pago</label>
                                <select name="metodo_pago" id="metodo_pago" class="form-control" required>
                                    <option value="Efectivo">Efectivo</option>
                                    <option value="Tarjeta">Tarjeta débito/crédito</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Agendar</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('servicio_id').addEventListener('change', function () {
            let selectedOptions = Array.from(this.selectedOptions);
            let total = 0;
            selectedOptions.forEach(option => {
                let precio = option.getAttribute('data-precio');
                total += parseFloat(precio);
            });
            document.getElementById('total').value = total;
        });
    </script>
@endsection
