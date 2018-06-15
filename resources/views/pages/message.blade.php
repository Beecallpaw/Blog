@extends('layouts.main') 
@section('content') @if (auth()->user()->admin == 1) @foreach ($messages as $msg)
<ul>
  <li>
    <h2>Email: {{$msg->email}}</h2>
  </li>
  <li>
    <h4>Message: {{$msg->txt}}</h4>
  </li>
</ul>
@endforeach @else
<div>You are Normal User</div>
@endif
@endsection