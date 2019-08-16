@extends('layouts.app')

@section('content')
     <a class="btn btn-default" href="/">Go Back</a>
     <h1><a href="/todo/{{$todo->id}}">{{$todo->text}}</a></h1>
     <div class="label" style="background: #cc5200;width:20%;text-align:center;color:white;">{{$todo->due}}</div>
     <hr>
     <p>{{$todo->body}}</p>
     <br/><br/>
     <a href="/todo/{{$todo->id}}/edit" class="btn btn-default">Edit</a>
      <!-- A diferenca entre chamar o metodo show e o edit e que apos o ID nos passamos /edit -->

     {!! Form::open(['action' => ['TodosController@destroy',$todo->id],'method' => 'POST','class'=>'float-right']) !!}
     <!-- Because we cant use DELETE insted POST abouve we create a hidden DELETE-->
        {{Form::hidden('_method','DELETE')}}
     
        {{Form::bsSubmit('delete',['class'=>'btn btn-danger'])}} 
     {!! Form::close() !!}



@endsection<span class="label label-danger">
<!-- 

   href="/todo"                                                                  chama o index
   href="/todo/{ {todo->id}}"                                                    chama o show
   href="/todo/{ {todo->id}}/edit"                                               chama o edit
   href="/todo/create"                     

   Form::open(['action'=>['CONTROLLER@FUNCTION','var->id'],'method'=>'POST']);   chama DELETE ou EDIT
   Form::hidden('_method','DELETE ou PUT');                                      DELETE p delete e PUT
                                                                                 p edit

   Form::open(['action' => 'TodosController@store','method' => 'POST'])          chama o store para criar

   Form::open(['url' => 'blade_name/submit'])




   INDEX function mostra o conteudo                       
   CREATE function direciona para o blade todos.create

   STORE function preenche o DB (cria posts)                                  Parecidos 
   UPDATE function busca o ID e as info do INPUT passado por REQUEST. No final atualiza

   SHOW function busca as informacoes do ID passado e mostra                 iguais c/ a diferenca o view
   EDIT functon busca as informacoes do ID passado e mostra                  iguais c/ a diferenca o view

   
   DESTROY funtion busca o ID e apaga do DB 

-->
        