<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TurnosMayor;


class TurnosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        TurnosMayor::create([
            "asignacion" => "Cofradía",
            "codigo_turno" => "Salida",
            "turno" => "Honor Salida",
            "precio" => 250.00,
            "disponibilidad" => 44,
        ]);

        TurnosMayor::create([
            "asignacion" => "Cofradía del Rosario",
            "codigo_turno" => "Rosario",
            "turno" => "Cofradía del Rosario",
            "precio" => 30.00,
            "disponibilidad" => 44,
        ]);

        TurnosMayor::create([
            "asignacion" => "Damas",
            "codigo_turno" => "T03",
            "turno" => "Turno 3",
            "precio" => 30.00,
            "disponibilidad" => 44,
        ]);

        TurnosMayor::create([
            "asignacion" => "Hermandad de Dolores San Jose",
            "codigo_turno" => "T04",
            "turno" => "Turno 4",
            "precio" => 30.00,
            "disponibilidad" => 44,
        ]);
        
        TurnosMayor::create([
            "asignacion" => "Vera Cruz",
            "codigo_turno" => "T05",
            "turno" => "Turno 5",
            "precio" => 30.00,
            "disponibilidad" => 44,
        ]);

        TurnosMayor::create([
            "asignacion" => "",
            "codigo_turno" => "T06",
            "turno" => "Turno 6",
            "precio" => 30.00,
            "disponibilidad" => 44,
        ]);

        TurnosMayor::create([
            "asignacion" => "Calvario",
            "codigo_turno" => "T07",
            "turno" => "Turno 7",
            "precio" => 30.00,
            "disponibilidad" => 44,
        ]);

        TurnosMayor::create([
            "asignacion" => "Caballeros",
            "codigo_turno" => "Palacio",
            "turno" => "Extraodinario Palacio",
            "precio" => 75.00,
            "disponibilidad" => 44,
        ]);

        TurnosMayor::create([
            "asignacion" => "Mixto",
            "codigo_turno" => "Parques",
            "turno" => "Extraodinario Entre Parques",
            "precio" => 75.00,
            "disponibilidad" => 44,
        ]);

        TurnosMayor::create([
            "asignacion" => "Caballeros",
            "codigo_turno" => "Portal",
            "turno" => "Extraodinario Portal",
            "precio" => 75.00,
            "disponibilidad" => 44,
        ]);

        TurnosMayor::create([
            "asignacion" => "Caballeros",
            "codigo_turno" => "Catedral",
            "turno" => "Extraodinario Catedral",
            "precio" => 125.00,
            "disponibilidad" => 44,
        ]);

        TurnosMayor::create([
            "asignacion" => "Caballeros Recolección",
            "codigo_turno" => "T12",
            "turno" => "Turno 12",
            "precio" => 30.00,
            "disponibilidad" => 44,
        ]);
        TurnosMayor::create([
            "asignacion" => "Damas Recolección",
            "codigo_turno" => "T13",
            "turno" => "Turno 13",
            "precio" => 30.00,
            "disponibilidad" => 44,
        ]);

        TurnosMayor::create([
            "asignacion" => "Mercado Central Mixto",
            "codigo_turno" => "T14",
            "turno" => "Turno 14",
            "precio" => 30.00,
            "disponibilidad" => 44,
        ]);

        TurnosMayor::create([
            "asignacion" => "La Asunción",
            "codigo_turno" => "T15",
            "turno" => "Turno 15",
            "precio" => 30.00,
            "disponibilidad" => 44,
        ]);

        TurnosMayor::create([
            "asignacion" => "",
            "codigo_turno" => "T16",
            "turno" => "Turno 16",
            "precio" => 30.00,
            "disponibilidad" => 44,
        ]);

        TurnosMayor::create([
            "asignacion" => "El Gallito",
            "codigo_turno" => "T17",
            "turno" => "Turno 17",
            "precio" => 30.00,
            "disponibilidad" => 44,
        ]);

        TurnosMayor::create([
            "asignacion" => "",
            "codigo_turno" => "T18",
            "turno" => "Turno 18",
            "precio" => 30.00,
            "disponibilidad" => 44,
        ]);

        TurnosMayor::create([
            "asignacion" => "",
            "codigo_turno" => "T19",
            "turno" => "Turno 19",
            "precio" => 30.00,
            "disponibilidad" => 44,
        ]);

        TurnosMayor::create([
            "asignacion" => "Mixto",
            "codigo_turno" => "Merced",
            "turno" => "Extraordinario La Merced",
            "precio" => 75.00,
            "disponibilidad" => 44,
        ]);

        TurnosMayor::create([
            "asignacion" => "Acción de gracias Diego Godoy",
            "codigo_turno" => "T21",
            "turno" => "Turno 21",
            "precio" => 30.00,
            "disponibilidad" => 44,
        ]);

        TurnosMayor::create([
            "asignacion" => "",
            "codigo_turno" => "T22",
            "turno" => "Turno 22",
            "precio" => 30.00,
            "disponibilidad" => 44,
        ]);

        TurnosMayor::create([
            "asignacion" => "",
            "codigo_turno" => "T23",
            "turno" => "Turno 23",
            "precio" => 30.00,
            "disponibilidad" => 44,
        ]);

        TurnosMayor::create([
            "asignacion" => "Acción de Gracias Jorge Hernández",
            "codigo_turno" => "T24",
            "turno" => "Turno 24",
            "precio" => 30.00,
            "disponibilidad" => 44,
        ]);

        TurnosMayor::create([
            "asignacion" => "Acción de Gracias Manuel Castellanos",
            "codigo_turno" => "T25",
            "turno" => "Turno 25",
            "precio" => 30.00,
            "disponibilidad" => 44,
        ]);

        TurnosMayor::create([
            "asignacion" => "Beatas",
            "codigo_turno" => "T26",
            "turno" => "Turno 26",
            "precio" => 30.00,
            "disponibilidad" => 44,
        ]);

        TurnosMayor::create([
            "asignacion" => "",
            "codigo_turno" => "T27",
            "turno" => "Turno 27",
            "precio" => 30.00,
            "disponibilidad" => 44,
        ]);

        TurnosMayor::create([
            "asignacion" => "",
            "codigo_turno" => "T28",
            "turno" => "Turno 28",
            "precio" => 30.00,
            "disponibilidad" => 44,
        ]);

        TurnosMayor::create([
            "asignacion" => "",
            "codigo_turno" => "T29",
            "turno" => "Turno 29",
            "precio" => 30.00,
            "disponibilidad" => 44,
        ]);

        TurnosMayor::create([
            "asignacion" => "Mixto",
            "codigo_turno" => "Isabel",
            "turno" => "Extraordinario Parque Isabel la Católica",
            "precio" => 75.00,
            "disponibilidad" => 44,
        ]);

        TurnosMayor::create([
            "asignacion" => "",
            "codigo_turno" => "T31",
            "turno" => "Turno 31",
            "precio" => 30.00,
            "disponibilidad" => 44,
        ]);

        TurnosMayor::create([
            "asignacion" => "",
            "codigo_turno" => "T32",
            "turno" => "Turno 32",
            "precio" => 30.00,
            "disponibilidad" => 44,
        ]);

        TurnosMayor::create([
            "asignacion" => "In Memoriam Jorge Mario Díaz",
            "codigo_turno" => "T33",
            "turno" => "In Memoriam Jorge Mario Díaz",
            "precio" => 30.00,
            "disponibilidad" => 44,
        ]);

        TurnosMayor::create([
            "asignacion" => "Caballeros",
            "codigo_turno" => "T34",
            "turno" => "Turno 34",
            "precio" => 30.00,
            "disponibilidad" => 44,
        ]);
        
        TurnosMayor::create([
            "asignacion" => "Caballeros",
            "codigo_turno" => "T35",
            "turno" => "Turno 35",
            "precio" => 30.00,
            "disponibilidad" => 44,
        ]);

        TurnosMayor::create([
            "asignacion" => "Caballeros",
            "codigo_turno" => "T36",
            "turno" => "Turno 36",
            "precio" => 30.00,
            "disponibilidad" => 44,
        ]);

        TurnosMayor::create([
            "asignacion" => "Caballeros",
            "codigo_turno" => "Entrada",
            "turno" => "Honor Entrada",
            "precio" => 250.00,
            "disponibilidad" => 44,
        ]);
    }
}
