<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEdificacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('edificacions', function (Blueprint $table) {
            $table->id();
            $table->smallInteger('bloque');  
            $table->smallInteger('piso');  
            $table->smallInteger('apto');  
            $table->smallInteger('anio_contrucc');  
            $table->string('tipo_construcc', 20);  
            $table->string('estado_construcc', 20);  
            $table->double('superficie');
            $table->string('evaluacion', 20);  
            $table->Integer('id_inmueble');  
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
        Schema::dropIfExists('edificacions');
    }
}
