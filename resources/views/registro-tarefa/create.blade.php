@extends('layout')

@section('conteudo')
  
        <div class="col-6 form-url">
            <form method="POST" action="{{isset($registroTarefa->id) ? '/link/'.$registroTarefa->id : '/link'}}">
                @csrf
                
                @if (isset($registroTarefa->id))
                    @method('PUT')
                @endif

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="tipo" id="tipo1" value="">
                    <label class="form-check-label" for="tipo1">
                     Movimentação de material
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="tipo" id="tipo2">
                    <label class="form-check-label" for="tipo2">
                      PFsense
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="tipo" id="tipo3">
                    <label class="form-check-label" for="tipo3">
                      Manuteção
                    </label>
                  </div>

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