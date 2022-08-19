<?php

use App\Inmueble;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class InmuebleSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Inmueble::truncate();
    $faker = Faker::create();
    for ($i = 1; $i <= 10; $i++) {
      Inmueble::create(
        [
          'cod_catastral' => $faker->postcode(),
          'estado' => $faker->randomElement(['Sin Procesar', 'Enviado', 'Rechazado']),
          'latitud' => $faker->latitude($min = -17.766683, $max = -17.7831936),
          'longitud' => $faker->longitude($min = -63.157700, $max = -63.167607),
          'tipo_calle' => $faker->word(),
          'direccion' => $faker->streetAddress(),

          'categoria' => $faker->randomElement(['Casa', 'Edificio', 'Lote']),
          'material_via' => $faker->randomElement(['Asfalto', 'Adoquin', 'Cemento', 'Loseta']),
          'ubicacion' => $faker->randomElement(['Esquina', 'Centro', 'Dos Esquinas', 'Otros']),
          'cuadra_alcantar' => $faker->randomElement([true, $faker->randomElement([true, false])]),
          'cuadra_agua' => $faker->randomElement([true, false]),
          'cuadra_luz' => $faker->randomElement([true, false]),
          'cuadra_telefono' => $faker->randomElement([true, false]),
          'cuadra_cable' => $faker->randomElement([true, false]),
          'cuadra_gas' => $faker->randomElement([true, false]),
          'frente' => $faker->randomElement(['13.37', '12.73']),
          'fondo' => $faker->randomElement(['9.37', '11.37']),
          'nro_frentes' => $faker->randomElement(['1', '2', '3', '4']),
          'instalac_sanitaria' => $faker->randomElement(['Cámara Septica y Pozo', 'Pozo Ciego', 'Letrina', 'No Tiene']),
          'topografia' => $faker->randomElement(['Plano', 'Inclinado', 'Muy Inclinado']),
          'muros_perim' => $faker->randomElement(['Ladrillo', 'Adobe', 'Madera', 'Tapial']),
          'conex_alcantar' => $faker->randomElement([true, false]),
          'conex_agua' => $faker->randomElement([true, false]),
          'conex_luz' => $faker->randomElement([true, false]),
          'conex_telefono' => $faker->randomElement([true, false]),
          'conex_cable' => $faker->randomElement([true, false]),
          'conex_gas' => $faker->randomElement([true, false]),
          'edific_espec' => $faker->randomElement(['Alojamiento', 'Comercial', 'Hotel', 'Restaurante']),
          'espec_aire_acondic' => $faker->randomElement([true, false]),
          'espec_tanq_subterr' => $faker->randomElement([true, false]),
          'espec_tanq_elevado' => $faker->randomElement([true, false]),
          'espec_area_servic' => $faker->randomElement([true, false]),
          'espec_garaje' => $faker->randomElement([true, false]),
          'espec_deposito' => $faker->randomElement([true, false]),
          'mejora_lavanderia' => $faker->randomElement([true, false]),
          'mejora_parrillero' => $faker->randomElement([true, false]),
          'mejora_horno' => $faker->randomElement([true, false]),
          'mejora_piscina' => $faker->randomElement([true, false]),
          'mejora_otros' => $faker->randomElement([true, false]),
          'uso' => $faker->randomElement(['Agricola', 'Comercial', 'Oficina', 'Vivienda']),
          'acera' => $faker->randomElement([true, false]),
          'observaciones' => '',

          'superfice' => '-1',
          'modo_adquisic' => $faker->randomElement(['Adjudicación', 'Dotación', 'Herencia', 'Otros']),
          'tipo_docum' => '',
          'fecha_docum' => date('Y-m-d'),
          'nro_ddrr' => null,
          'fecha_ddrr' => date('Y-m-d'),

          'ciudad_id' => $faker->randomElement([1, 2, 3]),
          'visita_program_id' => $faker->randomElement([1, 2, 3]),
          'propietario_id' => $faker->randomElement([1, 2, 3, null]),
        ]
      );
    }
  }
}
