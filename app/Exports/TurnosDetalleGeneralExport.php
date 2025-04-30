<?php

namespace App\Exports;

use App\Models\TurnosDetalle;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class TurnosDetalleGeneralExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return TurnosDetalle::with('user', 'turno')
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
}
