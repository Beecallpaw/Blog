@extends('layouts.main') 
@section('content')
<div class="row">
  <div class="col-md-8">
    <h2>{{$post->title }}</h2>
    <p class="lead">{!!$post->body!!}</p>

  </div>
</div>
<div class="row">
  <div class="col-md-4">
    {!! Html::linkRoute('posts.edit','Edit',[$post->id],['class' =>'btn btn-primary btn-block']) !!}
  </div>
  <div class="col-md-4">
    {!!Form::open(['route'=>['posts.destroy',$post->id],'method'=>'DELETE'])!!}
    {!! Form::submit('Delete', ['class' =>'btn btn-danger btn-block']) !!}
    {!!Form::close() !!}
  </div>
</div>
<br>
<div class="row">
  <div class="offset-md-5"></div>
  <div class="col-md-3">
    Created At : {{date ('M j Y , g:h a', strtotime($post->created_at)) }}
  </div>
</div>
<div class="row">
  <div class="offset-md-5"></div>
  <div class="col-md-3">
    Updated At : {{date ('M j Y , g:h a', strtotime($post->updated_at)) }}
  </div>
</div>
@endsection