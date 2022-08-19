<?php

use App\Material;
use App\Factor;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class MaterialSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Material::truncate();
    $faker = Faker::create();
    //dd(Factor::all()->random()->pluck('id'));
    for ($i = 1; $i <= 120; $i++) {
      Material::create(
        [
          'nombre' => '',
          'factor_id' => 1,
          //'factor_id' => $faker->randomElement([1, 2, 3, 4, 5, 6]),
          //'factor_id' => $faker->random(Factor::all()->random()->pluck('id')),
        ]
      );
    }
  }
}
