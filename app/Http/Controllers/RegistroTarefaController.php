<?php

namespace App\Http\Controllers;

use App\RegistroTarefa;
use App\TipoTarefa;
use Illuminate\Http\Request;

class RegistroTarefaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('registro-tarefa.list');
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        $registroTarefa = App\TipoTarefa::has('tipotarefas')->get();
        dd($registroTarefa);
       // return view("registro-tarefa.create", ["registroTarefa"=>$registroTarefa]);
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'tipo' => 'required',
            'descricao' => 'required',
        ]);

        $tarefa = $request->all();

        $tarefa->save();

        return redirect('/registro-tarefas');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RegistroTarefa  $registroTarefa
     * @return \Illuminate\Http\Response
     */
    public function show(RegistroTarefa $registroTarefa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RegistroTarefa  $registroTarefa
     * @return \Illuminate\Http\Response
     */
    public function edit(RegistroTarefa $registroTarefa)
    {
        return view('registro-terefa.create', ['tarefa' => $registroTarefa]);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RegistroTarefa  $registroTarefa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RegistroTarefa $registroTarefa)
    {
        $request->validate ([
            'tipo' => 'required',
            'descricao' => 'required',
        ]);
        
        $tarefa->save();

        return redirect('/registro-tarefas');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RegistroTarefa  $registroTarefa
     * @return \Illuminate\Http\Response
     */
    public function destroy(RegistroTarefa $registroTarefa)
    {
        $registroTarefa->destroy();
        //
    }
}
