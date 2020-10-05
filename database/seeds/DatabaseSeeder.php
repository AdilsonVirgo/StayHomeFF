<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {

        $this->call(RolPermissionSeeder::class);
        $this->call(UserSeeder::class);$this->call(ProvinciaSeeder::class);
        $this->call(ServicioSeeder::class);
        $this->call(MercadoSeeder::class);
        $this->call(AgenciaSeeder::class);
        $this->call(EcuestreSeeder::class);
        $this->call(EventoSeeder::class);
        $this->call(ExcursionSeeder::class);
        $this->call(GastronomiaSeeder::class);
        $this->call(NacSeeder::class);
        $this->call(UebSeeder::class);
    }
}
