
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>RO Residency In Romania</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Mailchimp -->

 <link href="//cdn-images.mailchimp.com/embedcode/slim-10_7_dtp.css" rel="stylesheet" type="text/css">

         
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
  
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NewBiz - v4.7.0
  * Template URL: https://bootstrapmade.com/newbiz-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <!-- ReCapchta  -->
  <script src="https://www.google.com/recaptcha/api.js"></script>

  <script>
    function doajax () {
      // (B1) GET FORM DATA
      var data = new FormData(document.getElementById("cform"));
      // REQUIRED: APPEND CAPTCHA RESPONSE
      data.append("g-recaptcha-response", grecaptcha.getResponse());

      // (B2) AJAX FETCH
      fetch("contact.php", { method: "POST", body: data })
      .then((res) => { return res.text(); })
      .then((txt) => {
        // DO SOMETHING AFTER FORM SUBMISSION
        console.log(res);
      });
      return false;
    }
    </script>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo1">
        <!-- Uncomment below if you prefer to use an text logo -->
        <!-- <h1><a href="index.html">NewBiz</a></h1> -->
        <a href="index.php"><img src="assets/img/Logo6.png" alt="" class="logo1"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Service</a></li>
         <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>-->
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="nav-link scrollto" href="index-ro.php">RO<img style="width:30px;height:30px;" src="assets\img\Logo-ro.png" alt="Language Romanian"></a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- #header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="clearfix">
    <div class="container" data-aos="fade-up">

      <div class="hero-img" data-aos="zoom-out" data-aos-delay="200">
        <img src="assets/img/hero-img.svg" alt="" class="img-fluid">
      </div>

      <div class="hero-info" data-aos="zoom-in" data-aos-delay="100">
        <h2>Apply for A Fast<br><span>Residency</span><br>In Romania</h2>
        <div>
          <a href="#about" class="btn-get-started scrollto">Get Started</a>
          <a href="#services" class="btn-services scrollto">Our Service</a>
        </div>
      </div>

    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3>About Us</h3>
          <p>We are a small team of experienced people with solving residency applications </p>
        </header>

        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
            <p>
              We are specialized in applying for Temporary residency applications for people coming from United States, Canada and Japan !
            </p>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <h4 class="title"><a href="">Who can get the fast residency permit?</a></h4>
              <p class="description">If you are a USA, Canada or Japanese citizen, you can get the permit for commercial activities if you open a limited liability Romanian firm.

                People who come from these countries have a special regime. Normally, non-UE citizens should invest tens of thousands or hundreds of thousands of euros in Romania to benefit from residence, which is not necessary for USA, Canada or Japanese citizens.</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bi bi-brightness-high"></i></div>
              <h4 class="title"><a href="">Do I need a minimum investment or employees in my company?</a></h4>
              <p class="description">No. Your SRL doesn’t need to have employees, a working point, not even any income at the beginning. You can be a sole associate or administrator and have a minimum investment of 50 Euros.

                But after the first year of residency, when you apply for the extension of the residency permit, you should prove that your firm is active and it has some income or expenses.
                
                For the first year it is enough to have a valid firm to start your economic activity in Romania.</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bi bi-calendar4-week"></i></div>
              <h4 class="title"><a href="">How long is the residence valid?</a></h4>
              <p class="description">This residency permit is available for one year.

                When this year ends, you can apply for a new permit based on the same firm. There is no legal limit for reapplying on residency purpose. You can live in Romania for a long time, while you keep the SRL active and it has some sort of economic activity.</p>
            </div>

          </div>

          <div class="col-lg-6 background order-lg-2" data-aos="zoom-in">
            <img src="assets/img/about-img.svg" class="img-fluid" alt="">
          </div>
        </div>

        <div class="row about-extra">
          <div class="col-lg-6" data-aos="fade-right">
            <img src="assets/img/about-extra-1.svg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-5 pt-lg-0" data-aos="fade-left">
            <h4>Our Consultation is for Free</h4>
            <p>
              You can give us a quick call or send us an email to book you a FREE appointment with our consultant.
            </p>
            <p>
              We will discuss the type of business/firm you will need to open, we will give you detailed instructions on how the application will be processed.
            </p>
          </div>
        </div>

        <div class="row about-extra">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left">
            <img src="assets/img/about-extra-2.svg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-right">
            <h4>We are located in Ramnicu Valcea.</h4>
            <p>
              If you are not in valcea nor in Romania, we can still process your documents online, but we won't be able to complete your application until you are physycally available to come to us.
            </p>
            <p>
              If you don't have a a registered residential address, we can provide you one at NO extra cost.
            </p>
            <p>
             If you have any questions, feel free to send us an email or give us a call.
            </p>
          </div>

        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="section-bg">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3>Our Service</h3>
          <p>Your application should contain a series of documents, the most important ones being :</p>
        </header>

        <div class="row justify-content-center">

          <div class="col-md-6 col-lg-5" data-aos="zoom-in" data-aos-delay="100">
            <div class="box">
              <div class="icon"><i class="bi bi-briefcase" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href="">Registered Firm</a></h4>
              <p class="description">This will be the key of the residency. You need to open a firm under your Name .Proof that your SRL exists and it is active</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5" data-aos="zoom-in" data-aos-delay="200">
            <div class="box">
              <div class="icon"><i class="bi bi-card-checklist" style="color: #e9bf06;"></i></div>
              <h4 class="title"><a href="">Your Passport</a></h4>
              <p class="description">This will be needed to determine your eligibility</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-5" data-aos="zoom-in" data-aos-delay="100">
            <div class="box">
              <div class="icon"><i class="bi bi-bar-chart" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="">Documents regarding housing in Romania</a></h4>
              <p class="description">You will need a registered residential address</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5" data-aos="zoom-in" data-aos-delay="200">
            <div class="box">
              <div class="icon"><i class="bi bi-binoculars" style="color:#41cf2e;"></i></div>
              <h4 class="title"><a href="">Health Insurance</a></h4>
              <p class="description">You will need a private health insurance to cover you in case of any emergengy during your stay in Romania. We provide that with our own parternship comapanies</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-5" data-aos="zoom-in" data-aos-delay="100">
            <div class="box">
              <div class="icon"><i class="bi bi-brightness-high" style="color: #d6ff22;"></i></div>
              <h4 class="title"><a href="">Medical Certificate</a></h4>
              <p class="description">A medical certfifcate issued from Romania to prove that you do not have any health problems.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5" data-aos="zoom-in" data-aos-delay="200">
            <div class="box">
              <div class="icon"><i class="bi bi-calendar4-week" style="color: #4680ff;"></i></div>
              <h4 class="title"><a href="">Residency fees</a></h4>
              <p class="description">A proof that you paid the residence permit fees for the application</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h3>Why choose us?</h3>
          <p>By choosing us, your are supporting a small group of entrepreneurs with a Highy skilled economist in Valcea.
            Our fees are reasonable and very competitive comapred to other Lawyers.
          </p>
        </header>

        <div class="row row-eq-height justify-content-center">

          <div class="col-lg-4 mb-4">
            <div class="card" data-aos="zoom-in" data-aos-delay="100">
              <i class="bi bi-calendar4-week"></i>
              <div class="card-body">
                <h5 class="card-title">Affordable</h5>
                <p class="card-text">We don't believe in the need of any Lawyer (Neither does your wallet). Experience is the best teacher.</p>
                <a href="#" class="readmore">Read more </a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card" data-aos="zoom-in" data-aos-delay="200">
              <i class="bi bi-camera-reels"></i>
              <div class="card-body">
                <h5 class="card-title">We have everyhting you need</h5>
                <p class="card-text">We have partnerships with Notaries, Interpreters, Insurance companies and many more.</p>
                <a href="#" class="readmore">Read more </a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card" data-aos="zoom-in" data-aos-delay="300">
              <i class="bi bi-chat-square-text"></i>
              <div class="card-body">
                <h5 class="card-title">There's no Queue !</h5>
                <p class="card-text">We will start with your application as soon as we receive your call/email. All applications will be processed on the next bussines day. </p>
                <a href="#" class="readmore">Read more </a>
              </div>
            </div>
          </div>

        </div>

        <div class="row counters" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1" class="purecounter"></span>
            <p>Clients</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="100" data-purecounter-duration="1" class="purecounter"></span>
            <p>Success rate</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1" class="purecounter"></span>
            <p>Successfull Applications</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
            <p>Average Days for application to be Submitted</p>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    

   

    <!-- ======= Contact Section ======= -->
    <section id="contact">
      <div class="container-fluid" data-aos="fade-up">

        <div class="section-header">
          <h3>Contact Us</h3>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="map mb-4 mb-lg-0">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d45058.583417874564!2d24.31677775962975!3d45.1027948490392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x474d38a5241617a1%3A0x842353737a05a49a!2zUsOibW5pY3UgVsOibGNlYQ!5e0!3m2!1sen!2sro!4v1641322072076!5m2!1sen!2sro" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" frameborder="0" style="border:0; width: 100%; height: 340px;" allowfullscreen></iframe>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="row">
              <div class="col-md-5 info">
                <i class="bi bi-geo-alt"></i>
                <p>Ramnicu Valcea</p>
              </div>
              <div class="col-md-4 info">
                <i class="bi bi-envelope"></i>
                <p>support@roresidency.com</p>
              </div>
              <div class="col-md-3 info">
                <i class="bi bi-phone"></i>
                <p>+40 755042077</p>
              </div>
            </div>
            
            <div class="form">
              <form id="c-form" method="post">
                <div class="row">
                  <div class="form-group col-lg-6">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                  </div>
                  <div class="form-group col-lg-6 mt-3 mt-lg-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                  </div>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                </div>
                <div class="my-3">
                  <!-- <div class="loading">Loading</div> -->
                  <div class="error-message"></div>
                  <!-- <div class="sent-message">Your message has been sent. Thank you!</div> -->
                </div>
                <?php
                   if (isset($_POST["name"])) {
                     require "contact.php";
                     echo $error==""
                       ? "<div id='notify'>Thank you. We will contact you shortly !</div>"
                       : "<div id='notify'>$error</div>";
                   }
                   ?>

              <!-- Submit Button Style -->
                <style>
                  button {
                    display: inline-block;
                    background-color: #7b38d8;
                    border-radius: 10px;
                    border: 4px double #cccccc;
                    color: #eeeeee;
                    text-align: center;
                    font-size: 15px;
                    padding: 10px;
                    width: 200px;
                    transition: all 0.5s;
                    cursor: pointer;
                    margin: 5px;
                  }
                  button span {
                    cursor: pointer;
                    display: inline-block;
                    position: relative;
                    transition: 0.5s;
                  }
                  button span:after {
                    content: '\00bb';
                    position: absolute;
                    opacity: 0;
                    top: 0;
                    right: -20px;
                    transition: 0.5s;
                  }
                  button:hover {
                    background-color: #f7c2f9;
                  }
                  button:hover span {
                    padding-right: 25px;
                  }
                  button:hover span:after {
                    opacity: 1;
                    right: 0;
                  }
                  </style>
                  
                  
                  <div class="g-recaptcha" data-sitekey="6Le7fHIeAAAAAKKti6Y6jyXdgSqE0faoZZIAvKRk"></div>
                <div class="text-center"><button type="submit" value="Submit" title="Send Message">Send Message</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-info">
            <h3>RoResidency </h3>
            <p>Contact Us now for a free consultation ~</p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Service</a></li>
              <li><a href="#">Terms of service</a></li>
              <li><a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              Ramnicu Valcea, <br>
              Valcea, <br>
              Romania<br>
              <strong>Phone:</strong>+40 755042077<br>
              <strong>Email:</strong> support@roresidency.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>

          </div>
   <!-- Begin Mailchimp Signup Form -->
<div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <div id="mc_embed_signup">
            <p>Subscribe to our Newsletter for any promotional updates.</p>
            <form action="https://roresidency.us14.list-manage.com/subscribe/post?u=62261f03d33d3ccd71edeb0e9&amp;id=6ad13b63c6" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
             
          <input type="email" name="EMAIL" value="" id="mce-EMAIL" placeholder="email address" required><input type="submit" value="Subscribe" name="email" id="mce-EMAIL" placeholder="email address" required>
            
  <br>
    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->


<!--End mc_embed_signup-->


        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>RoResidency</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=NewBiz
      -->
      
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <script type="text/javascript"> //<![CDATA[
    var tlJsHost = ((window.location.protocol == "https:") ? "https://secure.trust-provider.com/" : "http://www.trustlogo.com/");
    document.write(unescape("%3Cscript src='" + tlJsHost + "trustlogo/javascript/trustlogo.js' type='text/javascript'%3E%3C/script%3E"));
  //]]></script>
  <script language="JavaScript" type="text/javascript">
    TrustLogo("https://www.positivessl.com/images/seals/positivessl_trust_seal_lg_222x54.png", "POSDV", "none");
  </script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  

</body>

</html>