<!DOCTYPE html>
<html lang="en">
@include("partials.header")
  <body>
  @include("partials.nav")
  <div class="container">
    @yield('content')
    @include("partials.footer")
  </div>
  @include('partials.javascript')
  </body>
</html>
