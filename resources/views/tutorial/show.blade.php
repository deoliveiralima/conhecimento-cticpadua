@extends('layout')
@section('conteudo')
  
        <p class="h2"> {{$tutorial->titulo}}</p>

        <div>
            {{!! $tutorial->texto !!}}
        </div>

@stop