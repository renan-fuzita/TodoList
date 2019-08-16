@extends('layouts.app')

@section('content')
    <h1>Create Todo</h1>
    <!-- It will submit the information to TodosController where the function is store-->
    {!! Form::open(['action' => 'TodosController@store','method' => 'POST']) !!}
        {{Form::bsText('text')}} 
        <!-- text is the column`s name of the DB table-->
        {{Form::bsTextArea('body')}} 
        {{Form::bsText('due')}} 
        {{Form::bsSubmit('submit',['class'=>'btn btn-primary'])}} 
    <!--{ {Form::bs(document.blade.php)('DB:column')}}             -->
    {!! Form::close() !!}
@endsection