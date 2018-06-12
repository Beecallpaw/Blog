@extends('layouts.main') 
@section('content') @foreach ($posts as $post)
<div class="row">
  <div class="col-md-6">
    <h1>{{$post->title}}</h1>
    <p>{!! str_limit($post->body, $limit=50, $end=' ... ') !!}</p>
  </div>
</div>
<div class="row">
  <div class="col-md-2">
    <a href="{{route('posts.show',$post->id)}}" class="btn btn-primary btn-block btn-sm">See More</a>
  </div>
</div>
<hr> @endforeach
@endsection