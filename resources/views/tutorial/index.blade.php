@extends('layout')
@section('conteudo')
<a class="btn btn-primary add-link" href="/tutorial/create" role="button">Adicionar</a> 
        <div class="col-6">
            <ul>
            @foreach ($tutoriais as $tutorial)
                <li> 
                    <a href="/tutorial/{{$tutorial->id}}"> {{$tutorial->titulo}}</a> 
                    <a href="/tutorial/{{$tutorial->id}}/edit" class="icon"> <span class="material-icons">edit</span> </a>  
                    <a href="/tutorial/{{$tutorial->id}}/delete" class="icon"><span class="material-icons" onclick="return confirm('Você tem certeza que deseja excluir este link');"> delete </span> </a>
                </li>
                
            @endforeach
            </ul>
        </div>

@stop