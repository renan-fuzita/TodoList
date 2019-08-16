@extends('layouts.app')

@section('content')
    <a class="btn btn-default" href="/todo/{{$todo->id}}">Go Back</a>
    <h1>Edit Todo</h1>
    <!-- The ID wes passed by the previus page and you can catch it with $todo->id -->
    {!! Form::open(['action' => ['TodosController@update',$todo->id],'method' => 'POST']) !!}
        {{Form::bsText('text',$todo->text)}}
    <!-- It`ll collect the value inserted into the input and display the DB current values -->
        {{Form::bsTextArea('body',$todo->body)}} 
        {{Form::bsText('due',$todo->due)}} 
        {{Form::hidden('_method','PUT')}} 
        {{Form::bsSubmit('submit',['class'=>'btn btn-primary'])}} 
    
    {!! Form::close() !!}
@endsection