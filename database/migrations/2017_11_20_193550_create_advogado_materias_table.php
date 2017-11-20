<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvogadoMateriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advogado_materias', function (Blueprint $table) {
            $table->integer('materia_id')->unsigned();
            $table->integer('advogado_id')->unsigned();
            $table->foreign('materia_id')->references('id')->on('materias');
            $table->foreign('advogado_id')->references('id')->on('advogados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('advogado_materias');
    }
}
