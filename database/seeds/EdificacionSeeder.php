<?php

use App\Edificacion;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class EdificacionSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Edificacion::truncate();
    $faker = Faker::create();
    for ($i = 1; $i <= 16; $i++) {
      Edificacion::create([
        'bloque' => $i,
        'piso' => 0,
        'apto' => 0,
        'anio_contrucc' => 1994,
        'tipo_construcc' => $faker->randomElement(['Alero', 'Casa', 'Galeria', 'Otros']),
        'estado_construcc' => $faker->randomElement(['Bueno', 'Regular', 'Mal/Ruinas', 'Afectado']),
        'superficie' => '0.00',
        'evaluacion' => $faker->randomElement(['Marginal', 'Económico', 'Bueno', 'Lujoso']),
        'id_inmueble' => $faker->randomElement([1, 2, 3]),
      ]);
    }
  }
}
