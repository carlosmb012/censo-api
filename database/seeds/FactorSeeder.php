<?php

use App\Factor;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class FactorSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Factor::truncate();
    $faker = Faker::create();
    for ($i = 1; $i <= 15; $i++) {
      Factor::create(
        [
          'nombre' => $faker->word(),
        ]
      );
    }
  }
}
