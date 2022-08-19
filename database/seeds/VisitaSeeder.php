<?php

use App\VisitaProgram;
use Illuminate\Database\Seeder;

class VisitaSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    VisitaProgram::truncate();
    for ($i = 1; $i <= 3; $i++) {
      VisitaProgram::create([
        'fecha_visita' => date('Y-m-d'),
        'id_user' => 1,
      ]);
    }
  }
}
