@extends('layouts.app')

@section('content')
<h1>Todos</h1>
 
@if(count($todos))
    @foreach($todos as $todo)
        <div class="card">
            <h3><a href="todo/{{$todo->id}}">{{$todo->text}}</a>
               <span class="btn btn-warning" style="background: #cc5200;width:20%;text-align:center;color:white;">{{$todo->due}}
               </span>
            </h3>
            <!-- A cada loop um ID diferente e adicionado ao h3 novo
                 o href passa o ID do objeto clicado p o METODO show() em TodosController
                 o metodo show recebe o ID procura no DB pelas informacoes deste ID e 
                 mostra na pagina seguinte
            -->
        </div>
    @endforeach
@endif
@endsection