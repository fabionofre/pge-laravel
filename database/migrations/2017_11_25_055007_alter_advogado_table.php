<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterAdvogadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('advogados', function (Blueprint $table) {
            $table->string('rg', 60);
            $table->string('cpf', 15);
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
            $table->dropColumn('rg');
            $table->dropColumn('cpf');
        });
    }
}
