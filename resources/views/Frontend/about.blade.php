<!DOCTYPE html>

<html lang="en">



<head>

  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>SK Decors</title>

  <link rel="icon" type="image/png" href="assets/img/brand-elements/favicon.png">

  <link rel="preconnect" href="https://fonts.googleapis.com">

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"

    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="

    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link

    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Space+Grotesk:wght@300..700&display=swap"

    rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>



<body>

  <!-- header & banner -->

  <!-- header -->

  <header>

  @include('layouts.new_header')


  </header>

  <!-- hero -->

  <!-- Static Banner -->

  <section class="contact-banner h-b">

    <div class="container h-100 d-flex flex-column justify-content-center align-items-center text-center">

      <h1 class="banner-text">About Us</h1>

      <nav class="breadcrumb-nav">

        <a href="index.html">Home</a> <span>&raquo;</span> <span>About Us</span>

      </nav>

    </div>

  </section>



  <!-- about us -->

  <section class="py-5">

    <div class="container">

      <div class="row align-items-center gy-5">



        <!-- Image Column -->

        <div class="col-md-6 position-relative">

          <img src="assets/img/b1.jpeg" class="img-fluid rounded-4" alt="Team">

          <div class="badge-box">

            <i class="fa-solid fa-award fa-lg"></i>

            <div>

              <div class="fw-semibold">Customer Trusted</div>

              <div class="small">Company</div>

            </div>

          </div>

        </div>



        <!-- Text Column -->

        <div class="col-md-6">

          <p class="brwn fw-semibold">Since 2010</p>

          <h2 class="fw-bold text-dark mb-3">Crafted for Comfort,<br> Elegance, and Function</h2>

          <p class="text-muted mb-4">What began in 2010 as a curtain-focused venture has now evolved into a

            comprehensive window and flooring solutions brand. From stylish curtains and functional blinds to protective

            mosquito nets and elegant grass flooring, SK Decors transforms every space with a perfect blend of utility

            and aesthetics. We bring tailored décor solutions that add comfort, privacy, and a touch of luxury to your

            home or workspace.</p>



          <div class="row g-3">

            <div class="col-6 col-lg-6">

              <button class="btn-service w-100">

                <i class="fas fa-briefcase"></i>

                <span>Commercial</span>

              </button>

            </div>

            <div class="col-6 col-lg-6">

              <button class="btn-service w-100">

                <i class="fas fa-industry"></i>

                <span>Industrial</span>

              </button>

            </div>

            <div class="col-6 col-lg-6">

              <button class="btn-service w-100">

                <i class="fas fa-home"></i>

                <span>Residential</span>

              </button>

            </div>

            <div class="col-6 col-lg-6">

              <button class="btn-service w-100">

                <i class="fas fa-building"></i>

                <span>Corporate</span>

              </button>

            </div>

          </div>



        </div>

      </div>

  </section>



  <!-- counting -->

  <section class="stats-section">

    <div class="stat-box">

      <i class="fa-solid fa-user-tie stat-icon"></i>

      <h4>Happy Client Review</h4>

      <div><span class="stat-number" data-target="235">0</span><span class="suffix">+</span></div>

    </div>

    <div class="stat-box">

      <i class="fas fa-user-gear stat-icon"></i>

      <h4>Work Departments</h4>

      <div><span class="stat-number" data-target="420">0</span><span class="suffix">+</span></div>

    </div>

    <div class="stat-box">

      <i class="fas fa-comments stat-icon"></i>

      <h4>Our Happy Client</h4>

      <div><span class="stat-number" data-target="30">0</span><span class="suffix">K</span></div>

    </div>

    <div class="stat-box">

      <i class="fas fa-users stat-icon"></i>

      <h4>Staff Members</h4>

      <div><span class="stat-number" data-target="305">0</span><span class="suffix">+</span></div>

    </div>

  </section>



  <!-- why choose us -->

  <section class="why-choose-section">

    <div class="container">

      <div class="why-header">

        <div class="why-header-left">

          <p><i class="fas fa-circle-dot"></i> SINCE 2010</p>

          <h2>Why choose us</h2>

        </div>

        <div class="why-header-right">

          <p>There are many variations of passages of form, by injected humour, or randomised words which don’t look

            even.</p>

          <button class="book-btn">

            <a href="contact.html">Book Consult <i class="fas fa-arrow-up-right-from-square"></i></a>

          </button>

        </div>

      </div>



      <div class="features-container">

        <!-- Left Column -->

        <div class="feature-column">

          <div class="feature-item">

            <div class="feature-icon"><i class="fas fa-shield-heart"></i></div>

            <div class="feature-text">

              <h4>5 Years Warranty</h4>

              <p>Our products come with a trusted five-year warranty for lasting quality.</p>

            </div>

          </div>

          <div class="feature-item">

            <div class="feature-icon"><i class="fas fa-microchip"></i></div>

            <div class="feature-text">

              <h4>Latest technologies</h4>

              <p>We use modern fittings and smart solutions in every installation.</p>

            </div>

          </div>

          <div class="feature-item">

            <div class="feature-icon"><i class="fas fa-crop-simple"></i></div>

            <div class="feature-text">

              <h4>High-Quality Designs</h4>

              <p>We deliver stylish, durable designs that enhance every space.</p>

            </div>

          </div>

        </div>



        <!-- Center Image -->

        <div class="why-image">

          <img src="assets/img/brand-elements/skdecors-logo.png" alt="Interior" />

        </div>



        <!-- Right Column -->

        <div class="feature-column">

          <div class="feature-item">

            <div class="feature-icon"><i class="fas fa-scale-balanced"></i></div>

            <div class="feature-text">

              <h4>Transparent Pricing</h4>

              <p>We provide honest and upfront pricing with no hidden charges.</p>

            </div>

          </div>

          <div class="feature-item">

            <div class="feature-icon"><i class="fas fa-users"></i></div>

            <div class="feature-text">

              <h4>Professional Team</h4>

              <p>Our skilled experts ensure smooth and reliable project execution.</p>

            </div>

          </div>

          <div class="feature-item">

            <div class="feature-icon"><i class="fas fa-trophy"></i></div>

            <div class="feature-text">

              <h4>Award Winning</h4>

              <p>We’re recognized for excellence in window and interior solutions.</p>

            </div>

          </div>

        </div>

      </div>

    </div>

  </section>





  <!-- footer -->

  <footer>

    <div class="container">

      <div class="row">

        <div class="col-md-3">

          <div class="ft-cl-1">

            <img src="assets/img/brand-elements/skdecors-white.png" alt="">

            <p>Started in the year 2010 into curtains gradually we

              diversified ourselves into various services of home

              décor items from Mosquito nets to luxury end home

              decor products.

            </p>

          </div>

        </div>

        <div class="col-md-3">

          <div class="ft-cl-2">

            <h4 class="sub-title">Our Company</h4>

            <ul>

              <li><a href="about.html">About</a></li>

                            <li><a href="javascript:void(0)">Products</a></li>

                            <li><a href="portfolio.html">Portfolio</a></li>

                            <li><a href="contact.html">Contact</a></li>

            </ul>

          </div>

        </div>

        <div class="col-md-3">

          <div class="ft-cl-3">

            <h4 class="sub-title">Products</h4>

            <ul>

              <li><a href="curtains.html">Curtains</a></li>

                            <li><a href="mosquito-net.html">Mosquito Net</a></li>

                            <li><a href="contact.html">Cloth Hanger</a></li>

                            <li><a href="flooring.html">Flooring</a></li>

                            <li><a href="wallpaper.html">Wallpaper</a></li>

                            <li><a href="carpets.html">Carpets</a></li>

                            <li><a href="artificial-grass.html">Artificial Grass</a></li>

                            <li><a href="wallpaper.html">Window Blinds</a></li>

            </ul>

          </div>

        </div>

        <div class="col-md-3">

          <div class="ft-cl-4">

            <h4 class="sub-title">Get In Touch</h4>

            <ul class="contact-info">

              <li><i class="fa-solid fa-location-dot"></i> No. 164, 4th Street, K. K. Pudur Saibaba Colony, Near S Bend,

                K K Pudur, Coimbatore- 641038</li>

              <li><i class="fa-solid fa-envelope"></i> <a

                  href="mailto:rajkumar84sk@gmail.com">rajkumar84sk@gmail.com</a></li>

              <li><i class="fa-solid fa-phone"></i> <a href="tel:9790104588">97901 04588</a></li>

            </ul>

            <!-- Social Media Icons -->

            <div class="social-icons">

              <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>

              <a href="#"><i class="fa-brands fa-facebook-f"></i></a>

              <a href="#"><i class="fa-brands fa-yelp"></i></a>

              <a href="#"><i class="fa-brands fa-houzz"></i></a>

            </div>

          </div>

        </div>

      </div>

    </div>

    <!-- Footer Bottom -->

    <div class="footer-bottom">

      <div class="container">

        <p>&copy; 2025 <strong>SK Decors</strong>. All Rights Reserved. <span>Designed by <a

              href="https://webbitech.com/" target="_blank">Webbitech</a></span>

        </p>

      </div>

    </div>

  </footer>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <script src="assets/js/script.js"></script>

</body>



</html>