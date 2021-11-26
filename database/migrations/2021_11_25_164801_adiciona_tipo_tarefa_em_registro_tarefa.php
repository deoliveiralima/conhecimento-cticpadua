<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AdicionaTipoTarefaEmRegistroTarefa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('registro_tarefas', function (Blueprint $table) {
            $table->unsignedBigInteger('tipo_tarefa_id');
            $table->foreign('tipo_tarefa_id')->references('id')->on('tipo_tarefas');
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('registro_tarefas', function (Blueprint $table) {
            $table->dropColumn('tipo_tarefa_id');
        });

        //
    }
}
