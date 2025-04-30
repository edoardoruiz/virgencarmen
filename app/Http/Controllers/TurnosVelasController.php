<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TurnosVelas;
use App\Models\VelaDetalle;
use Illuminate\Support\Facades\Auth;

class TurnosVelasController extends Controller
{
    public function index()
    {
        //
        $turnosvelas = TurnosVelas::all(); // Obtén todos los turnos
        return view(('Velas.index'),compact('turnosvelas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $userId = Auth::id();

        $validated = $request->validate([
            'turno_id' => 'required|exists:turnos_mayors,id',
            'DPI' => 'nullable|string|max:20',
            'nombres' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'forma_pago' => 'required|string|max:50',
            'numero_autorizacion' => 'nullable|string|max:50',
            'precio' => 'required|numeric',
            'quantity' => 'nullable|integer|min:1'
        ]);
    
        $quantity = $validated['quantity'] ?? 1;

        $turno = TurnosVelas::find($validated['turno_id']);
    
        if ($turno && $turno->disponibilidad >= $quantity) {
            // Obtener el último número de turno vendido
            $ultimo_turno_vendido = VelaDetalle::where('turno_id', $validated['turno_id'])
                ->orderBy('id', 'desc')
                ->first();
    
            $ultimo_numero_turno = $ultimo_turno_vendido ? intval(substr($ultimo_turno_vendido->codigo_cargador, -3)) : 0;
    
            // Generar el código base usando el ID del turno y el último número de turno vendido
            $codigo_base = $turno->codigo_turno . '-';
            $next_numero_turno = $ultimo_numero_turno + 1;
    
            for ($i = 0; $i < $quantity; $i++) {
                // Generar el código completo concatenando el código base con el número de turno
                $codigo = $codigo_base . sprintf('%03d', $next_numero_turno); // Formato de 3 dígitos con ceros a la izquierda
    
                VelaDetalle::create([
                    'turno_id' => $validated['turno_id'],
                    'DPI' => $validated['DPI'],
                    'Nombres' => $validated['nombres'],
                    'Apellidos' => $validated['apellidos'],
                    'Forma_pago' => $validated['forma_pago'],
                    'Numero_autorizacion' => $validated['numero_autorizacion'],
                    'Valor' => $validated['precio'],
                    'user_id' => $userId, // Asignar el ID del usuario autenticado
                    'codigo_cargador' => $codigo, // Asignar el código único al turno
                ]);
    
                $next_numero_turno++;
            }
    
            $turno->disponibilidad -= $quantity;
            $turno->save();
    
            return redirect()->route('velasdetalle.index')->with('success', 'Turnos comprados exitosamente.');
        }
    
        return redirect()->route('Velas.index')->with('error', 'No hay suficiente disponibilidad de turnos.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
