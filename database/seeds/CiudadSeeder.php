<?php

use App\Ciudad;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CiudadSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Ciudad::truncate();
    $faker = Faker::create();
    for ($i = 1; $i <= 3; $i++) {
      Ciudad::create(
        [
          'nombre' => $faker->city(),
        ]
      );
    }
  }
}
