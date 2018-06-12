@extends('layouts.main') 
@section('content')
<div class="row">
  {!!Form::model($post,['route'=>['posts.update', $post->id],'method'=>'PUT']) !!}
  <div class="col-md-8">
    {{Form::label('title', 'Title:' )}} 
    {{Form::text('title',null,['class'=>'form-control']) }} 
    {{Form::label('body', 'Body:')}}
    {{Form::textarea('body',null,['class'=>'form-control', 'rows'=>'8','cols'=>'80'])}}
  </div>
  <br>
  <div class="row">
    <div class="col-md-3">
        {{Form::submit('Save',['class' =>'btn btn-primary btn-block'])}}
    </div>
    <div class="col-md-3">
      {!! Html::linkRoute('posts.show','Cancel',[$post->id],['class' =>'btn btn-secondary btn-block']) !!}
    </div>
  </div>
  {!!Form::close()!!}
</div>
@endsection