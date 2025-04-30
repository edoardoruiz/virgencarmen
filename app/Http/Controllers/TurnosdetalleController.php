<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TurnosMayor;
use App\Models\Turnosdetalle;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\TurnosDetalleExport;

class TurnosDetalleController extends Controller
{
    public function index()
    {
            $turnosdetalle = Turnosdetalle::all();
            return view('turnosdetalle.index', compact('turnosdetalle'));
    
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {

    }

    public function show($id)
    {
        //

    }

    public function edit($id)
    {
        //

    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'Nombres' => 'required',
            'Apellidos' => 'required',
        ]);
    
        $detalle = TurnosDetalle::findOrFail($id);
        $detalle->DPI = $request->DPI;
        $detalle->Nombres = $request->Nombres;
        $detalle->Apellidos = $request->Apellidos;
        $detalle->save();
    
        return redirect()->route('turnosdetalle.index')->with('success', 'Detalle actualizado correctamente.');
    }
    

    public function destroy($id)
    {
        $detalle = TurnosDetalle::findOrFail($id);
        $turnoId = $detalle->turno_id;
    
        if (auth()->user()->can('delete', $detalle)) {
        $turno = TurnosMayor::findOrFail($turnoId);
        $turno->disponibilidad++;
        $turno->save();
        $detalle->delete();
        return redirect()->back()->with('success', 'Detalle de turno eliminado correctamente.');
        }
    
        return redirect()->back()->with('error', 'No tienes permiso para eliminar este detalle de turno.');
    }


    public function exportToPDF($id)
    {

        
        // Obtén el detalle de la compra
        $detalle = TurnosDetalle::findOrFail($id);
        //dd($detalle);
        $nombreCompleto = $detalle->Nombres . ' ' . $detalle->Apellidos;
        $fechaCompra = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $detalle->created_at);
        $fechaFormateada = $fechaCompra->format('d/m/Y');
        //dd($detalle);
    
        // Incluye la clase FPDF
        require_once('C:\laragon\www\turnos\vendor\setasign\fpdf\fpdf.php');

        $pdf = new \FPDF();
        $pdf->AddPage();

        // Agrega las imágenes de fondo
        $pdf->Image('img/Inscripciones2024.jpg', 0, 10, 210, 140, 'JPG');
        $pdf->Image('img/Inscripciones2024.jpg', 0, 150, 210, 140, 'JPG');

        // Establece la fuente y el tamaño
        $pdf->SetFont('Arial', '', 11);

        $cellWidth = 35; // Ancho de cada celda para los campos
        $valueWidth = 30; // Ancho de cada celda para los valores

    
        $pdf->Ln(50);

        $fields = [
        'Fecha de Compra:' => $fechaFormateada,
        utf8_decode('Código Cargador:') => $detalle->codigo_cargador,
        'DPI:' => $detalle->DPI,
        'Nombre:' => utf8_decode($nombreCompleto),
        'Turno:' => utf8_decode($detalle->turno->turno),
        'Forma de pago:' => $detalle->Forma_pago,
        'Total:' => $detalle->Valor . ' Quetzales'
        ];

    
        $totalWidth = $cellWidth + $valueWidth;
        $startX = ($pdf->GetPageWidth() - $totalWidth) / 2;

        foreach ($fields as $field => $value) {
        // Establecer la posición X para los campos
        $pdf->SetX($startX);
        $pdf->Cell($cellWidth, 6, $field, 0, 0, 'L'); // Campo alineado a la izquierda
        $pdf->Cell($valueWidth, 6, $value, 0, 1, 'L'); // Valor alineado a la izquierda en la misma línea
        }

        $pdf->SetFont('Arial','B',7);
        $pdf->Ln(11);
        $pdf->cell(0,3,'Indicaciones Generales:',0,1,'C');
        $pdf->cell(0,3,utf8_decode("Los turnos serán entregados los días sábado 6 de julio de 10:00 a 15:30 horas y domingo 7 de julio de 8:00 a 13:00 horas."),0,1,'C');
        $pdf->cell(0,3,utf8_decode("Las andas procesionales serán levantadas a las 15:00 horas en punto."),0,1,'C');
        $pdf->cell(0,3,utf8_decode("Evite llevar niños en brazos, de la mano o debajo del anda al momento de cargar."),0,1,'C');
        $pdf->cell(0,3,'Presentarse 15 minutos antes de su turno en la fila asignada.',0,1,'C');
        $pdf->cell(0,3,'Uniformidad:',0,1,'C');
        $pdf->cell(0,3,'Damas: Vestido blanco o blusa blanca y falda blanca/cafe debajo de la rodilla, medias, zapatos y mantilla.',0,1,'C');
        $pdf->cell(0,3,utf8_decode("Caballeros: Traje formal oscuro, camisa blanca y corbata (NO CORBATIN) y zapatos formales (No chumpa, no suéteres, no lentes de sol, no aretes, no tenis)."),0,1,'C');

        $pdf->Ln(58); // Espacio para evitar la superposición con la imagen
        $pdf->SetFont('Arial', '', 11);
            
        foreach ($fields as $field => $value) {
            $pdf->SetX($startX);
            $pdf->Cell($cellWidth, 6, $field, 0, 0, 'L'); // Campo alineado a la izquierda
            $pdf->Cell($valueWidth, 6, $value, 0, 1, 'L'); // Valor alineado a la izquierda en la misma línea
        }
        $pdf->SetFont('Arial', 'B', 7);
        $pdf->Ln(13);
        $pdf->cell(0,3,'Indicaciones Generales:',0,1,'C');
        $pdf->cell(0,3,utf8_decode("Los turnos serán entregados los días sábado 6 de julio de 10:00 a 15:30 horas y domingo 7 de julio de 8:00 a 13:00 horas."),0,1,'C');
        $pdf->cell(0,3,utf8_decode("Las andas procesionales serán levantadas a las 15:00 horas en punto."),0,1,'C');
        $pdf->cell(0,3,utf8_decode("Evite llevar niños en brazos, de la mano o debajo del anda al momento de cargar."),0,1,'C');
        $pdf->cell(0,3,'Presentarse 15 minutos antes de su turno en la fila asignada.',0,1,'C');
        $pdf->cell(0,3,'Uniformidad:',0,1,'C');
        $pdf->cell(0,3,'Damas: Vestido blanco o blusa blanca y falda blanca/cafe debajo de la rodilla, medias, zapatos y mantilla.',0,1,'C');
        $pdf->cell(0,3,utf8_decode("Caballeros: Traje formal oscuro, camisa blanca y corbata (NO CORBATIN) y zapatos formales (No chumpa, no suéteres, no lentes de sol, no aretes, no tenis)."),0,1,'C');
        // Salida del PDF (descarga el archivo al navegador)
        $pdf->Output('devoto ' .$detalle->DPI . '.pdf', 'D');
    }

    public function exportToExcel()
    {
        $date = date('d-m-Y');
        $fileName = "turnos_detalle_{$date}.xlsx";

        return Excel::download(new TurnosDetalleExport, $fileName);    }
}
