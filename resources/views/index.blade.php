<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Wildlive Animals Category Bootstrap Responsive Web Template | Home :: W3Layouts </title>
  <link href="//fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
</head>

<body>
  <!--header-->
  <header id="site-header" class="w3lhny-head fixed-top">
    <div class="container">
      <nav class="navbar navbar-expand-lg stroke px-0">
        <a class="navbar-brand" href="index.html">
          <img src="./assets/images/IMG-20240707-WA0005-removebg-preview.png" alt="Your logo" title="Your logo" style="height:55px;" />
        </a>
        <button class="navbar-toggler bg-gradient" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
          <span class="navbar-toggler-icon fa icon-close fa-times"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mx-lg-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">ABOUT US</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="services.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                SERVICES
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="safaris.html">SAFARIS</a>
                <a class="dropdown-item" href="trekking.html">TREKKING</a>
                <a class="dropdown-item" href="beach.html">BEACH</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="reservation.html">RESERVATION</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">CONTACT US</a>
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

    </div>
  </header>
  <!--/header-->
  <!-- main-slider -->
  <section class="w3l-main-slider" id="home">
    <div class="companies20-content">
      <div class="owl-one owl-carousel owl-theme">
        <div class="item">
          <li>
            <div class="slider-info banner-view bg bg2">
              <div class="banner-info">
                <div class="container">
                  <div class="banner-info-bg">
                    <h5>CULTURAL EXPERIENCES </h5>
                    <p>
                      Tanzania's culture is a vibrant mix of over 120 ethnic groups, with the Maasai and Swahili
                      cultures being particularly prominent. Known for traditional dances, colorful attire, and art
                      forms like Tinga Tinga painting, Tanzania's cultural heritage is celebrated through music, dance,
                      and festivals like Sauti za Busara.</p>
                    <a class="btn btn-style btn-white mt-sm-5 mt-4 mr-2" href="reservation.html"> Discover Now
                    </a>
                    <a class="btn btn-style btn-outline-light mt-sm-5 mt-4 mr-2" href="about.html">
                      Read More</a>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </div>
        <div class="item">
          <li>
            <div class="slider-info  banner-view banner-top1 bg bg2">
              <div class="banner-info">
                <div class="container">
                  <div class="banner-info-bg">
                    <h5>ZANZIBAR HOLIDAYS </h5>
                    <p>
                      Zanzibar holidays include an interesting mix of African, Arabian, Indian and European culture on
                      this island off Africa’s eastern coast. The best time to visit Zanzibar is during the
                      archipelago's dry season, from July to September, which is a very popular time to travel. However,
                      it's worthwhile travelling at most times of year, with balmy temperatures between 28°C and 34°C
                      and sunshine the norm.
                    </p>
                    <a class="btn btn-style btn-white mt-sm-5 mt-4 mr-2" href="reservation.html"> Discover Now
                    </a>
                    <a class="btn btn-style btn-outline-light mt-sm-5 mt-4 mr-2" href="about.html">
                      Read More</a>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </div>
        <div class="item">
          <li>
            <div class="slider-info banner-view banner-top2 bg bg2">
              <div class="banner-info">
                <div class="container">
                  <div class="banner-info-bg">
                    <h5>WILDLIFE ADVENTURE</h5>
                    <p>Tanzania is one of Africa's top safari destinations. It is known for its wildlife, which makes
                      Tanzania safari excellent, with the tree-climbing lions being the most renowned attraction.
                      Tanzania safari tours take you to the best and biggest parks in Africa, and some of the most
                      varied and unique landscapes that you'll ever see.</p>
                    <a class="btn btn-style btn-white mt-sm-5 mt-4 mr-2" href="reservation.html"> Discover Now
                    </a>
                    <a class="btn btn-style btn-outline-light mt-sm-5 mt-4 mr-2" href="about.html">
                      Read More</a>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </div>
        <div class="item">
          <li>
            <div class="slider-info banner-view banner-top3 bg bg2">
              <div class="banner-info">
                <div class="container">
                  <div class="banner-info-bg">
                    <h5>CLIMB KILIMANJARO</h5>
                    <p class="mt-md-4 mt-3">Mount Kilimanjaro is the highest mountain in Africa and the tallest
                      freestanding mountain in the world 5,895 metres (19,341 ft) above sea level and about 4,900 metres
                      (16,100 ft) above its plateau base. Mount Kilimanjaro is a dormant volcano in Tanzania. It has
                      three volcanic cones: Kibo, Mawenzi, and Shira.
                    </p>
                    <a class="btn btn-style btn-white mt-sm-5 mt-4 mr-2" href="reservation.html"> Discover Now
                    </a>
                    <a class="btn btn-style btn-outline-light mt-sm-5 mt-4 mr-2" href="about.html">
                      Read More</a>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </div>
      </div>
    </div>
  </section>
  <!-- /main-slider -->
  <!-- home page block1 -->
  <section id="about" class="home-services pt-lg-0">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="box-wrap">
            <div class="box-wrap-grid">
              <div class="icon">
                <span class="fa fa-users"></span>
              </div>
              <div class="info">
                <h4><a href="#url">WE ARE THE EXPERTS</a></h4>
              </div>
            </div>
            <p class="mt-3">We will only recommend products and services we have first-hand knowledge of.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mt-md-0 mt-4">
          <div class="box-wrap">
            <div class="box-wrap-grid">
              <div class="icon">
                <span class="fa fa-shield"></span>
              </div>
              <div class="info">
                <h4><a href="#url">WE TAKE RESPONSIBILITY</a></h4>
              </div>
            </div>
            <p class="mt-3">We don't turn a blind eye to problems faced in Tanzania, but instead try being part of the
              solution.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mt-lg-0 mt-4">
          <div class="box-wrap">
            <div class="box-wrap-grid">
              <div class="icon">
                <span class="fa fa-globe"></span>
              </div>
              <div class="info">
                <h4><a href="#url">TAILOR-MADE TOUR </a></h4>
              </div>
            </div>
            <p class="mt-3">Our tours can be tailored or built completely from scratch to suit your needs.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- //home page block1 -->
  <!-- about page about section -->
  <section class="w3l-index3" id="about">
    <div class="midd-w3 py-5">
      <div class="container py-lg-5 py-md-3">
        <div class="row">
          <div class="col-lg-7 mb-lg-0 mb-md-5 mb-4 align-self">
            <h6 class="title-subhny">WELCOME TO TANZANIA SAFARI RAFIKI</h6>
            <h3 class="title-left mx-0">BEST COMPANY FOR YOUR HOLIDAY IN TANZANIA</h3>
            <p class="mt-md-4 mt-3">We are a local Tanzanian tours company that provides customized wildlife safaris,
              cultural tourism experiences and Zanzibar beach holiday in Tanzania. Climbing on Kilimanjaro through
              various Trekking routes: Marangu route, Machame route, Lemosho route, Umbwe route, and Rongai.</p>
            <a class="btn btn-style btn-primary mt-sm-5 mt-4 mr-2" href="about.html"> Read More</a>
          </div>
          <div class="col-lg-5 mt-lg-0 mt-4">
            <div class="position-relative">
              <img src="assets/images/b3.jpg" alt="" class="radius-image img-fluid">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- //about page about section -->
  <section class="w3l-index2" id="about1">
    <div class="midd-w3 py-5">
      <div class="container py-lg-5 py-md-4 py-2">
        <div class="row">
          <div class="col-lg-6 left-wthree-img">
            <div class="position-relative">
              <img src="assets/images/bg2.jpg" alt="" class="radius-image img-fluid">

            </div>
          </div>
          <div class="col-lg-6 mt-lg-0 mt-5 pl-lg-5 align-self">
            <h6 class="title-subhny">Our Story</h6>
            <p class="mt-4">After long way of hardworking one day my mind told me, " You can have your own safari
              company business" l asked my mind how will l make this happen ? Answer was do it you can.

              The name RAFIKI means FRIEND, all I do in business is to build friendship ♥️ hence Tanzania Safari Rafiki

              I started by using my time after I came from work, during the night and sleeping late posting, reading
              different travel websites and started to send emails to them asking to work with them, was not easy it
              took longer for them to reply and agreed to work with me after they saw my experience and commitment.
            </p>

            <a href="about.html" class="btn btn-style btn-primary mt-4">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- home page block grids -->
  <section class="w3l-grids-3 py-5" id="why">
    <div class="container py-lg-5 py-md-4 py-2">
      <div class="row bottom-ab-grids">
        <div class="col-lg-6 bottom-ab-left align-self">
          <span class="title-subhny mb-2">Wildlive</span>
          <h3 class="title-w3l mb-4">Help make this world a fairer place for all animals.</h3>
          <p class="">Lorem ipsum dolor sit amet elit. hic odio tenetur. ante ipsum primis in
            faucibus orci luctus et ultrices posuere cubilia acere aperiam sequi optio consectetur adipisicing
            dolor et amet. </p>
          <ul class="cont-4 mt-4">
            <li><span class="fa fa-check"></span>Pellen tesque libero ut justo</li>
            <li><span class="fa fa-check"></span>Lorem ipsum dolor sit amet elit</li>
            <li><span class="fa fa-check"></span>Pellen tesque libero ut justo</li>
          </ul>
        </div>
        <div class="col-lg-6 bottom-right-grids pl-lg-5 mt-lg-0 mt-5">
          <img src="assets/images/b4.jpg" alt="" class="radius-image img-fluid">
        </div>
      </div>
    </div>
  </section>
  <!-- //home page block grids -->
  <!-- stats -->
  <section class="w3l-stats py-5" id="stats">
    <div class="gallery-inner container py-sm-5">
      <div class="row stats-con py-md-5">
        <div class="col-md-4 col-6 stats_info counter_grid">
          <p class="counter">1,532</p>
          <span class="plus">+</span><br>
          <h3>CUSTOMERS</h3>
        </div>
        <div class="col-md-4 col-6 stats_info counter_grid mt-md-0 mt-0">
          <p class="counter">132</p>
          <span class="plus">+</span><br>
          <h3>TOURS</h3>
        </div>
        <div class="col-md-4 col-6 stats_info counter_grid2 mt-md-0 mt-4">
          <p class="counter">10</p>
          <span class="plus"> + year</span><br>
          <h3>experience</h3>
        </div>
      </div>
      <div class="d-flex justify-content-center mt-sm-5 mt-4 mb-5">
        <a class="btn btn-style btn-outline-light" href="reservation.html">
          MAKE UR RESERVATION
        </a>
      </div>
    </div>
  </section>


  </section>
  <!-- //stats -->
  <!-- home page block grids -->
  <!-- <section class="w3l-text-11 py-5" id="blogs">
    <div class="container py-lg-5 py-md-4 py-2">
      <span class="title-subhny text-center mb-2">Wildlive</span>
      <h3 class="title-w3l text-center mb-5">Recent Blog Posts.</h3>
      <div class="row text11-content">

        <div class="col-md-4 item mt-lg-0">
          <div class="card">
            <div class="card-header p-0 position-relative border-0">
              <a href="blog-single.html">
                <img class="card-img-bottom d-block radius-image" src="assets/images/b1.jpg" alt="Card image cap">
              </a>
            </div>
            <div class="card-body p-0 blog-details">
              <h6 class="mt-4">Dec 22, 2020</h6>
              <a href="#admin" class="admin">- by Steven Rich </a>
              <br>
              <a href="blog-single.html" class="blog-desc">Help make this world a fairer place for all
                animals.</a>
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae voluptatum.</p>
              <a href="blog-single.html" class="btn btn-style btn-primary mt-lg-4 mt-4">Read More </a>
            </div>
          </div>
        </div>

        <div class="col-md-4 item mt-lg-0 mt-5">
          <div class="card">
            <div class="card-header p-0 position-relative border-0">
              <a href="blog-single.html">
                <img class="card-img-bottom d-block radius-image" src="assets/images/b3.jpg" alt="Card image cap">
              </a>
            </div>
            <div class="card-body p-0 blog-details">
              <h6 class="mt-4">Dec 22, 2020</h6>
              <a href="#admin" class="admin">- by Steven Rich </a>
              <br>
              <a href="blog-single.html" class="blog-desc">Help make this world a fairer place for all
                animals.</a>
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae voluptatum.</p>
              <a href="blog-single.html" class="btn btn-style btn-primary mt-lg-4 mt-4">Read More </a>
            </div>
          </div>
        </div>

        <div class="col-md-4 item mt-lg-0 mt-5">
          <div class="card">
            <div class="card-header p-0 position-relative border-0">
              <a href="blog-single.html">
                <img class="card-img-bottom d-block radius-image" src="assets/images/b6.jpg" alt="Card image cap">
              </a>
            </div>
            <div class="card-body p-0 blog-details">
              <h6 class="mt-4">Dec 22, 2020</h6>
              <a href="#admin" class="admin">- by Steven Rich </a>
              <br>
              <a href="blog-single.html" class="blog-desc">Help make this world a fairer place for all
                animals.</a>
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae voluptatum.</p>
              <a href="blog-single.html" class="btn btn-style btn-primary mt-lg-4 mt-4">Read More </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>-->
  <!-- //home page block grids -->

  <!-- testimonials section -->
  <section class="w3l-clients w3l-test pb-5" id="testimonials">
    <div class="midd-w3 py-5">
      <div class="container py-lg-5 py-md-4 pt-2 pb-5">
        <h6 class="title-subhny text-center">Reviews</h6>
        <h3 class="title-w3l text-center mb-md-5 mb-4">Testimonials</h3>
        <div id="owl-demo2" class="owl-carousel owl-theme mt-4 py-md-2 mb-md-4">
          <div class="item">
            <div class="testimonial-content">
              <div class="testimonial">
                <blockquote>
                  <q>Pellen tesque libero ut justo</q>
                </blockquote>
                <p>Lorem ipsum dolor sit amet elit. hic odio tenetur. ante ipsum primis in
                  faucibus orci luctus et ultrices posuere,tesque libero ut justo Semper.</p>
              </div>
              <div class="bottom-info mt-4">
                <a class="comment-img" href="#url"><img src="assets/images/team1.jpg" class="img-responsive"
                    alt="placeholder image"></a>
                <div class="people-info align-self">
                  <h3>Johnson william</h3>
                  <p class="identity">Example City</p>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimonial-content">
              <div class="testimonial">
                <blockquote>
                  <q>Lorem ipsum dolor sit amet</q>
                </blockquote>
                <p>Lorem ipsum dolor sit amet elit. hic odio tenetur. ante ipsum primis in
                  faucibus orci luctus et ultrices posuere,tesque libero ut justo Semper.</p>
              </div>
              <div class="bottom-info mt-4">
                <a class="comment-img" href="#url"><img src="assets/images/team2.jpg" class="img-responsive"
                    alt="placeholder image"></a>
                <div class="people-info align-self">
                  <h3>Alexander sakura</h3>
                  <p class="identity">Example City</p>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimonial-content">
              <div class="testimonial">
                <blockquote>
                  <q>Pellen tesque libero ut justo</q>
                </blockquote>
                <p>Lorem ipsum dolor sit amet elit. hic odio tenetur. ante ipsum primis in
                  faucibus orci luctus et ultrices posuere,tesque libero ut justo Semper.</p>
              </div>
              <div class="bottom-info mt-4">
                <a class="comment-img" href="#url"><img src="assets/images/team3.jpg" class="img-responsive"
                    alt="placeholder image"></a>
                <div class="people-info align-self">
                  <h3>John wilson</h3>
                  <p class="identity">Example City</p>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimonial-content">
              <div class="testimonial">
                <blockquote>
                  <q>Lorem ipsum dolor sit amet</q>
                </blockquote>
                <p>Lorem ipsum dolor sit amet elit. hic odio tenetur. ante ipsum primis in
                  faucibus orci luctus et ultrices posuere,tesque libero ut justo Semper.</p>
              </div>
              <div class="bottom-info mt-4">
                <a class="comment-img" href="#url"><img src="assets/images/team4.jpg" class="img-responsive"
                    alt="placeholder image"></a>
                <div class="people-info align-self">
                  <h3>Julia sakura</h3>
                  <p class="identity">Example City</p>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimonial-content">
              <div class="testimonial">
                <blockquote>
                  <q>Pellen tesque libero ut justo</q>
                </blockquote>
                <p>Lorem ipsum dolor sit amet elit. hic odio tenetur. ante ipsum primis in
                  faucibus orci luctus et ultrices posuere,tesque libero ut justo Semper.</p>
              </div>
              <div class="bottom-info mt-4">
                <a class="comment-img" href="#url"><img src="assets/images/team5.jpg" class="img-responsive"
                    alt="placeholder image"></a>
                <div class="people-info align-self">
                  <h3>John wilson</h3>
                  <p class="identity">Example City</p>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimonial-content">
              <div class="testimonial">
                <blockquote>
                  <q>Lorem ipsum dolor sit amet.</q>
                </blockquote>
                <p>Lorem ipsum dolor sit amet elit. hic odio tenetur. ante ipsum primis in
                  faucibus orci luctus et ultrices posuere,tesque libero ut justo Semper.</p>
              </div>
              <div class="bottom-info mt-4">
                <a class="comment-img" href="#url"><img src="assets/images/team3.jpg" class="img-responsive"
                    alt="placeholder image"></a>
                <div class="people-info align-self">
                  <h3>Julia sakura</h3>
                  <p class="identity">Example City</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- //testimonials section -->
  <!-- footer -->
  <footer class="w3l-footer-29-main">
    <div class="footer-29-w3l py-5">
      <div class="container py-lg-4">
        <div class="row footer-top-29">
          <div class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-1 pr-lg-5">
            <div class="footer-logo mb-3">
              <a class="footer-brand-logo" href="index.html">RAF<span class="sublog">IKI</span></a>

            </div>

            <div class="main-social-footer-29 mt-4">
              <a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a>
              <a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a>
              <a href="https://www.instagram.com/tanzania_safari_rafiki" class="instagram"><span
                  class="fa fa-instagram"></span></a>
              <a href="#linkedin" class="linkedin"><span class="fa fa-linkedin"></span></a>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 col-sm-5 col-6 footer-list-29 footer-2 mt-sm-0 mt-5">

            <ul>
              <h6 class="footer-title-29">Usefull Links</h6>
              <li><a href="index.html">Home</a></li>
              <li><a href="about.html">About US</a></li>
              <li><a href="services.html">Services</a></li>
              <li><a href="reservation.html">Reservation</a></li>
              <li><a href="contact.html">Contact us</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-6 col-sm-5 col-6 footer-list-29 footer-3 mt-lg-0 mt-5">
            <h6 class="footer-title-29">More Info</h6>
            <ul>
              <li><a href="blog.html">Events</a></li>
              <li><a href="#petitions">Petitions</a></li>
              <li><a href="#member">
                  Membership</a></li>
              <li><a href="#donate">Donations</a></li>
              <li><a href="#help">Help</a></li>

            </ul>

          </div>
          <div class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-4 mt-lg-0 mt-5">
            <h6 class="footer-title-29">Instagram
            </h6>

            <ul class="w3linst-imgs row">
              <li class="col-4"><a href="#"><img
                    src="assets/images/387654468_1323357181873886_3357612507767457572_n.jpg" alt=""
                    class="radius-image img-fluid"></a>
              </li>
              <li class="col-4"><a href="#"><img
                    src="assets/images/387672297_1462339057669201_8194683833798779513_n.jpg" alt=""
                    class="radius-image img-fluid"></a>
              </li>
              <li class="col-4"><a href="#"><img
                    src="assets/images/387268871_1700508830372769_5249199426729473651_n.jpg" alt=""
                    class="radius-image img-fluid"></a>
              </li>
              <li class="col-4"><a href="#"><img
                    src="assets/images/331686953_3594527707491988_5776217079945835588_n.jpg" alt=""
                    class="radius-image img-fluid"></a>
              </li>
              <li class="col-4"><a href="#"><img src="assets/images/aea.jpg" alt="" class="radius-image img-fluid"></a>
              </li>
              <li class="col-4"><a href="#"><img src="assets/images/download.jpg" alt=""
                    class="radius-image img-fluid"></a>
              </li>
            </ul>

          </div>
        </div>
      </div>
    </div>
    <!-- //footer -->

    <!-- copyright -->
    <section class="w3l-copyright">
      <div class="container">
        <div class="row bottom-copies">
        </div>
      </div>
    </section>
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
      &#10548;
    </button>
    <script>
      function navigateToPage(select) {
        const url = select.value;
        if (url) {
          window.location.href = url;
        }
      }
      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function() {
        scrollFunction()
      };

      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("movetop").style.display = "block";
        } else {
          document.getElementById("movetop").style.display = "none";
        }
      }

      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>
    <!-- /move top -->
  </footer>

  <!-- //copyright -->
  <!-- Template JavaScript -->
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/theme-change.js"></script>
  <!-- owlcarousel -->
  <!-- owl carousel -->
  <script src="assets/js/owl.carousel.js"></script>
  <!-- script for banner slider-->
  <script>
    $(document).ready(function() {
      $('.owl-one').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplaySpeed: 1000,
        autoplayHoverPause: false,
        responsive: {
          0: {
            items: 1
          },
          480: {
            items: 1
          },
          667: {
            items: 1
          },
          1000: {
            items: 1
          }
        }
      })
    })
  </script>
  <!-- //script -->
  <!-- script for tesimonials carousel slider -->
  <script>
    $(document).ready(function() {
      $("#owl-demo2").owlCarousel({
        loop: true,
        nav: false,
        margin: 50,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          736: {
            items: 1,
            nav: false
          },
          991: {
            items: 2,
            margin: 30,
            nav: false
          },
          1080: {
            items: 2,
            nav: false
          }
        }
      })
    })
  </script>
  <!-- //script for tesimonials carousel slider -->
  <!-- owl carousel -->

  <!-- script for tesimonials carousel slider -->
  <script>
    $(document).ready(function() {
      $("#owl-demo2").owlCarousel({
        loop: true,
        margin: 20,
        nav: false,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          1000: {
            items: 1,
            nav: false,
            loop: false
          }
        }
      })
    })
  </script>
  <!-- //script for tesimonials carousel slider -->
  <!-- stats number counter-->
  <script src="assets/js/jquery.waypoints.min.js"></script>
  <script src="assets/js/jquery.countup.js"></script>
  <script>
    $('.counter').countUp();
  </script>
  <!-- //stats number counter -->
  <!--/MENU-JS-->
  <script>
    $(window).on("scroll", function() {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function() {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function() {
      if ($(window).width() > 991) {
        $("header").removeClass("active");

      }
      $(window).on("resize", function() {
        if ($(window).width() > 991) {
          auth1 = document.getElementsByClassName("Auth")[0].style.background = "blue"

          $("header").removeClass("active");
        }
      });
    });
  </script>
  <!--//MENU-JS-->

  <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>