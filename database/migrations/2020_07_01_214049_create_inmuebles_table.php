<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInmueblesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inmuebles', function (Blueprint $table) {
            $table->id();
            $table->string('cod_catastral', 20);
            $table->string('estado', 20);
            $table->double('latitud');
            $table->double('longitud');
            $table->string('tipo_calle', 30); //revisar
            $table->string('direccion', 80);
            $table->string('observac_dada', 80)->nullable();
            //pantalla inmueble
            $table->string('categoria', 20);
            $table->string('material_via', 20);
            $table->string('ubicacion', 20);
            $table->boolean('cuadra_alcantar');
            $table->boolean('cuadra_agua');
            $table->boolean('cuadra_luz');
            $table->boolean('cuadra_telefono');
            $table->boolean('cuadra_cable');
            $table->boolean('cuadra_gas');
            $table->double('frente');
            $table->double('fondo');
            $table->string('nro_frentes', 10);
            $table->string('instalac_sanitaria', 30);
            $table->string('topografia', 20);
            $table->string('muros_perim', 20);
            $table->boolean('conex_alcantar');
            $table->boolean('conex_agua');
            $table->boolean('conex_luz');
            $table->boolean('conex_telefono');
            $table->boolean('conex_cable');
            $table->boolean('conex_gas');
            $table->string('edific_espec', 20);
            $table->boolean('espec_aire_acondic');
            $table->boolean('espec_tanq_subterr');
            $table->boolean('espec_tanq_elevado');
            $table->boolean('espec_area_servic');
            $table->boolean('espec_garaje');
            $table->boolean('espec_deposito');
            $table->boolean('mejora_lavanderia');
            $table->boolean('mejora_parrillero');
            $table->boolean('mejora_horno');
            $table->boolean('mejora_piscina');
            $table->boolean('mejora_otros');
            $table->string('uso', 20);
            $table->boolean('acera');
            $table->string('observaciones', 80);
            //documentacion
            $table->double('superfice');
            $table->string('modo_adquisic', 20);
            $table->string('tipo_docum', 30);
            $table->date('fecha_docum');
            $table->integer('nro_ddrr')->nullable();
            $table->date('fecha_ddrr');

            $table->integer('ciudad_id');
            $table->integer('visita_program_id');
            $table->integer('propietario_id')->nullable();
            $table->integer('propietario2_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inmuebles');
    }
}
