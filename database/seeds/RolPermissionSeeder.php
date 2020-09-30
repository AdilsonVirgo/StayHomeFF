<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolPermissionSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        //  Permissions of Home
        Permission::create(['name' => 'HomePermission']);
        Permission::create(['name' => 'ReservasPermission']);
        Permission::create(['name' => 'ReportesPermission']);
        Permission::create(['name' => 'ServiciosPermission']);
        Permission::create(['name' => 'OtrosPermission']);

        //Rol Creation SuperAdmin-Admin-Advanced-Normal-Limited-Viewer//5niveles+SuperAdmin
        $role = Role::create(['name' => 'SuperAdmin']);
        $role->givePermissionTo(Permission::all());

        $roleAdmin = Role::create(['name' => 'Admin']);
        $roleAdmin->givePermissionTo(['HomePermission', 'ReservasPermission', 'ReportesPermission', 'ServiciosPermission', 'OtrosPermission']);

        $roleAdvanced = Role::create(['name' => 'Advanced']);
        $roleAdvanced->givePermissionTo(['HomePermission', 'ReportesPermission', 'ServiciosPermission', 'OtrosPermission']);

        $roleNormal = Role::create(['name' => 'Normal']);
        $roleNormal->givePermissionTo(['HomePermission', 'ReportesPermission', 'OtrosPermission']);

        $roleLimited = Role::create(['name' => 'Limited']);
        $roleLimited->givePermissionTo(['HomePermission', 'OtrosPermission']);

        $roleViewer = Role::create(['name' => 'Viewer']);
        $roleViewer->givePermissionTo(['HomePermission']);
    }

}
