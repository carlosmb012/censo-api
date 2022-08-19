<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropietariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propietarios', function (Blueprint $table) {
            $table->id();
            $table->string('tipo', 20);
            $table->string('primer_nombre', 20)->nullable();
            $table->string('segundo_nombre', 20)->nullable();
            $table->string('primer_apellido', 20)->nullable();
            $table->string('segundo_apellido', 20)->nullable();
            $table->string('ci', 10)->nullable();
            $table->string('expedido', 20)->nullable();
            $table->string('personeria', 20)->nullable();
            $table->string('razon_social', 20)->nullable();
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
        Schema::dropIfExists('propietarios');
    }
}
