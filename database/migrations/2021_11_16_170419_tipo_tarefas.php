<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TipoTarefas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('tipo_tarefas', function (Blueprint $table) {
            $table->id();
            $table->string('nome')->nullable(false);
            $table->unsignedBigInteger('registro_tarefa_id');
            $table->foreign('registro_tarefa_id')->references('id')->on('registro_tarefas');
            $table->timestamps(); 
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
        Schema::dropIfExists('tipo_tarefas');
        //
    }
}
