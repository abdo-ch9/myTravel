
<footer class="w3l-footer-29-main">
  <div class="footer-29-w3l py-5">
    <div class="container py-lg-4">
      <div class="row footer-top-29">
        <div class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-1 pr-lg-5">
          <div class="footer-logo mb-3">
            <a class="footer-brand-logo" href="{{route('dashboardUser')}}">RAF<span class="sublog">IKI</span></a>

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
            <li><a href="{{route('dashboardUser')}}">Home</a></li>
            <li><a href="{{route('aboutUsUser')}}">About US</a></li>
            <li><a href="{{route('servicesUser')}}">Services</a></li>
            <li><a href="{{route('reservationUser')}}">Reservation</a></li>
            <li><a href="{{route('contactUsUser')}}">Contact us</a></li>
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

  <button onclick="topFunction()" id="movetop" title="Go to top">
    &#10548;
  </button>
  <script>
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
   <!-- //copyright -->
  <!-- Template JavaScript -->
  <script src="/assets/js/jquery-3.3.1.min.js"></script>
  <!-- owlcarousel -->
  <!-- owl carousel -->
  <script src="/assets/js/owl.carousel.js"></script>
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
  <script src="/assets/js/jquery.waypoints.min.js"></script>
  <script src="/assets/js/jquery.countup.js"></script>
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

  <script src="/assets/js/bootstrap.min.js"></script>
</footer>