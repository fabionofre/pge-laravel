<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_usuarios')->insert([
            'desc' => 'advogado'
        ]);
        DB::table('especialidades')->insert([
            'nome' => 'Criminal'
        ]);
        DB::table('especialidades')->insert([
            'nome' => 'Cívil'
        ]);
        DB::table('especialidades')->insert([
            'nome' => 'Família'
        ]);
    }
}
