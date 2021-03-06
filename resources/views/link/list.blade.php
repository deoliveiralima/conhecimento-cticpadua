@extends('layout')

@section('conteudo')

<a class="btn btn-primary add-link" href="/link/create" role="button">Adicionar</a> 
    <ul> 
        
        @foreach ($links as $link)
           
                <li> 

                    <div class="container">
                        <div class="row">
                          <div class="col">
                            <p class="h3"> {{$link->nome}}: </p> 
                            <a href= '{{$link->url}}'>  {{$link->url}} </a> 
                          </div>
                          <div class="col">
                            <a href="/link/{{$link->id}}/edit" class="icon"> <span class="material-icons">edit</span> </a>  
                            <a href="/link/{{$link->id}}/delete" class="icon"><span class="material-icons" 
                                onclick="return confirm('Você tem certeza que deseja excluir este link');"> delete </span> </a>
                          </div>
                        </div>
                      </div>
                    
                    
                </li>
         
            
        @endforeach
    </ul>
    
@endsection

<script>

</script>