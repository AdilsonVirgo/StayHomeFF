<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        //
        $userSuperAdmin = User::create(['name' => "SuperAdmin", 'email' => "superadmin@superadmin.com", 'password' => Hash::make('123456789') ]);
        $userSuperAdmin->assignRole('SuperAdmin');

        $userAdmin = User::create(['name' => "Admin", 'email' => "admin@admin.com", 'password' => Hash::make('123456789') ]);
        $userAdmin->assignRole('Admin');

        $userAdvanced = User::create(['name' => "Advanced", 'email' => "advanced@advanced.com", 'password' => Hash::make('123456789') ]);
        $userAdvanced->assignRole('Advanced');

        $userNormal = User::create(['name' => "Normal", 'email' => "normal@normal.com", 'password' => Hash::make('123456789') ]);
        $userNormal->assignRole('Normal');

        $userLimited = User::create(['name' => "Limited", 'email' => "limited@limited.com", 'password' => Hash::make('123456789')]);
        $userLimited->assignRole('Limited');

        $userViewer = User::create(['name' => "Viewer", 'email' => "viewer@viewer.com", 'password' => Hash::make('123456789') ]);
        $userViewer->assignRole('Viewer');
    }

}
