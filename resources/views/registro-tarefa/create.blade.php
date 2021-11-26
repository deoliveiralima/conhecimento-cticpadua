@extends('layout')

@section('conteudo')
  
        <div class="col-6 form-url">
            <form method="POST" action="{{isset($registroTarefa->id) ? '/link/'.$registroTarefa->id : '/link'}}">
                @csrf
                
                @if (isset($registroTarefa->id))
                    @method('PUT')
                @endif

                <label for="tipo_tarefas" class="form-label" >Tipo Tarefa </label>
                <select name="tipo_tarefas" id="tipo_tarefas" class="form-select" aria-label="Default select example">
                  @foreach
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>

                

                <div class="mb-3">
                    <label for="tipo" class="form-label" >Descrição</label>
                    <input type="text" class="form-control" id="tipo" name="tipo" value="{{$registroTarefa->descricao}}">
                </div>

                <div class="mb-3">
                    <label for="url" class="form-label">Motivo</label>
                    <input type="text" class="form-control"  id="nome" name="url"  value="{{$registroTarefa->motivo}}">
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </form>
        </div>

@endsection