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
            $table->unsignedInteger('id_est')->nullable();
            $table->foreign('id_est')->references('id')->on('estudiantes');


            $table->string('hospitalarios')->nullable();
            $table->string('traumaticos')->nullable();
            $table->string('psiquiatricos')->nullable();
            $table->string('transfusiones')->nullable();
            $table->string('farmacologicos')->nullable();
            $table->string('toxicos')->nullable();
            $table->string('quirurgicos')->nullable();
            $table->string('patologicos')->nullable();
            $table->string('gine_menarquia')->nullable();
            $table->string('gine_ciclos')->nullable();
            $table->string('gine_FUP')->nullable();
            $table->string('gine_citologicos')->nullable();
            $table->string('gine_planificacion')->nullable();
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
