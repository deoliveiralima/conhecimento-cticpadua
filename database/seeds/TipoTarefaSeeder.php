<?php

use Illuminate\Database\Seeder;

class TipoTarefaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_tarefas')->insert([
            'nome' => 'Movimentação de material'
        ]);
        DB::table('tipo_tarefas')->insert([
            'nome' => 'Pfsense'
        ]);
        DB::table('tipo_tarefas')->insert([
            'nome' => 'Manuteção'
        ]);
        //
    }
}
