<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>My travel Safari</title>
  <link href="//fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
</head>

<body>
  <!--header-->
  @extends("layout.navbar")
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
                    <a class="btn btn-style btn-white mt-sm-5 mt-4 mr-2" href="{{route('reservationUser')}}"> Discover Now
                    </a>
                    <a class="btn btn-style btn-outline-light mt-sm-5 mt-4 mr-2" href="{{route('aboutUsUser')}}">
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
                    <a class="btn btn-style btn-white mt-sm-5 mt-4 mr-2" href="{{route('reservationUser')}}"> Discover Now
                    </a>
                    <a class="btn btn-style btn-outline-light mt-sm-5 mt-4 mr-2" href="{{route('aboutUsUser')}}">
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
                    <a class="btn btn-style btn-white mt-sm-5 mt-4 mr-2" href="{{route('reservationUser')}}"> Discover Now
                    </a>
                    <a class="btn btn-style btn-outline-light mt-sm-5 mt-4 mr-2" href="{{route('aboutUsUser')}}">
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
                    <a class="btn btn-style btn-white mt-sm-5 mt-4 mr-2" href="{{route('reservationUser')}}"> Discover Now
                    </a>
                    <a class="btn btn-style btn-outline-light mt-sm-5 mt-4 mr-2" href="{{route('aboutUsUser')}}">
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
            <a class="btn btn-style btn-primary mt-sm-5 mt-4 mr-2" href="{{route('aboutUsUser')}}"> Read More</a>
          </div>
          <div class="col-lg-5 mt-lg-0 mt-4">
            <div class="position-relative">
              <img src="/assets/images/b3.jpg" alt="" class="radius-image img-fluid">
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
              <img src="/assets/images/bg2.jpg" alt="" class="radius-image img-fluid">

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

            <a href="{{route('aboutUsUser')}}" class="btn btn-style btn-primary mt-4">Read More</a>
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
          <img src="/assets/images/b4.jpg" alt="" class="radius-image img-fluid">
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
        <a class="btn btn-style btn-outline-light" href="{{route('reservationUser')}}">
          MAKE UR RESERVATION
        </a>
      </div>
    </div>
  </section>


  </section>
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
                <a class="comment-img" href="#url"><img src="/assets/images/team1.jpg" class="img-responsive"
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
                <a class="comment-img" href="#url"><img src="/assets/images/team2.jpg" class="img-responsive"
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
                <a class="comment-img" href="#url"><img src="/assets/images/team3.jpg" class="img-responsive"
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
                <a class="comment-img" href="#url"><img src="/assets/images/team4.jpg" class="img-responsive"
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
                <a class="comment-img" href="#url"><img src="/assets/images/team5.jpg" class="img-responsive"
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
                <a class="comment-img" href="#url"><img src="/assets/images/team3.jpg" class="img-responsive"
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
    <h1 style="text-align: center; "><a href="{{route('reviewsUser')}}">Add ur review</a></h1>
  </section>
  <!-- //testimonials section -->
  @extends("layout.footer")

 

</body>

</html>