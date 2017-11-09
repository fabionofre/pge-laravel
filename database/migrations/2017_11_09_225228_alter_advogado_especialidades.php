<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterAdvogadoEspecialidades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('advogado_especialidades', function (Blueprint $table) {
            $table->integer('especialidade_id')->unsigned();
            $table->integer('advogado_id')->unsigned();
            $table->foreign('especialidade_id')->references('id')->on('especialidades');
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
        Schema::table('advogado_especialidades', function (Blueprint $table) {
            $table->dropColumn('especialidade_id');
            $table->dropColumn('advogado_id');
            $table->dropForeign(['advogado_id', 'especialidade_id']);
        });
    }
}
