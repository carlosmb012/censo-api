<?php

use App\Propietario;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PropietarioSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Propietario::truncate();
    $faker = Faker::create();
    for ($i = 1; $i <= 3; $i++) {
      Propietario::create([
        'tipo' => $faker->randomElement(['Propietario', 'Poseedor', 'Ocupante']),
        'primer_nombre' => $faker->firstName(),
        'segundo_nombre' => $faker->firstName(),
        'primer_apellido' => $faker->lastName(),
        'segundo_apellido' => $faker->lastName(),
        'ci' => $faker->postcode(),
        'expedido' => $faker->randomElement(['COCHABAMBA', 'ORURO', 'TARIJA', 'EXTRANJERO']),
      ]);
    }
  }
}
