@extends('layouts.main')
@section('content')
@foreach ($messages as $msg)
  <ul>
  <li><h2>Email: {{$msg->email}}</h2></li>
  <li><h4>Message: {{$msg->txt}}</h4></li>
  </ul>
@endforeach
    
@endsection