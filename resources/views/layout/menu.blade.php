<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{ url('/') }}"><img src = "{{ asset('image/design.jpg') }}" style="height: 50px; width: 50px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/') }}">HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('service') }}">SERVICE</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('portfolio') }}">PORTFOLIO</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('about') }}">ABOUT</a>
      </li>
    </ul>
  </div>
</nav>
