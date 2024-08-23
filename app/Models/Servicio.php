<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $fillable = ['nombre', 'descripcion', 'precio', 'duracion'];

    public function citas()
    {
        return $this->belongsToMany(Cita::class);
    }
}

