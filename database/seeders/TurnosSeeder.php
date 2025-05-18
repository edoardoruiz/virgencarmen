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
            "direccion" => "Del Altar mayor a la 4ta Calle y 9na Avenida",
            "precio" => 250.00,
            "disponibilidad" => 44,
        ]);

        TurnosMayor::create([
            "asignacion" => "Cofradía del Rosario",
            "codigo_turno" => "Rosario",
            "turno" => "Cofradía del Rosario",
            "direccion" => "De la 9na a la 10ma Avenida sobre la 4ta Calle",
            "precio" => 30.00,
            "disponibilidad" => 44,
        ]);

        TurnosMayor::create([
            "asignacion" => "Damas",
            "codigo_turno" => "T03",
            "turno" => "Turno 3",
            "direccion" => "De la 4ta Calle a la 5ta Calle sobre la 10ma Avenida",
            "precio" => 30.00,
            "disponibilidad" => 44,
        ]);

        TurnosMayor::create([
            "asignacion" => "Hermandad de Dolores San Jose",
            "codigo_turno" => "T04",
            "turno" => "Turno 4",
            "direccion" => "De la 10ma avenida a la 9na avenida sobre la 5ta calle",
            "precio" => 30.00,
            "disponibilidad" => 44,
        ]);
        
        TurnosMayor::create([
            "asignacion" => "Vera Cruz / Cofradía Inmaculada",
            "codigo_turno" => "T05",
            "turno" => "Turno 5",
            "direccion" => "De la 9na Avenida a la 8va Avenida sobre la 5ta Calle",
            "precio" => 30.00,
            "disponibilidad" => 44,
        ]);

        TurnosMayor::create([
            "asignacion" => "Mixto",
            "codigo_turno" => "T06",
            "turno" => "Turno 6",
            "direccion" => "De la 8va Avenida a la 7ma Avenida sobre la 5ta Calle",
            "precio" => 30.00,
            "disponibilidad" => 44,
        ]);

        TurnosMayor::create([
            "asignacion" => "Devotos / Ana Cecilia",
            "codigo_turno" => "T07",
            "turno" => "Turno 7",
            "direccion" => "De la 5ta Calle a la 6ta Calle sobre la 7ma Avenida",
            "precio" => 30.00,
            "disponibilidad" => 44,
        ]);

        TurnosMayor::create([
            "asignacion" => "Caballeros",
            "codigo_turno" => "Palacio",
            "turno" => "Extraodinario Palacio",
            "direccion" => "De la 7ma Avenida a la 6ta Avenida sobre la 6ta Calle ",
            "precio" => 75.00,
            "disponibilidad" => 44,
        ]);

        TurnosMayor::create([
            "asignacion" => "Mixto",
            "codigo_turno" => "Parques",
            "turno" => "Extraodinario Entre Parques",
            "direccion" => "De la 6ta Calle a la 8va Calle sobre la 6ta Avenida",
            "precio" => 75.00,
            "disponibilidad" => 44,
        ]);

        TurnosMayor::create([
            "asignacion" => "Mixto",
            "codigo_turno" => "Portal",
            "turno" => "Extraodinario Portal",
            "direccion" => "De la 6ta Avenida a la 7ma Avenida sobre la 8va Calle ",
            "precio" => 75.00,
            "disponibilidad" => 44,
        ]);

        TurnosMayor::create([
            "asignacion" => "Caballeros",
            "codigo_turno" => "Catedral",
            "turno" => "Extraodinario Catedral",
            "direccion" => "De la 8va Calle a la 6ta Calle sobre la 7ma Avenida",
            "precio" => 125.00,
            "disponibilidad" => 44,
        ]);

        TurnosMayor::create([
            "asignacion" => "Caballeros Recolección",
            "codigo_turno" => "T12",
            "turno" => "Turno 12",
            "direccion" => "De la 7ma Avenida a la 8va Avenida sobre la 6ta calle",
            "precio" => 30.00,
            "disponibilidad" => 44,
        ]);
        TurnosMayor::create([
            "asignacion" => "Damas Recolección",
            "codigo_turno" => "T13",
            "turno" => "Turno 13",
            "direccion" => "De la 8va Avenida a la 9na Avenida sobre la 6ta Calle",
            "precio" => 30.00,
            "disponibilidad" => 44,
        ]);

        TurnosMayor::create([
            "asignacion" => "Mercado Central Mixto",
            "codigo_turno" => "T14",
            "turno" => "Turno 14",
            "direccion" => "De la 6ta Calle a la 7ma Calle sobre la 9na Avenida",
            "precio" => 30.00,
            "disponibilidad" => 44,
        ]);

        TurnosMayor::create([
            "asignacion" => "La Asunción / Hermandad",
            "codigo_turno" => "T15",
            "turno" => "Turno 15",
            "direccion" => "De la 9na Avenida a la 10ma Avenida sobre la 7ma Calle",
            "precio" => 30.00,
            "disponibilidad" => 44,
        ]);

        TurnosMayor::create([
            "asignacion" => "Caballeros",
            "codigo_turno" => "T16",
            "turno" => "Turno 16",
            "direccion" => "De la 7ma Calle a la 6ta Calle sobre la 10ma Avenida",
            "precio" => 30.00,
            "disponibilidad" => 44,
        ]);

        TurnosMayor::create([
            "asignacion" => "Reservado",
            "codigo_turno" => "T17",
            "turno" => "Turno 17",
            "direccion" => "De la 6ta a la 5ta Calle sobre la 10ma Avenida",
            "precio" => 30.00,
            "disponibilidad" => 44,
        ]);

        TurnosMayor::create([
            "asignacion" => "Mixto",
            "codigo_turno" => "T18",
            "turno" => "Turno 18",
            "direccion" => "De la 10ma Avenida a la 10ma Avenida A sobre la 5ta calle",
            "precio" => 30.00,
            "disponibilidad" => 44,
        ]);

        TurnosMayor::create([
            "asignacion" => "Accion de Gracias Brandon Morales",
            "codigo_turno" => "T19",
            "turno" => "Accion de Gracias Brandon Morales",
            "direccion" => "De la 10ma Avenida A a la 11 Avenida sobre la 5ta Calle",
            "precio" => 30.00,
            "disponibilidad" => 44,
        ]);

        TurnosMayor::create([
            "asignacion" => "Mixto",
            "codigo_turno" => "Merced",
            "turno" => "Extraordinario La Merced",
            "direccion" => "De la 5ta Calle a la 4ta Calle sobre la 11a Avenida",
            "precio" => 75.00,
            "disponibilidad" => 44,
        ]);

        TurnosMayor::create([
            "asignacion" => "Acción de gracias Diego Godoy",
            "codigo_turno" => "T21",
            "turno" => "Accion de Gracias Diego Godoy",
            "direccion" => "De la 4ta Calle a la 3era Calle en la 11 Avenida",
            "precio" => 30.00,
            "disponibilidad" => 44,
        ]);

        TurnosMayor::create([
            "asignacion" => "Accion de gracias Familia Fuentes - Gómez",
            "codigo_turno" => "T22",
            "turno" => "Accion de gracias Familia Fuentes - Gómez",
            "direccion" => "De la 11 Avenida a la 10ma Avenida A sobre la 3ra Calle",
            "precio" => 30.00,
            "disponibilidad" => 44,
        ]);

        TurnosMayor::create([
            "asignacion" => "Caballeros",
            "codigo_turno" => "T23",
            "turno" => "Turno 23",
            "direccion" => "De la 3ra Calle a la 2da Calle sobre la 10ma Avenida A",
            "precio" => 30.00,
            "disponibilidad" => 44,
        ]);

        TurnosMayor::create([
            "asignacion" => "Acción de Gracias Jorge Hernández",
            "codigo_turno" => "T24",
            "turno" => "Turno 24",
            "direccion" => "De la 2da Calle a la 1era Calle sobre la 10ma Avenida A",
            "precio" => 30.00,
            "disponibilidad" => 44,
        ]);

        TurnosMayor::create([
            "asignacion" => "Acción de Gracias Manuel Castellanos",
            "codigo_turno" => "T25",
            "turno" => "Turno 25",
            "direccion" => "De la 1era Calle Zona 1 a la 1era Calle Zona 2 sobre la 10ma Avenida A",
            "precio" => 30.00,
            "disponibilidad" => 44,
        ]);

        TurnosMayor::create([
            "asignacion" => "Beaterío de Belén",
            "codigo_turno" => "T26",
            "turno" => "Turno 26",
            "direccion" => "De la 1era Calle a la 2da Calle sobre la 10ma Avenida A, Zona 2",
            "precio" => 30.00,
            "disponibilidad" => 44,
        ]);

        TurnosMayor::create([
            "asignacion" => "Jesús del Rescate",
            "codigo_turno" => "T27",
            "turno" => "Jesús del Rescate",
            "direccion" => "De la 10ma Avenida A a la 10ma Avenida sobre la 2da Calle Zona 2",
            "precio" => 30.00,
            "disponibilidad" => 44,
        ]);

        TurnosMayor::create([
            "asignacion" => "Acción de gracias Diego Aquino In Memoriam Mary de Lemus",
            "codigo_turno" => "T28",
            "turno" => "Acción de gracias Diego Aquino In Memoriam Mary de Lemus",
            "direccion" => "De la 2da Calle a la 1era Calle sobre la 10ma Avenida Zona 2",
            "precio" => 30.00,
            "disponibilidad" => 44,
        ]);

        TurnosMayor::create([
            "asignacion" => "Deyvis Ochoa",
            "codigo_turno" => "T29",
            "turno" => "Turno 29",
            "direccion" => "De la 1era Calle Zona 2 a la 1era Calle Zona 1 sobre la 10ma Avenida ",
            "precio" => 30.00,
            "disponibilidad" => 44,
        ]);

        TurnosMayor::create([
            "asignacion" => "Mixto",
            "codigo_turno" => "Isabel",
            "turno" => "Extraordinario Parque Isabel la Católica",
            "direccion" => "De la 10ma Avenida a la 9na Avenida sobre la 1era Calle",
            "precio" => 75.00,
            "disponibilidad" => 44,
        ]);

        TurnosMayor::create([
            "asignacion" => "Acción de Gracias Maria Fernanda Cac Hernández",
            "codigo_turno" => "T31",
            "turno" => "Acción de Gracias Maria Fernanda Cac Hernández",
            "direccion" => "De la 1era Calle a la 2da Calle sobre la 9na Avenida",
            "precio" => 30.00,
            "disponibilidad" => 44,
        ]);

        TurnosMayor::create([
            "asignacion" => "Mixto",
            "codigo_turno" => "T32",
            "turno" => "Turno 32",
            "direccion" => "De la 9na Avenida a la 8va Avenida sobre la 2da Calle ",
            "precio" => 30.00,
            "disponibilidad" => 44,
        ]);

        TurnosMayor::create([
            "asignacion" => "In Memoriam Jorge Mario Díaz",
            "codigo_turno" => "T33",
            "turno" => "In Memoriam Jorge Mario Díaz",
            "direccion" => "De la 8va Avenida a la 7ma Avenida sobre la 2da Calle",
            "precio" => 30.00,
            "disponibilidad" => 44,
        ]);

        TurnosMayor::create([
            "asignacion" => "Caballeros",
            "codigo_turno" => "T34",
            "turno" => "Turno 34",
            "direccion" => "De la 2da Calle a la 3ra Calle sobre la 7ma Avenida",
            "precio" => 30.00,
            "disponibilidad" => 44,
        ]);
        
        TurnosMayor::create([
            "asignacion" => "In Memoriam Esposos García Samayoa",
            "codigo_turno" => "T35",
            "turno" => "In Memoriam Esposos García Samayoa",
            "direccion" => "De la 3ra Calle a la 4ta Calle sobre la 7ma Avenida",
            "precio" => 30.00,
            "disponibilidad" => 44,
        ]);

        TurnosMayor::create([
            "asignacion" => "Caballeros",
            "codigo_turno" => "Ex-Entrada",
            "turno" => "Extraordinario de Entrada",
            "direccion" => "De la 7ma Avenida a la 8va Avenida sobre la 4ta Calle",
            "precio" => 50.00,
            "disponibilidad" => 44,
        ]);

        TurnosMayor::create([
            "asignacion" => "Caballeros",
            "codigo_turno" => "Entrada",
            "turno" => "Honor Entrada",
            "direccion" => "De la 8va Avenida y 4ta Calle al Dosel",
            "precio" => 250.00,
            "disponibilidad" => 44,
        ]);
    }
}
