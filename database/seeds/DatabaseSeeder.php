<?php

use App\Edificacion;
use App\Propietario;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(CiudadSeeder::class);
        $this->call(FactorSeeder::class);
        $this->call(VisitaSeeder::class);
        $this->call(InmuebleSeeder::class);
        $this->call(PropietarioSeeder::class);
        //$this->call(EdificacionSeeder::class);
        $this->call(FactorSeeder::class);
        $this->call(MaterialSeeder::class);
        $this->call(CiudadFactorSeeder::class);
    }
}
