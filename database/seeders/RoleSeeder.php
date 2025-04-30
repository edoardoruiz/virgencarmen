<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    public function run()
    {
        // Crear roles
        $roleAdmin = Role::create(['name' => 'admin']);
        $roleUser = Role::create(['name' => 'user']);

        // Crear permisos
        $permissionDelete = Permission::create(['name' => 'delete']);
        $permissionExportExcel = Permission::create(['name' => 'export excel']);
        $permissionSellMultipleTurns = Permission::create(['name' => 'sell multiple turns']);

        // Asignar permisos a roles
        $roleAdmin->givePermissionTo($permissionDelete);
        $roleAdmin->givePermissionTo($permissionExportExcel);
        $roleAdmin->givePermissionTo($permissionSellMultipleTurns);
        
    }
}