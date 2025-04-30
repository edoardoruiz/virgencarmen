<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TurnosVelas extends Model
{
    protected $table = 'turnos_velas';

    use HasFactory;

    protected $fillable = [
        "asignacion",
        "codigo_turno",
        "turno",
        "precio",
        "disponibilidad"   
    ];

    public function detalles()
    {
        return $this->hasMany(Veladetalle::class);
    }
}
