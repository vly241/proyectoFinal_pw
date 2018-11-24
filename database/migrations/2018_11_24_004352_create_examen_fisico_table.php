<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamenFisicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examen_fisico', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_est');
            $table->foreign('id_est')->references('id')->on('estudiantes');

            $table->text('p_cadera');
            $table->text('p_cintura');
            $table->text('pulso');
            $table->text('cabeza');
            $table->text('ojos');
            $table->text('agudeza_visual');
            $table->text('fondo_ojo');
            $table->text('oidos');
            $table->text('nariz');
            $table->text('boca');
            $table->text('cuello');
            $table->text('cardiopulmonar');
            $table->text('abdomen');
            $table->text('piel');
            $table->text('genitales');
            $table->text('extrem_columna');
            $table->text('neurologicos_pares');
            $table->text('motor_cord_fuerza');
            $table->text('motor_cord_tono');
            $table->text('sensib_supe_conservado');
            $table->text('sensib_prof_conservada');
            $table->text('sensib_discriminativa');
            $table->text('cutaneos');
            $table->text('reflejos');
            $table->text('miotacticos');
            $table->text('patologicos');
            $table->text('peso');
            $table->text('talla');
            $table->text('IMC');
            $table->text('indice_cc');

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
        Schema::dropIfExists('examen_fisico');
    }
}
