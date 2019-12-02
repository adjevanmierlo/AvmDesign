<nav class="navbar fixed-top navbar-expand-md bg-light navbar-light">
    <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('images/logo.png') }}"></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="collapsibleNavbar">
  <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/') }}">home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/#section2') }}">about</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/#section3') }}">contact</a>
      </li>
  </ul>
</div>
</nav>


{{-- {{ set_active ('/')}}" --}}
