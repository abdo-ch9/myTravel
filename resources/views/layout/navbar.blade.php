<header id="site-header" class="w3lhny-head fixed-top">

  <div class="container">
    <nav class="navbar navbar-expand-lg stroke px-0">
      <a class="navbar-brand" href="{{route('dashboardUser')}}">
        <img src="../assets/images/IMG-20240707-WA0005-removebg-preview.png" alt="Your logo" title="Your logo" style="height:55px;" />
      </a>
      <button class="navbar-toggler bg-gradient" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
        <span class="navbar-toggler-icon fa icon-close fa-times"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mx-lg-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{route('dashboardUser')}}">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('aboutUsUser')}}">ABOUT US</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="{{route('servicesUser')}}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              SERVICES
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{route('servicesUsersafaris')}}">SAFARIS</a>
              <a class="dropdown-item" href="{{route('servicesUsertrekking')}}">TREKKING</a>
              <a class="dropdown-item" href="{{route('servicesUserbeach')}}">BEACH</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('reservationUser')}}">RESERVATION</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('contactUsUser')}}">CONTACT US</a>
          </li>
          <li class="nav-item mr-lg-3 mr-4" title="Search">
            <a href="#search" class="search-btn">
              <span class="fa fa-search" aria-hidden="true"></span>
            </a>
          </li>
        </ul>
      </div>

      <!-- Search popup -->
      <div id="search" class="pop-overlay">
        <div class="popup">
          <form action="#" method="GET" class="w3l-hnyform d-sm-flex">
            <input type="search" placeholder="Search.." name="search" required autofocus>
            <button type="submit">Search</button>
            <a class="close" href="#url">&times;</a>
          </form>
        </div>
      </div>

      <!-- Toggle switch for light and dark theme -->
      <div class="">
        <nav class="navigation">
          <div class="theme-switch-wrapper">
            <label class="theme-switch" for="checkbox">
              <input type="checkbox" id="checkbox">
              <div class="mode-container">
                <i class="gg-sun"></i>
                <i class="gg-moon"></i>
              </div>
            </label>
          </div>
        </nav>
      </div>
      <!-- //toggle switch for light and dark theme -->

      @if(Auth::check())
      <aside style="padding: 25px; margin-left: 20px; float: left; max-width:200px">
        <h2>Welcome, {{ Auth::user()->name }}!</h2>
        <ul>
          <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link active">Logout</a></li>
        </ul>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
      </aside>
      @else
      <div style="margin-left: 20px;">
        <p><a href="{{ route('login') }}" class="Auth">Login</a> or <a href="{{ route('register') }}" class="Auth">Register</a></p>
      </div>
      @endif
    </nav>

    <script src="/assets/js/theme-change.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>


  </div>
</header>