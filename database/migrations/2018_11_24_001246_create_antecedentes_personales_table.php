<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAntecedentesPersonalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antecedentes_personales', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_est');
            $table->foreign('id_est')->references('id')->on('estudiantes');


            $table->text('hospitalarios')->nullable();
            $table->text('traumaticos')->nullable();
            $table->text('psiquiatricos')->nullable();
            $table->text('transfusiones')->nullable();
            $table->text('farmacologicos')->nullable();
            $table->text('toxicos')->nullable();
            $table->text('quirurgicos')->nullable();
            $table->text('patologicos')->nullable();
            $table->text('gine_menarquia')->nullable();
            $table->text('gine_ciclos')->nullable();
            $table->text('gine_FUP')->nullable();
            $table->text('gine_citologicos')->nullable();
            $table->text('gine_planificacion')->nullable();
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
        Schema::dropIfExists('antecedentes_personales');
    }
}
