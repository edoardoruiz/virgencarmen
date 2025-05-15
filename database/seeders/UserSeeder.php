<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $user1 = User::create([
            'name' => 'Edoardo Ruiz',
            'username' => 'edoardoruiz',
            'password' => Hash::make('Killua2693'),
        ]);

        $user2 = User::create([
            'name' => 'Maria Fernanda Hernandez',
            'username' => 'fernandahernandez',
            'password' => Hash::make('Fernanda1007'),
        ]);
        //
        $user3 = User::create([
            'name' => 'Mauricio Díaz',
            'username' => 'mauriciodiaz',
            'password' => Hash::make('Mauricio1234'),
        ]);

        $user4 = User::create([
            'name' => 'Alan Cac',
            'username' => 'alancac',
            'password' => Hash::make('Alan1508'),
        ]);

        $user5 = User::create([
            'name' => 'Fabiola Leal',
            'username' => 'fabiolaleal',
            'password' => Hash::make('Faby2610'),
        ]);

        $user6 = User::create([
            'name' => 'Paola Hernandez',
            'username' => 'paolahernandez',
            'password' => Hash::make('Paola2910'),
        ]);
        
        $user1->assignRole('admin'); // Asigna el rol de admin
        $user2->assignRole('admin'); // Asigna el rol de user
        $user3->assignRole('admin'); // Asigna el rol de user
        $user4->assignRole('admin'); // Asigna el rol de user
        $user5->assignRole('user'); // Asigna el rol de user
        $user6->assignRole('user'); // Asigna el rol de user


    }
}
