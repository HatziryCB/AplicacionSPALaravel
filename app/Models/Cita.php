<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    protected $fillable = [
        'cliente_id',
        'empleado_id',
        'servicio_id',
        'fecha',
        'hora',
        'total_a_pagar',
        'metodo_pago'];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class,'cliente_id');
    }

    public function empleado()
    {
        return $this->belongsTo(Empleado::class,'empleado_id');
    }

    public function servicio()
    {
        return $this->belongsTo(Servicio::class,'servicio_id');
    }
}

