<!doctype html>
<html lang="en">
  @include('partials._head')

<body>
  @include('partials._navbar')
  <div class="container">
  @include('partials._msg') @yield('content')
  </div>
  @include('partials._scripts')
</body>

</html>