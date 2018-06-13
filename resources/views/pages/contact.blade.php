@extends('layouts.main') 
@section('content')
<h1>Contact me Here</h1>
<div class="row">
  <div class="col-md-8">
{{ Form::open(array('url' => 'contact/submit')) }}
 {{Form::label('email', 'Email Address:' )}} 
    {{Form::text('email',null,['class'=>'form-control']) }}
 {{Form::label('password', 'Password:' )}} 
    {{Form::text('password',null,['class'=>'form-control']) }}
      {{Form::label('txt', 'Enter Message:')}}
    {{Form::textarea('txt',null,['class'=>'form-control', 'rows'=>'8','cols'=>'80'])}}
  </div>
</div>
    <br>
    <div class="row">
      <div class="col-md-3">
        {{Form::submit('Submit',['class' =>'btn btn-primary btn-block'])}}
      </div>
    </div>
    {{ Form::close() }}
@endsection