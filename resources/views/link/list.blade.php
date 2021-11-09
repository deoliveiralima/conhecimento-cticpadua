@extends('layout')

@section('conteudo')

<a class="btn btn-primary add-link" href="/link/create" role="button">Adicionar</a> 
    <ul> 
        @foreach ($links as $link)
            
                <li> 
                    <p class="h3"> {{$link->nome}}: </p> 
                    <a href= '{{$link->url}}'> {{$link->url}} </a> 
                    <a href="/link/{{$link->id}}/edit" class="icon"> <span class="material-icons">edit</span> </a>  
                    <a href="/link/{{$link->id}}" class="icon"><span class="material-icons"> delete </span> </a>
                </li>
         
            
        @endforeach
    </ul>
    
@endsection