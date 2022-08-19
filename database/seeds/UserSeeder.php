<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    User::truncate();
    User::create([
      'nombre' => 'Christian Martinez',
      'name' => 'Prueba',
      //'email' => 'prueba@gmail.com',
      'password' => Hash::make('123456'),
      'estado' => 1,
      'id_ciudad' => 1,
    ]);
    User::create([
      'nombre' => 'Christian Martinez S.',
      'name' => 'Prueba1',
      //'email' => 'prueba@gmail.com',
      'password' => Hash::make('123456'),
      'estado' => 1,
      'id_ciudad' => 2,
    ]);
  }
}
