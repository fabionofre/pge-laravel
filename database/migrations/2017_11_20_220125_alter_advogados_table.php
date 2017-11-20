<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterAdvogadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('advogados', function (Blueprint $table) {
            $table->string('cep', 10);
            $table->string('cidade', 60);
            $table->string('UF', 4);
            $table->string('rua', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('advogados', function (Blueprint $table) {
            $table->dropColumn('cep');
            $table->dropColumn('cidade');
            $table->dropColumn('UF');
            $table->dropColumn('rua');
        });
    }
}
