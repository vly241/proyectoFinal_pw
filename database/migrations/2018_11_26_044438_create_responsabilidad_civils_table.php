<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResponsabilidadCivilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responsabilidad_civils', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_est');
            $table->foreign('id_est')->references('id')->on('estudiantes');

            $table->boolean('estado');
            $table->text('anexo');
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
        Schema::dropIfExists('responsabilidad_civils');
    }
}
