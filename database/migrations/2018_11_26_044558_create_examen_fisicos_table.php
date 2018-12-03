<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamenFisicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examen_fisicos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_est')->nullable();
            $table->foreign('id_est')->references('id')->on('estudiantes');

            $table->string('p_cadera')->nullable();
            $table->string('p_cintura')->nullable();
            $table->string('pulso')->nullable();
            $table->string('cabeza')->nullable();
            $table->string('ojos')->nullable();
            $table->string('agudeza_visual')->nullable();
            $table->string('fondo_ojo')->nullable();
            $table->string('oidos')->nullable();
            $table->string('nariz')->nullable();
            $table->string('boca')->nullable();
            $table->string('cuello')->nullable();
            $table->string('cardiopulmonar')->nullable();
            $table->string('abdomen')->nullable();
            $table->string('piel')->nullable();
            $table->string('genitales')->nullable();
            $table->string('extrem_columna')->nullable();
            $table->string('neurologicos_pares')->nullable();
            $table->string('motor_cord_fuerza')->nullable();
            $table->string('motor_cord_tono')->nullable();
            $table->string('sensib_supe_conservado')->nullable();
            $table->string('sensib_prof_conservada')->nullable();
            $table->string('sensib_discriminativa')->nullable();
            $table->string('cutaneos')->nullable();
            $table->string('reflejos')->nullable();
            $table->string('miotacticos')->nullable();
            $table->string('patologicos')->nullable();
            $table->string('peso')->nullable();
            $table->string('talla')->nullable();
            $table->string('IMC')->nullable();
            $table->string('indice_cc')->nullable();
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
        Schema::dropIfExists('examen_fisicos');
    }
}
