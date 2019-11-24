<nav class="navbar navbar-expand-md bg-light navbar-light">
    <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('images/logo.png') }}"></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="collapsibleNavbar">
  <ul class="navbar-nav ml-auto">
      <li class="nav-item {{ set_active ('/')}}">
        <a class="nav-link scroll" href="{{ url('/') }}">home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item {{ set_active ('About')}}">
        <a class="nav-link scroll" href="{{ url('/') }}">about</a>
      </li>
      <li class="nav-item {{ set_active ('Contact')}}">
        <a class="nav-link scroll" href="{{ url('/') }}">contact</a>
  </ul>
</div>
</nav>
