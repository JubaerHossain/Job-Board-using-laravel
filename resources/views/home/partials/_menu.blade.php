<div class="menu" style="box-shadow: 0 4px 20px rgba(0, 0, 0, .25);margin: 0px 0px 25px 0px;">
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{route('front.home')}}">
    <img src="{{ asset('logo2.png') }}" alt="logo" class="logo">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavsecond" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavsecond">
    <ul class="navbar-nav ml-auto mr-4">
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Quick View
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Ambassador</a>
          <a class="dropdown-item" href="#">Upcoming Training</a>
          <a class="dropdown-item" href="#">Cv Writing</a>

          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Feedback</a>
        </div>
      </li>
      <li class="nav-item">
        <a href="" class="nav-link active">Contact Us</a>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Login
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ url('/login') }}">Employee</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{ url('/company-login') }}">Company</a>
        </div>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Registration
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ url('/employee-register') }}">Employee</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{ url('/company-register') }}">Company</a>
        </div>
      </li>
      <li class="nav-item active post">
        <a class="nav-link " id="cl-w" href="{{ url('/company-login') }}"><i class="fa fa-briefcase" aria-hidden="true"></i>&nbsp;Post Job</a>
      </li>
    </ul>
  </div>
</nav>
</div>