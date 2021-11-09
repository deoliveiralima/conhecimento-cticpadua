@extends('layout')
@section('conteudo')
  
        <div class="col-6">
            @foreach ($link as $link)
                
                <p>This is user {{ $user->id }}</p>
            @endforeach
            
        </div>

@stop