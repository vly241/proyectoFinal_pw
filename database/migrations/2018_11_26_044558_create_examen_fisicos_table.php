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

            $table->text('p_cadera')->nullable();
            $table->text('p_cintura')->nullable();
            $table->text('pulso')->nullable();
            $table->text('cabeza')->nullable();
            $table->text('ojos')->nullable();
            $table->text('agudeza_visual')->nullable();
            $table->text('fondo_ojo')->nullable();
            $table->text('oidos')->nullable();
            $table->text('nariz')->nullable();
            $table->text('boca')->nullable();
            $table->text('cuello')->nullable();
            $table->text('cardiopulmonar')->nullable();
            $table->text('abdomen')->nullable();
            $table->text('piel')->nullable();
            $table->text('genitales')->nullable();
            $table->text('extrem_columna')->nullable();
            $table->text('neurologicos_pares')->nullable();
            $table->text('motor_cord_fuerza')->nullable();
            $table->text('motor_cord_tono')->nullable();
            $table->text('sensib_supe_conservado')->nullable();
            $table->text('sensib_prof_conservada')->nullable();
            $table->text('sensib_discriminativa')->nullable();
            $table->text('cutaneos')->nullable();
            $table->text('reflejos')->nullable();
            $table->text('miotacticos')->nullable();
            $table->text('patologicos')->nullable();
            $table->text('peso')->nullable();
            $table->text('talla')->nullable();
            $table->text('IMC')->nullable();
            $table->text('indice_cc')->nullable();
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
