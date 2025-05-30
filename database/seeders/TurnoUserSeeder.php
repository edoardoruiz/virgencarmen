<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\TurnosMayor;

class TurnoUserSeeder extends Seeder
{
    public function run()
    {
        // Obtener los usuarios del 4 al 15
        $users = User::whereBetween('id', [5, 15])->get();
        
        // Obtener los IDs de los turnos específicos
        $turnosIds = [3,8,9,10,11,14,18,19,20,28,30,31,32,34,35,36];
        
        // Insertar registros para cada usuario y turno específico
        foreach ($users as $user) {
            foreach ($turnosIds as $turnoId) {
                $user->turnos()->attach($turnoId);
            }
        }
    }
}