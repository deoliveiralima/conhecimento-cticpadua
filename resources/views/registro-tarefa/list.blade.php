@extends('layout')

@section('conteudo')
  
       <table class="table table-bodered">
           <thead>
               <tr>
                   <th>Descrição</th>
                   <th>Motivo</th>
                   <th>Tipo</th>
               </tr>
           </thead>
           <tbody>
            @if(isset($registroTarefa))
            {{dd($registroTarefa)}}
             @foreach($registroTarefa as $registro)
             {{ ($registro->registroTarefa)}}
               <tr>
                   
                    <td> {{$registro->registroTarefa}} </td>
                    <td> {{$registro->registroTarefa}} </td>
                    <td> {{$registro->registroTarefa}} </td>
                    
               </tr>
                @endforeach
               @endif
           </tbody>
       </table>

@endsection