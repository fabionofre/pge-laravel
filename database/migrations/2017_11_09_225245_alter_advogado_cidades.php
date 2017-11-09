<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterAdvogadoCidades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('advogado_cidades', function (Blueprint $table) {
            $table->integer('cidade_id')->unsigned();
            $table->integer('advogado_id')->unsigned();
            $table->foreign('cidade_id')->references('id')->on('cidades');
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
        //
        Schema::table('advogado_cidades', function (Blueprint $table) {
            $table->dropColumn('cidade_id');
            $table->dropColumn('advogado_id');
            $table->dropForeign(['advogado_id', 'cidade_id']);
        });
    }
}
