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
            'password' => Hash::make('Mauricio0512'),
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
        $user7 = User::create([
            'name' => 'Priscilla Hernandez',
            'username' => 'priscillahernandez',
            'password' => Hash::make('Priscilla1234'),
        ]);
        $user8 = User::create([
            'name' => 'Estuardo Caballeros',
            'username' => 'estuardocaballeros',
            'password' => Hash::make('Estuardo0410'),
        ]);
        $user9 = User::create([
            'name' => 'Laura Gomar',
            'username' => 'lauragomar',
            'password' => Hash::make('Laura12345'),
        ]);
        $user10 = User::create([
            'name' => 'Carlos Espinoza',
            'username' => 'carlosespinoza',
            'password' => Hash::make('Carlos56789'),
        ]);
        $user11 = User::create([
            'name' => 'Alejandro Armas',
            'username' => 'alejandroarmas',
            'password' => Hash::make('Alejandro12457'),
        ]);
        $user12 = User::create([
            'name' => 'David Cabrera',
            'username' => 'davidcabrera',
            'password' => Hash::make('David23568'),
        ]);
        $user13 = User::create([
            'name' => 'Maria Lau',
            'username' => 'marialau',
            'password' => Hash::make('Maria2612'),
        ]);
        $user14 = User::create([
            'name' => 'Migdalia Paredes',
            'username' => 'migdaliaparedes',
            'password' => Hash::make('Migdalia32659'),
        ]);
        $user15 = User::create([
            'name' => 'Alejandro Arcia',
            'username' => 'alejandroarcia',
            'password' => Hash::make('Alejandro12345'),
        ]);
        $user16 = User::create([
            'name' => 'Alejandra Mencos',
            'username' => 'alejandramencos',
            'password' => Hash::make('Alejandra45632'),
        ]);
        $user17 = User::create([
            'name' => 'Hugo Salinas',
            'username' => 'hugosalinas',
            'password' => Hash::make('Hugo78915'),
        ]);
        $user18 = User::create([
            'name' => 'Maria Jose Rivera',
            'username' => 'mariajoserivera',
            'password' => Hash::make('Mariajose1234'),
        ]);
        $user19 = User::create([
            'name' => 'Yeimi Lopez',
            'username' => 'yeimilopez',
            'password' => Hash::make('Yeimi51715'),
        ]);
        $user20 = User::create([
            'name' => 'Jonathan Cardona',
            'username' => 'jonathancardona',
            'password' => Hash::make('Jonathan74912'),
        ]);

        
        $user1->assignRole('admin'); // Asigna el rol de admin
        $user2->assignRole('admin'); // Asigna el rol de user
        $user3->assignRole('admin'); // Asigna el rol de user
        $user4->assignRole('admin'); // Asigna el rol de user
        $user5->assignRole('user'); // Asigna el rol de user
        $user6->assignRole('user'); // Asigna el rol de user
        $user7->assignRole('user'); // Asigna el rol de user
        $user8->assignRole('user'); // Asigna el rol de user
        $user9->assignRole('user'); // Asigna el rol de user
        $user10->assignRole('user'); // Asigna el rol de user
        $user11->assignRole('user'); // Asigna el rol de user
        $user12->assignRole('user'); // Asigna el rol de user  
        $user13->assignRole('user'); // Asigna el rol de user
        $user14->assignRole('user'); // Asigna el rol de user
        $user15->assignRole('user'); // Asigna el rol de user
        $user16->assignRole('user'); // Asigna el rol de user
        $user17->assignRole('user'); // Asigna el rol de user
        $user18->assignRole('user'); // Asigna el rol de user
        $user19->assignRole('user'); // Asigna el rol de user
        $user20->assignRole('user'); // Asigna el rol de user        
    }
}
