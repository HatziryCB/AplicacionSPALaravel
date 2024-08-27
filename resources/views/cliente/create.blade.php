@extends('layouts.layout')

@section('content')
<div class="row justify-content-center bg-appointment mx-0">
    <div class="col-lg-6 py-5">
        <div class="p-5 my-5" style="background: rgba(33, 30, 28, 0.7);">
            <h1 class="text-white text-center mb-4">Registrar Cliente</h1>
            <form action="{{ route('clientes.store') }}" method="POST">
@csrf
<div class="form-row">
    <div class="col-sm-6">
        <div class="form-group">
            <input type="text" name="nombre" class="form-control bg-transparent p-4" placeholder="Nombre" required="required" />
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <input type="email" name="email" class="form-control bg-transparent p-4" placeholder="Email" required="required" />
        </div>
    </div>
</div>
<div class="form-row">
    <div class="col-sm-6">
        <div class="form-group">
            <input type="text" name="telefono" class="form-control bg-transparent p-4" placeholder="Teléfono" required="required" />
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <input type="text" name="direccion" class="form-control bg-transparent p-4" placeholder="Dirección" required="required" />
        </div>
    </div>
</div>
<div class="form-row">
    <div class="col-sm-12">
        <button class="btn btn-primary btn-block" type="submit" style="height: 47px;">Registrar Cliente</button>
    </div>
</div>
</form>
</div>
</div>
</div>
@endsection
