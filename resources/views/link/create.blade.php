@extends('layout')
@section('conteudo')
  
        <div class="col-6 form-url">
            <form method="POST" action="/link">
                @csrf

                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome">
                </div>

                <div class="mb-3">
                    <label for="url" class="form-label">URL</label>
                    <input type="text" class="form-control"  id="nome" name="url" >
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </form>
        </div>

@stop