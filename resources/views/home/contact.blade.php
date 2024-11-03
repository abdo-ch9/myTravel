
<!doctype html>
<html lang="zxx">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Wildlive Animals Category Bootstrap Responsive Web Template | Contact :: W3Layouts </title>
  <link href="//fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style-starter.css">
</head>

<body>
  <!--header-->
  @extends("layout.navbar")

  <!--/header-->
  <!--/inner-page-->

  <div class="inner-banner">
  </div>
  <section class="w3l-breadcrumb">
    <div class="container">
      <ul class="breadcrumbs-custom-path">
        <li><a href="index.html">Home</a></li>
        <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Contact Us</li>
      </ul>
    </div>
  </section>
  <!--//inner-page-->
 <!-- /contact-section -->
<section class="w3l-contact-2 py-5" id="contact">
  <div class="container py-lg-5 py-md-4 py-2">
    <span class="title-subhny mb-2 text-center">Send a Message</span>
    <h3 class="title-w3l mb-5 text-center">Contact Us</h3>
      <div class="contact-grids d-grid">
          <div class="contact-left-img">
            <img src="assets/images/bg3.jpg" class="img-fluid radius-image" alt="">
          </div>
          <div class="contact-right">
              <form action="https://sendmail.w3layouts.com/submitForm" method="post" class="signin-form">
                  <div class="input-grids">

                      <input type="text" name="w3lName" id="w3lName" placeholder="Your Name*" class="contact-input"
                          required="" />
                      <input type="email" name="w3lSender" id="w3lSender" placeholder="Your Email*"
                          class="contact-input" required="" />
                      <input type="text" name="w3lSubect" id="w3lSubect" placeholder="Subject*" class="contact-input"
                          required="" />
                      <input type="text" name="w3lWebsite" id="w3lWebsite" placeholder="Website URL*" class="contact-input"
                          required="" />
                  </div>
                  <div class="form-input">
                      <textarea name="w3lMessage" id="w3lMessage" placeholder="Type your message here*"
                          required=""></textarea>
                  </div>
                  <div class="form-buttonhny text-lg-right">
                      <button class="btn btn-style btn-primary">Send Message</button>
                  </div>
              </form>
          </div>
      </div>

      <div class="contact-left mt-5 pt-lg-5">
         <span class="title-subhny mb-2 text-center">Find Us</span>
         <h3 class="title-w3l mb-5 text-center">Address Info</h3>
        <div class="cont-details">
            <div class="cont-top margin-up">
                <div class="cont-left text-center">
                    <span class="fa fa-map-marker"></span>
                </div>
                <div class="cont-right">
                    <h6>Company Address</h6>
                    <p>Wildlive,#2214 cravel street, NY - 34336.</p>
                </div>
            </div>
            <div class="cont-top margin-up">
                <div class="cont-left text-center">
                    <span class="fa fa-phone"></span>
                </div>
                <div class="cont-right">
                    <h6>Call Us</h6>
                    <p><a href="tel:+1(21) 343 5677">+1(21) 343 5677</a></p>
                    <p><a href="tel:+1(21) 343 5678">+1(21) 343 5678</a></p>
                </div>
            </div>
            <div class="cont-top margin-up">
                <div class="cont-left text-center">
                    <span class="fa fa-envelope-o"></span>
                </div>
                <div class="cont-right">
                    <h6>Email Us</h6>
                    <p><a href="mailto:example@mail.com" class="mail">example@mail.com</a></p>
                    <p><a href="mailto:example@mail2.com" class="mail">example@mail2.com</a></p>
                </div>
            </div>
            <div class="cont-top margin-up">
                <div class="cont-left text-center">
                    <span class="fa fa-life-ring"></span>
                </div>
                <div class="cont-right">
                    <h6>Customer Support</h6>
                    <p><a href="mailto:info@support.com" class="mail">info@support.com</a></p>
                    <p><a href="mailto:info@support2.com" class="mail">info@support2.com</a></p>
                </div>
            </div>
        </div>
        </div>

        <div class="map-iframe mt-5">
          <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317718.69319292053!2d-0.3817765050863085!3d51.528307984912544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2spl!4v1562654563739!5m2!1sen!2spl"
              width="100%" height="400" frameborder="0" style="border: 0px;" allowfullscreen=""></iframe>
        </div>
    </div>
</section>

<!-- //contact-section -->
  <!-- footer -->
  @extends("layout.footer")


</body>

</html>