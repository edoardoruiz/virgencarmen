<?php

namespace App\Exports;

use App\Models\TurnosMayor;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class TurnosDetalleExport implements WithMultipleSheets
{
    public function sheets(): array
    {
        $sheets = [];

        // Hoja general
        $sheets[] = new TurnosDetalleGeneralExport();

        // Hojas separadas por cada turno
        $turnos = TurnosMayor::all();

        foreach ($turnos as $turno) {
            $sheets[] = new TurnosDetallePerTurnoExport($turno->id);
        }

        return $sheets;
    }
}