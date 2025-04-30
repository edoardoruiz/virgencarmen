<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Turnosdetalle extends Model
{
    protected $table = 'turnosdetalles';

    use HasFactory, SoftDeletes;

    protected $fillable = [
        "codigo",
        "turno_id",
        "DPI",
        "Nombres",
        "Apellidos",
        "Forma_pago",
        "Valor",
        "Numero_autorizacion",
        "codigo_cargador",
        "user_id"
    ];

    public function turno()
    {
        return $this->belongsTo(TurnosMayor::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
