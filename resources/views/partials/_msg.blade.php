@if (Session::has('success'))
  <div class="alert alert-success" role="alert">{{Session::get('success')}}</div>
@endif
@if (Session::has('delete'))
  <div class="alert alert-danger" role="alert">{{Session::get('delete')}}</div>
@endif
@if (count($errors)>0)
<div class="alert alert-danger" role="alert">
  @foreach ($errors->all() as $error)
  <h4>{{$error}}</h4>
  @endforeach
</div>
@endif