<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['envoi'])){
  $receiving_email_address = 'ayidanielajavon@gmail.com';

  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $mailheader = "Name: " . $name .
  "\r\n Email: " . $email .
  "\r\n Sujet: " . $subject .
  "\r\n Message: " . $message . "\r\n";

  if (mail($receiving_email_address, $subject, $message, $mailheader)){
    header('location: inner-page.php');
  } else {
    echo "Failed to send email.";
  }
  
  


}
?>


<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio AYIDA TECH</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicons.png" rel="icon">
  <link href="assets/img/apple-touch.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/profile-img-circle.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">Daniel AJAVON</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="https://twitter.com/ghost_tomyy" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="https://www.facebook.com/ayidatech" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="https://www.instagram.com/ayidatech/" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="https://www.linkedin.com/in/ayi-daniel-ajavon-353a9323a/" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
          <a href="https://www.youtube.com/@ayidatech" target="_blank" class="linkedin"><i class="bx bxl-youtube"></i></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Accueil</span></a></li>
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>A propos</span></a></li>
          <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
          <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
          <li><a href="https://ayidablog.hashnode.dev/" target="_blank" class="nav-link scrollto"><i class="bx bx-internet"></i> <span>Mon blog</span></a></li>
          <li><a href="ajavondDaniel.pdf" class="nav-link scrollto" download><i class="bx bx-download"></i><span>Mon CV</span></a></li>

        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container hero" data-aos="fade-in">
      <h1>Daniel AJAVON</h1>
      <p>Je suis <span class="typed" data-typed-items="Developpeur Web, Designer, Developpeur mobile"></span></p>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>A propos</h2>
          <p style="text-align: justify;">Je suis un développeur passionné de développement web. Avec une bonne base dans la création de solutions techniques innovantes, je suis constamment à la recherche de nouveaux défis pour mettre mes compétences à profit.
            Mon approche de travail se caractérise par une attention méticuleuse aux détails, une résolution efficace des problèmes et une collaboration étroite avec les clients pour assurer leur satisfaction. Je suis également à l'aise de travailler en équipe et de m'adapter rapidement aux nouvelles technologies et aux méthodologies de développement.</p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="assets/img/profile-img.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Dévéloppeur Web &amp; Mobile.</h3>
            <p class="fst-italic" style="text-align: justify;">
              Voici quelques informations personnelles sur moi. Je suis un etudiant en informatique (development Web). Je suis actuellement disponible en tant que freelance pour de nouveaux projets passionnants. Voici un aperçu de mes informations clés :
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>20</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Téléphone:</strong> <span>+228 91 79 06 60</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Ville:</strong> <span>Lomé - TOGO</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Niveau:</strong> <span>Bac + 2</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>ayidanielajavon.com</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Disponible</span></li>
                </ul>
              </div>
            </div>
            <p style="text-align: justify;">
              Depuis mes 17 ans, ma passion pour le développement a pris son envol. J'ai acquis une expertise approfondie dans plusieurs langages de programmation pertinents. Depuis le début de ma formation, j'ai développé une solide base de connaissances pour concevoir des applications conviviales et fonctionnelles qui répondent aux besoins spécifiques de mes clients. Je suis déterminé à continuer à apprendre et à grandir en tant que développeur, en relevant de nouveaux défis passionnants dans le domaine du développement.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
  

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container">

        <div class="section-title">
          <h2>compétences</h2>
          <p>
            Dans cette section, je vous invite à explorer mes compétences et expertises, acquises tout au long de mon parcours. Découvrez les domaines dans lesquels je me distingue et comment mes compétences peuvent contribuer de manière significative à vos projets et initiatives.
            </p>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6" data-aos="fade-up">

            <div class="progress">
              <span class="skill">HTML <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">CSS <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">JavaScript <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

            <div class="progress">
              <span class="skill">PHP <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">JAVA <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Python Django<i class="val">70%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->


    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>
            Explorez mon portfolio et découvrez une sélection de mes projets passionnants et inspirants qui reflètent ma créativité, mes compétences et ma passion pour le Developpement. Chacun de ces projets est le fruit de mon engagement, de ma détermination et de ma recherche constante d'excellence dans mon parcours professionnel.
          </p>
        </div>

        
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Tribuate page"><i class="bx bx-plus"></i></a>
                <a href="https://ghost0143.github.io/tribuate/" target="_blank" title="Demo"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Documentation JS"><i class="bx bx-plus"></i></a>
                <a href="https://ghost0143.github.io/Projects/" target="_blank" title="Demo"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Landing page"><i class="bx bx-plus"></i></a>
                <a href="https://ghost0143.github.io/landing/" target="_blank" title="Demo"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Todo liste en JS"><i class="bx bx-plus"></i></a>
                <a href="https://ghost0143.github.io/ToDo-List-JavaScript/" title="Demo"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Portfolio"><i class="bx bx-plus"></i></a>
                <a href="https://ghost0143.github.io/cv/" target="_blank" title="Demo"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                <a href="" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

         

        </div>

      </div>
    </section><!-- End Portfolio Section -->

 

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>
            Je serais ravi d'établir un contact avec vous ! N'hésitez pas à me laisser un message ou à utiliser les informations ci-dessous pour me contacter directement.
          </p>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Adresse</h4>
                <p>Lomé - Togo</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>ayidanielajavon@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Téléphone</h4>
                <p>+228 91 79 06 60</p>
              </div>

            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form method="POST" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Nom</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Sujet</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Merci pour votre message</div>
              </div>
              <div class="text-center"><input type="submit" name="envoi" value="Submit"></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
      Copyright &copy; 2023<br> Développer par <a href="index.php">Pafaitement Tech</a>
      </div>
      <div class="credits">
        
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>