<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TurnosVelas;


class VelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TurnosVelas::create([
            "asignacion" => "Damas",
            "codigo_turno" => "V01",
            "turno" => "Turno 1",
            "precio" => 50.00,
            "disponibilidad" => 26,
        ]);
        TurnosVelas::create([
            "asignacion" => "Caballeros",
            "codigo_turno" => "V02",
            "turno" => "Turno 2",
            "precio" => 25.00,
            "disponibilidad" => 26,
        ]);
        TurnosVelas::create([
            "asignacion" => "Mixto",
            "codigo_turno" => "V03",
            "turno" => "Turno 3",
            "precio" => 25.00,
            "disponibilidad" => 26,
        ]);
        TurnosVelas::create([
            "asignacion" => "Caballeros",
            "codigo_turno" => "V04",
            "turno" => "Turno 4",
            "precio" => 50.00,
            "disponibilidad" => 26,
        ]);


    }
}
