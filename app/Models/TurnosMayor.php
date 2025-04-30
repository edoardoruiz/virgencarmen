<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TurnosMayor extends Model
{
    protected $table = 'turnos_mayors';

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
        return $this->hasMany(Turnosdetalle::class);
    }

    public function users()
{
    return $this->belongsToMany(User::class, 'turno_user', 'turno_id', 'user_id');
}
}
