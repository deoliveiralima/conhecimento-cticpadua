@extends('layout')

@section('conteudo')
  
        <div class="col-6 form-url">
            <form method="POST" action="{{isset($registroTarefa->id) ? '/registro-tarefa/'.$registroTarefa->id : '/registro-tarefa'}}">
                @csrf
                
                @if (isset($registroTarefa->id))
                    @method('PUT')
                @endif

                <label for="tipo_tarefas" class="form-label" >Tipo Tarefa </label>
                <select name="tipo_tarefa" id="tipo_tarefa"  class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                    @foreach ($tiposTarefa as $tipoTarefa)
                    <option value="{{$tipoTarefa->id}}">{{$tipoTarefa->nome}}</option>  
                    @endforeach
                </select>

                

                <div class="mb-3">
                    <label for="tipo" class="form-label" >Descrição</label>
                    <input type="text" class="form-control" id="descricao" name="descricao" value="{{$registroTarefa->descricao}}" >
                </div>
                @error('descricao')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="mb-3">
                    <label for="url" class="form-label">Motivo</label>
                    <input type="text" class="form-control"  id="motivo" name="motivo"  value="{{$registroTarefa->motivo}}" >
                </div>
                @error('motivo')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <button type="submit" class="btn btn-primary">Salvar</button>
            </form>

        </div>

@endsection