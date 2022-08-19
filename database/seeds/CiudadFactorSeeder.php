<?php

use App\CiudadFactor;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CiudadFactorSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    CiudadFactor::truncate();
    $faker = Faker::create();
    for ($i = 1; $i <= 15; $i++) {
      CiudadFactor::create(
        [
          'ciudad_id' => 1,
          'factor_id' => $i,
        ]
      );
    }
  }
}
