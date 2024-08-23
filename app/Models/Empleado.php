<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Empleado extends Model
{
    protected $fillable = ['nombre', 'especialidad', 'disponible'];

    public function citas()
    {
        return $this->hasMany(Cita::class);
    }
}

