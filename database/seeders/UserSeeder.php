<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $admin = User::find(1); // Obtén al usuario admin
        $admin->assignRole('admin'); // Asigna el rol de admin

        $user = User::find(2); // Obtén al usuario regular
        $user->assignRole('admin'); 
        
        $user = User::find(3); // Obtén al usuario regular
        $user->assignRole('admin'); // Asigna el rol de user

        $user = User::find(4); // Obtén al usuario regular
        $user->assignRole('admin'); // Asigna el rol de user

        $user = User::find(5); // Obtén al usuario regular
        $user->assignRole('user'); // Asigna el rol de user

        $user = User::find(6); // Obtén al usuario regular
        $user->assignRole('user'); // Asigna el rol de user

        $user = User::find(7); // Obtén al usuario regular
        $user->assignRole('user'); // Asigna el rol de user
        
        $user = User::find(8); // Obtén al usuario regular
        $user->assignRole('user'); // Asigna el rol de user
        
        $user = User::find(9); // Obtén al usuario regular
        $user->assignRole('user'); // Asigna el rol de user

        $user = User::find(10); // Obtén al usuario regular
        $user->assignRole('user'); // Asigna el rol de user

        $user = User::find(11); // Obtén al usuario regular
        $user->assignRole('user'); // Asigna el rol de user

        $user = User::find(12); // Obtén al usuario regular
        $user->assignRole('user'); // Asigna el rol de user

        $user = User::find(13); // Obtén al usuario regular
        $user->assignRole('user'); // Asigna el rol de user

        $user = User::find(14); // Obtén al usuario regular
        $user->assignRole('user'); // Asigna el rol de user

        $user = User::find(15); // Obtén al usuario regular
        $user->assignRole('user'); // Asigna el rol de user
    }
}
