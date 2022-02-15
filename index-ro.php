
<!DOCTYPE html>
<html lang="ro">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>RO Residency În România</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <a href="index.php">EN</a> | <a href="index-ro.php">RO</a>
  
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
          <li><a class="nav-link scrollto active" href="#hero">Acasă</a></li>
          <li><a class="nav-link scrollto" href="#about">Despre</a></li>
          <li><a class="nav-link scrollto" href="#services">Servicii</a></li>
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
          <li><a class="nav-link scrollto" href="index.php">EN<img style="width:30px;height:30px;" src="assets\img\Logo-en.png" alt="English Language"></a></li>
          <!-- <li><a class="nav-link scrollto" href="index.php"><img style="width:50px;height:50px;" src="assets\img\Logo-en.png" alt=""></a></li> -->

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
        <h2>Aplică rapid pentru<br><span>Rezidență</span><br>În România</h2>
        <div>
          <a href="#about" class="btn-get-started scrollto">Începe</a>
          <a href="#services" class="btn-services scrollto">Serviciul Nostru</a>
        </div>
      </div>

    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3>Despre Noi</h3>
          <p>Suntem o echipă mică de oameni cu experiență în rezolvarea cererilor de rezidență </p>
        </header>

        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
            <p>
            Suntem specializați în aplicarea pentru rezidenăț temporară pentru persoanele care provin din Statele Unite, Canada și Japonia!
            </p>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <h4 class="title"><a href="">Cine poate obține permisul de ședere rapid?</a></h4>
              <p class="description">Daca sunteti cetățean american, canadian sau japonez, puteți obține permisul pentru activități comerciale dacă deschideți o firmă românească cu raspundere limitată.

              Oamenii care vin din aceste țări au un regim special. În mod normal, cetățenii non-UE ar trebui să investească zeci de mii sau sute de mii de euro în România pentru a beneficia de rezidență, ceea ce nu este necesar pentru cetățenii americani, canadieni sau japonezi.</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bi bi-brightness-high"></i></div>
              <h4 class="title"><a href="">Am nevoie de o investiție minimă sau de angajați în compania mea??</a></h4>
              <p class="description">Nu! SRL-ul tău nu trebuie să conțină angajați, un punct de muncă, nici măcar un venit de început. Puteți fi asociat sau administrator unic și să aveți o investiție minimă de 50 euro.

              Dar după primul an de rezidență, când solicitați prelungirea permisului de ședere, trebuie să dovediți că firma dumneavoastră este activă și are unele venituri sau cheltuieli.
                
              Pentru primul an este suficient să ai o firmă valabilă pentru a-ți începe activitatea economică în România.</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bi bi-calendar4-week"></i></div>
              <h4 class="title"><a href="">Cât timp este valabilă rezidența?</a></h4>
              <p class="description">Acest permis de ședere este disponibil pentru un an.

              Când se încheie acest an, puteți solicita un nou permis bazat pe aceeași firmă. Nu există o limită legală pentru reaplicare în scopul rezidenței. Poți locui mult timp în România, în timp ce ții SRL-ul activ și are un fel de activitate economică.</p>
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
            <h4>Consultația noastră este gratuită</h4>
            <p>
            Ne puteți da un apel rapid sau ne puteți trimite un e-mail pentru a vă rezerva o întâlnire GRATUITĂ cu consultantul nostru.
            </p>
            <p>
            Vom discuta despre tipul de afacere / firmă pe care va trebui să o deschideți, vă vom oferi instrucțiuni detaliate cu privire la modul în care va fi procesată aplicația.
            </p>
          </div>
        </div>

        <div class="row about-extra">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left">
            <img src="assets/img/about-extra-2.svg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-right">
            <h4>Ne aflam in Ramnicu Valcea.</h4>
            <p>
            Dacă nu vă aflați în valcea și nici în România, vă putem procesa în continuare documentele online, dar nu vă vom putea completa cererea până când nu veți fi disponibil fizic pentru a veni la noi.
            </p>
            <p>
            Dacă nu aveți o adresă rezidențială înregistrată, vă putem oferi una fără costuri suplimentare.
            </p>
            <p>
            Dacă aveți întrebări, nu ezitați să ne trimiteți un e-mail sau să ne dați un apel.
            </p>
          </div>

        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="section-bg">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3>Serviciul nostru</h3>
          <p>Cererea dumneavoastră trebuie să conțină o serie de documente, cele mai importante fiind:</p>
        </header>

        <div class="row justify-content-center">

          <div class="col-md-6 col-lg-5" data-aos="zoom-in" data-aos-delay="100">
            <div class="box">
              <div class="icon"><i class="bi bi-briefcase" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href="">Firmă înregistrată</a></h4>
              <p class="description">Aceasta va fi cheia rezidenței. Trebuie să deschideți o firmă sub numele dvs. Dovada că SRL-ul dumneavoastră există și este activ</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5" data-aos="zoom-in" data-aos-delay="200">
            <div class="box">
              <div class="icon"><i class="bi bi-card-checklist" style="color: #e9bf06;"></i></div>
              <h4 class="title"><a href="">Pașaportul dvs</a></h4>
              <p class="description">Acest lucru va fi necesar pentru a determina eligibilitatea dvs</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-5" data-aos="zoom-in" data-aos-delay="100">
            <div class="box">
              <div class="icon"><i class="bi bi-bar-chart" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="">Documente privind locuințele din România</a></h4>
              <p class="description">Veți avea nevoie de o adresă rezidențială înregistrată</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5" data-aos="zoom-in" data-aos-delay="200">
            <div class="box">
              <div class="icon"><i class="bi bi-binoculars" style="color:#41cf2e;"></i></div>
              <h4 class="title"><a href="">Asigurare de Sănătate</a></h4>
              <p class="description">Vei avea nevoie de o asigurare privata de sanatate care sa te acopere în cazul apariției unor probleme de sănătate în timpul șederii în România. Noi vă oferim această asigurare prin  companiile noastre partenere.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-5" data-aos="zoom-in" data-aos-delay="100">
            <div class="box">
              <div class="icon"><i class="bi bi-brightness-high" style="color: #d6ff22;"></i></div>
              <h4 class="title"><a href="">Certificat medical</a></h4>
              <p class="description">Un certificat medical emis din Romănia pentru a dovedi ca nu ai probleme de sanatate.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5" data-aos="zoom-in" data-aos-delay="200">
            <div class="box">
              <div class="icon"><i class="bi bi-calendar4-week" style="color: #4680ff;"></i></div>
              <h4 class="title"><a href="">Taxe de rezidență</a></h4>
              <p class="description">O dovadă că ați plătit taxele pentru permisul de ședere pentru cerere</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h3>De ce să ne alegeți pe noi?</h3>
          <p>Alegându-ne, susțineți un mic grup de antreprenori cu un economist înalt calificat în Vâlcea.
          Taxele noastre sunt rezonabile și foarte competitive comparativ cu cele ale avocaților.
          </p>
        </header>

        <div class="row row-eq-height justify-content-center">

          <div class="col-lg-4 mb-4">
            <div class="card" data-aos="zoom-in" data-aos-delay="100">
              <i class="bi bi-calendar4-week"></i>
              <div class="card-body">
                <h5 class="card-title">Preț accesibil</h5>
                <p class="card-text">Noi nu credem în nevoia de orice avocat (Nici portofelul tau). Experiența este cel mai bun profesor.</p>
                <a href="#" class="readmore">Citește mai mult </a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card" data-aos="zoom-in" data-aos-delay="200">
              <i class="bi bi-camera-reels"></i>
              <div class="card-body">
                <h5 class="card-title">Avem tot ce ai nevoie</h5>
                <p class="card-text">Avem parteneriate cu notari, interpreți, companii de asigurări și multe altele.</p>
                <a href="#" class="readmore">Citește mai mult </a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card" data-aos="zoom-in" data-aos-delay="300">
              <i class="bi bi-chat-square-text"></i>
              <div class="card-body">
                <h5 class="card-title">Nu există linie de așteptare!</h5>
                <p class="card-text">Vom începe cu cererea dumneavoastră de îndată ce vom primi apelul / e-mailul. Toate cererile vor fi procesate în următoarea zi lucrătoare. </p>
                <a href="#" class="readmore">Citește mai mult </a>
              </div>
            </div>
          </div>

        </div>

        <div class="row counters" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1" class="purecounter"></span>
            <p>Clienții</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="100" data-purecounter-duration="1" class="purecounter"></span>
            <p>Rata de succes</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1" class="purecounter"></span>
            <p>Aplicații de succes</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
            <p>Media zilelor pentru depunerea cererii</p>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    

   

    <!-- ======= Contact Section ======= -->
    <section id="contact">
      <div class="container-fluid" data-aos="fade-up">

        <div class="section-header">
          <h3>Contactați-ne</h3>
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
                <p>Râmnicu Vâlcea</p>
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
                    <input type="text" name="name" class="form-control" id="name" placeholder="Numele tău" required>
                  </div>
                  <div class="form-group col-lg-6 mt-3 mt-lg-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email-ul tău" required>
                  </div>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subiect" required>
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" rows="5" placeholder="Mesaj" required></textarea>
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
                       ? "<div id='notify'>Vă mulțumesc. Vă vom contacta în scurt timp !</div>"
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
                <div class="text-center"><button type="submit" value="Submit" title="Send Message">Trimite Mesaj</button></div>
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
            <p>Contactați-ne acum pentru o consultație gratuită ~</p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Link-uri utile</h4>
            <ul>
              <li><a href="#">Acasă</a></li>
              <li><a href="#">Despre noi</a></li>
              <li><a href="#">Servicii</a></li>
              <li><a href="#">Termeni și condiții</a></li>
              <li><a href="#">Politica de confidențialitate</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contactați-ne</h4>
            <p>
              Râmnicu Vâlcea, <br>
              Vâlcea, <br>
              România<br>
              <strong>Telefon:</strong>+40 755042077<br>
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
            <h4>Newsletter-ul nostru</h4>
            <div id="mc_embed_signup">
            <p>Aboneaza-te la newsletter-ul nostru pentru orice actualizări promoționale.</p>
            <form action="https://roresidency.us14.list-manage.com/subscribe/post?u=62261f03d33d3ccd71edeb0e9&amp;id=6ad13b63c6" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
             <div> 
          <input type="email" name="EMAIL" value="" id="mce-EMAIL" placeholder="email address" required><input type="submit" value="Subscribe" name="email" id="mce-EMAIL" placeholder="email address" required>
            </div>
  <br>
    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->


<!--End mc_embed_signup-->
         

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>RoResidency</strong>. Toate drepturile rezervate
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