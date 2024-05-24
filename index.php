<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Venco_shop</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  <!-- Vendor CSS Files -->
  <link href="assets/assets1/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/assets1/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/assets1/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/assets1/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/assets1/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/assets1/css/main.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Venco<span>_Shop</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Menu</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>

      </nav><!-- .navbar -->

      <div class="navbar dropdown">
        <ul class="ornella">
          <li class="dropdown">
            <a class="nav-link dropdown-toggle active btn-book-a-table text-light mb-3" href="#"
              data-bs-toggle="dropdown" aria-expanded="false">Se connecter</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="login.php?type=patron">Patron</a></li>
              <li><a class="dropdown-item" href="login.php?type=site">Site</a></li>
              <li><a class="dropdown-item" href="login.php?type=fournisseur">fournisseur</a></li>
              <li><a class="dropdown-item" href="login.php?type=planteur">Planteur</a></li>
            </ul>
          </li>
        </ul>

      </div>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div
          class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">Venco_Fashion</h2>
          <p data-aos="fade-up" data-aos-delay="100" class="text-center">
            Sed autem laudantium dolores. Voluptatem itaque ea consequatur
            eveniet. Eum quas beatae cumque eum quaerat.
          </p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="#about" class="btn-book-a-table bi bi-eye"> Voir plus</a>

          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="assets/img/menu/b1.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>A propos de nous</h2>
          <p>Apprendre plus sur <span>Venco_Shop</span></p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-7 position-relative about-img" style="background-image: url(assets/img/about.jpg) ;"
            data-aos="fade-up" data-aos-delay="150">
            <div class="call-us position-absolute">
              <h4>Prendre rendez-vous</h4>
              <p>+1 5589 55488 55</p>
            </div>
          </div>
          <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore
                magna aliqua.
              </p>
              <ul>
                <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                  irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla
                  pariatur.</li>
              </ul>
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
              </p>

              <div class="position-relative mt-4">
                <img src="assets/img/about-2.jpg" class="img-fluid" alt="">
                <a href="#" class="glightbox play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Menu Section ======= -->
    <section id="services" class="menu shadow">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Nos Produits </h2>
          <p>Voir <span>les Produits à la mode</span></p>
        </div>

        <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-starters">
              <h4>Baskets</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-breakfast">
              <h4>Pantalons</h4>
            </a><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-lunch">
              <h4>Chemises</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-dinner">
              <h4>Pardessu</h4>
            </a>
          </li><!-- End tab nav item -->

        </ul>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

          <div class="tab-pane fade active show" id="menu-starters">
            <div class="tab-header text-center">
              <p>Produits</p>
              <h3>Baskets</h3>
            </div>
            <div class="row gy-5">
              <div class="col-lg-4 menu-item">
                <a href="assets/img/baskets.png" class="glightbox"><img src="assets/img/baskets.png"
                    class="menu-img img-fluid" alt=""></a>
                <h4>J_one</h4>
                <p class="ingredients">
                  Size: 36, 37, 38, 39, 40
                </p>
                <p class="price">
                  $5.95
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/baskets.png" class="glightbox"><img src="assets/img/baskets.png"
                    class="menu-img img-fluid" alt=""></a>
                <h4>J_one</h4>
                <p class="ingredients">
                  Size: 36, 37, 38, 39, 40
                </p>
                <p class="price">
                  $5.95
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/baskets.png" class="glightbox"><img src="assets/img/baskets.png"
                    class="menu-img img-fluid" alt=""></a>
                <h4>J_one</h4>
                <p class="ingredients">
                  Size: 36, 37, 38, 39, 40
                </p>
                <p class="price">
                  $5.95
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/baskets.png" class="glightbox"><img src="assets/img/baskets.png"
                    class="menu-img img-fluid" alt=""></a>
                <h4>J_one</h4>
                <p class="ingredients">
                  Size: 36, 37, 38, 39, 40
                </p>
                <p class="price">
                  $5.95
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/baskets.png" class="glightbox"><img src="assets/img/baskets.png"
                    class="menu-img img-fluid" alt=""></a>
                <h4>J_one</h4>
                <p class="ingredients">
                  Size: 36, 37, 38, 39, 40
                </p>
                <p class="price">
                  $5.95
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/baskets.png" class="glightbox"><img src="assets/img/baskets.png"
                    class="menu-img img-fluid" alt=""></a>
                <h4>J_one</h4>
                <p class="ingredients">
                  Size: 36, 37, 38, 39, 40
                </p>
                <p class="price">
                  $5.95
                </p>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Starter Menu Content -->

          <div class="tab-pane fade" id="menu-breakfast">
            <div class="tab-header text-center">
              <p>Produits</p>
              <h3>Pantalons</h3>
            </div>
            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="assets/img/pantalonDamme.jpg" class="glightbox"><img src="assets/img/pantalonDamme.jpg"
                    class="menu-img img-fluid" alt=""></a>
                <h4>Geans damme</h4>
                <p class="ingredients">
                  Size: 36, 37, 38, 39, 40
                </p>
                <p class="price">
                  $5.95
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/pantalontrain.jpg" class="glightbox"><img src="assets/img/pantalontrain.jpg"
                    class="menu-img img-fluid" alt=""></a>
                <h4>Poche Bombées</h4>
                <p class="ingredients">
                  Size: 36, 37, 38, 39, 40
                </p>
                <p class="price">
                  $14.95
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/ShortM.jpg" class="glightbox"><img src="assets/img/ShortM.jpg"
                    class="menu-img img-fluid" alt=""></a>
                <h4>Short Mixtes</h4>
                <p class="ingredients">
                  Size: 36, 37, 38, 39, 40
                </p>
                <p class="price">
                  $10.00
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/pantalonHOm.jpg" class="glightbox"><img src="assets/img/pantalonHOm.jpg"
                    class="menu-img img-fluid" alt=""></a>
                <h4>Geans Homme</h4>
                <p class="ingredients">
                  Size: 36, 37, 38, 39, 40
                </p>
                <p class="price">
                  $12.95
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/Short.jpg" class="glightbox"><img src="assets/img/Short.jpg"
                    class="menu-img img-fluid" alt=""></a>
                <h4>Short Damme</h4>
                <p class="ingredients">
                  Size: 36, 37, 38, 39, 40
                </p>
                <p class="price">
                  $12.95
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/geansDam.jpg" class="glightbox"><img src="assets/img/geansDam.jpg"
                    class="menu-img img-fluid" alt=""></a>
                <h4>Geans Damme</h4>
                <p class="ingredients">
                  Size: 36, 37, 38, 39, 40
                </p>
                <p class="price">
                  $9.95
                </p>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Breakfast Menu Content -->

          <div class="tab-pane fade" id="menu-lunch">
            <div class="tab-header text-center">
              <p>Produits</p>
              <h3>Chemises</h3>
            </div>
            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="assets/img/chemiseHOM.jpg" class="glightbox"><img src="assets/img/chemiseHOM.jpg"
                    class="menu-img img-fluid" alt=""></a>
                <h4>Chemise Homme</h4>
                <p class="ingredients">
                  size: M, X, XL, XX, XXX
                </p>
                <p class="price">
                  $5.95
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/Tshirt.jpg" class="glightbox"><img src="assets/img/Tshirt.jpg"
                    class="menu-img img-fluid" alt=""></a>
                <h4>T-shirt</h4>
                <p class="ingredients">
                  size: M, X, XL, XX, XXX
                </p>
                <p class="price">
                  $14.95
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/chemiseHOM.jpg" class="glightbox"><img src="assets/img/chemiseHOM.jpg"
                    class="menu-img img-fluid" alt=""></a>
                <h4>Chemise Homme</h4>
                <p class="ingredients">
                  size: M, X, XL, XX, XXX
                </p>
                <p class="price">
                  $5.95
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/Tshirt.jpg" class="glightbox"><img src="assets/img/Tshirt.jpg"
                    class="menu-img img-fluid" alt=""></a>
                <h4>T-shirt</h4>
                <p class="ingredients">
                  size: M, X, XL, XX, XXX
                </p>
                <p class="price">
                  $14.95
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/chemiseHOM.jpg" class="glightbox"><img src="assets/img/chemiseHOM.jpg"
                    class="menu-img img-fluid" alt=""></a>
                <h4>Chemise Homme</h4>
                <p class="ingredients">
                  size: M, X, XL, XX, XXX
                </p>
                <p class="price">
                  $5.95
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/Tshirt.jpg" class="glightbox"><img src="assets/img/Tshirt.jpg"
                    class="menu-img img-fluid" alt=""></a>
                <h4>T-shirt</h4>
                <p class="ingredients">
                  size: M, X, XL, XX, XXX
                </p>
                <p class="price">
                  $14.95
                </p>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Lunch Menu Content -->

          <div class="tab-pane fade" id="menu-dinner">
            <div class="tab-header text-center">
              <p>Produits</p>
              <h3>Vestes</h3>
            </div>
            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="assets/img/cuirHom.jpg" class="glightbox"><img src="assets/img/cuirHom.jpg"
                    class="menu-img img-fluid" alt=""></a>
                <h4>Veste en cuir</h4>
                <p class="ingredients">
                size: M, X, XL, XX, XXX
                </p>
                <p class="price">
                  $5.95
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/pulEnfant.jpg" class="glightbox"><img src="assets/img/pulEnfant.jpg"
                    class="menu-img img-fluid" alt=""></a>
                <h4>Pull Enfant</h4>
                <p class="ingredients">
                  size: M, X, XL, XX, XXX
                </p>
                <p class="price">
                  $14.95
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/vesteCuirDamm.jpg" class="glightbox"><img src="assets/img/vesteCuirDamm.jpg"
                    class="menu-img img-fluid" alt=""></a>
                <h4>Veste damme en Cuir</h4>
                <p class="ingredients">
                size: M, X, XL, XX, XXX
                </p>
                <p class="price">
                  $8.95
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/pullMiste.jpg" class="glightbox"><img src="assets/img/pullMiste.jpg"
                    class="menu-img img-fluid" alt=""></a>
                <h4>Pull Mixte</h4>
                <p class="ingredients">
                size: M, X, XL, XX, XXX
                </p>
                <p class="price">
                  $12.95
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/cuirHom.jpg" class="glightbox"><img src="assets/img/cuirHom.jpg"
                    class="menu-img img-fluid" alt=""></a>
                <h4>Veste en cuir</h4>
                <p class="ingredients">
                size: M, X, XL, XX, XXX
                </p>
                <p class="price">
                  $5.95
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/pulEnfant.jpg" class="glightbox"><img src="assets/img/pulEnfant.jpg"
                    class="menu-img img-fluid" alt=""></a>
                <h4>Pull Enfant</h4>
                <p class="ingredients">
                  size: M, X, XL, XX, XXX
                </p>
                <p class="price">
                  $14.95
                </p>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Dinner Menu Content -->

        </div>

      </div>
    </section><!-- End Menu Section -->

    <!-- ======= Gallery Section ======= -->
    <!--<section id="gallery" class="gallery section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>gallery</h2>
          <p>Check <span>Our Gallery</span></p>
        </div>

        <div class="gallery-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                href="assets/img/gallery/gallery-1.jpg"><img src="assets/img/gallery/gallery-1.jpg" class="img-fluid"
                  alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                href="assets/img/gallery/gallery-2.jpg"><img src="assets/img/gallery/gallery-2.jpg" class="img-fluid"
                  alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                href="assets/img/gallery/gallery-3.jpg"><img src="assets/img/gallery/gallery-3.jpg" class="img-fluid"
                  alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                href="assets/img/gallery/gallery-4.jpg"><img src="assets/img/gallery/gallery-4.jpg" class="img-fluid"
                  alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                href="assets/img/gallery/gallery-5.jpg"><img src="assets/img/gallery/gallery-5.jpg" class="img-fluid"
                  alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                href="assets/img/gallery/gallery-6.jpg"><img src="assets/img/gallery/gallery-6.jpg" class="img-fluid"
                  alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                href="assets/img/gallery/gallery-7.jpg"><img src="assets/img/gallery/gallery-7.jpg" class="img-fluid"
                  alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                href="assets/img/gallery/gallery-8.jpg"><img src="assets/img/gallery/gallery-8.jpg" class="img-fluid"
                  alt=""></a></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section> End Gallery Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Contact</h2>
          <p>Need Help? <span>Contact Us</span></p>
        </div>

        <div class="mb-3">
          <iframe style="border:0; width: 100%; height: 350px;"
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
            frameborder="0" allowfullscreen></iframe>
        </div><!-- End Google Maps -->

        <div class="row gy-4">

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-map flex-shrink-0"></i>
              <div>
                <h3>Our Address</h3>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>contact@example.com</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>+1 5589 55488 55</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-share flex-shrink-0"></i>
              <div>
                <h3>Horaire</h3>
                <div><strong>Mon-Sat:</strong> 08AM - 18PM;
                  <strong>Sunday:</strong> Closed
                </div>
              </div>
            </div>
          </div><!-- End Info Item -->

        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h4>Address</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022 - US<br>
            </p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Reservations</h4>
            <p>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Horaire</h4>
            <p>
              <strong>Mon-Sat: 08AM</strong> - 18PM<br>
              Sunday: Closed
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Venco_Fashion</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        
        Designed by <a href="#">Lad_77</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/assets1/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/assets1/vendor/aos/aos.js"></script>
  <script src="assets/assets1/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/assets1/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/assets1/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/assets1/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/assets1/js/main.js"></script>

</body>

</html>