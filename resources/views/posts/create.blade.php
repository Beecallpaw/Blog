@extends('layouts.main') 
@section('content')
<div class="row">
  <div class="col-md-8 offset-md-2">
    <h1>Create a new Post</h1>
    <hr> {!! Form::open(['route' => 'posts.store']) !!} {!! Form::label('title','Title : ') !!} {!! Form::text('title', null,
    ['class'=>'form-control'])!!} {!!Form::label('body','Body : ')!!} {!!Form::textArea('body',null,['class'=>'form-control'])!!}
    <br> {!! Form::submit('Add a Blog',['class'=>'btn btn-success'])!!} {!! Form::close() !!}
  </div>
</div>
@endsection