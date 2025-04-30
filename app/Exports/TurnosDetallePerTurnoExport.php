<?php

namespace App\Exports;

use App\Models\TurnosDetalle;
use App\Models\TurnosMayor;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithTitle;

class TurnosDetallePerTurnoExport implements FromCollection, WithHeadings, WithTitle
{
    private $turnoId;
    private $turnoName;

    public function __construct($turnoId)
    {
        $this->turnoId = $turnoId;
        $this->turnoName = TurnosMayor::find($turnoId)->turno;
    }

    public function collection()
    {
        return TurnosDetalle::where('turno_id', $this->turnoId)
            ->with('user', 'turno')
            ->get()
            ->map(function ($detalle) {
                return [
                    'Usuario' => $detalle->user->name,
                    'Codigo_Cargador' =>$detalle->codigo_cargador,
                    'Turno' => $detalle->turno->turno,
                    'DPI' => $detalle->DPI,
                    'Nombres' => $detalle->Nombres,
                    'Apellidos' => $detalle->Apellidos,
                    'Forma de Pago' => $detalle->Forma_pago,
                    'Número de Autorización' => $detalle->Numero_autorizacion,
                    'Valor' => $detalle->Valor,
                    'Fecha de Creación' => $detalle->created_at,
                ];
            });
    }

    public function headings(): array
    {
        return [
            'Usuario',
            'Codigo Cargador',
            'Turno',
            'DPI',
            'Nombres',
            'Apellidos',
            'Forma de Pago',
            'Número de Autorización',
            'Valor',
            'Fecha de Creación',
        ];
    }

    public function title(): string
    {
        return $this->turnoName;
    }
}
