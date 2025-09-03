<!DOCTYPE html>

<html lang="en">



<head>

  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>SK Decors</title>

  <link rel="icon" type="image/png" href="assets/img/brand-elements/favicon.png">

  <link rel="stylesheet" href="assets/css/style.css">

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

  <header>
    @include('layouts.new_header')
  </header>

  <!-- hero -->

  <!-- Static Banner -->

  <section class="contact-banner h-b">

    <div class="container h-100 d-flex flex-column justify-content-center align-items-center text-center">

      <h1 class="banner-text">Portfolio</h1>

      <nav class="breadcrumb-nav">

        <a href="index.html">Home</a> <span>&raquo;</span> <span>Portfolio</span>

      </nav>

    </div>

  </section>

  <section class="gallery-section-2 sec-mar-t py-5">

    <div class="container">

      <div class="row g-4">

        <!-- Gallery Item -->

        <div class="col-md-4 col-sm-6">

          <div class="gallery-item position-relative">

            <a href="curtains-portfolio.html">

              <img src="assets/img/product/curtains/1.jpeg" class="img-fluid rounded shadow gallery-img"

                alt="Curtain 1">

            </a>

            <a href="curtains-portfolio.html"

              class="custom-btn position-absolute bottom-0 start-0 mb-3 ms-3">Explore</a>

          </div>

          <h5 class="text-center text-white mt-2">Curtains</h5>

        </div>



        <div class="col-md-4 col-sm-6">

          <div class="gallery-item position-relative">

            <a href="blinds-portfolio.html">

              <img src="assets/img/product/blinds/5.jpeg" class="img-fluid rounded shadow gallery-img"

                alt="Curtain 2">

            </a>

            <a href="blinds-portfolio.html" class="custom-btn position-absolute bottom-0 start-0 mb-3 ms-3">Explore</a>

          </div>

          <h5 class="text-center text-white mt-2">Window Blinds</h5>

        </div>



        <div class="col-md-4 col-sm-6">

          <div class="gallery-item position-relative">

            <a href="mosquito-net-portfolio.html">

              <img src="assets/img/product/net/25.jpeg" class="img-fluid rounded shadow gallery-img"

                alt="Curtain 3">

            </a>

            <a href="mosquito-net-portfolio.html" class="custom-btn position-absolute bottom-0 start-0 mb-3 ms-3">Explore</a>

          </div>

          <h5 class="text-center text-white mt-2">Mosquito Net</h5>

        </div>



        <div class="col-md-4 col-sm-6">

          <div class="gallery-item position-relative">

            <a href="artificial-grass-portfolio.html">

              <img src="assets/img/product/grass/1.jpeg" class="img-fluid rounded shadow gallery-img"

                alt="Curtain 3">

            </a>

            <a href="artificial-grass-portfolio.html" class="custom-btn position-absolute bottom-0 start-0 mb-3 ms-3">Explore</a>

          </div>

          <h5 class="text-center text-white mt-2">Artificial Grass</h5>

        </div>



        <div class="col-md-4 col-sm-6">

          <div class="gallery-item position-relative">

            <a href="carpets-portfolio.html">

              <img src="assets/img/product/curtains/3.webp" class="img-fluid rounded shadow gallery-img"

                alt="Curtain 3">

            </a>

            <a href="carpets-portfolio.html" class="custom-btn position-absolute bottom-0 start-0 mb-3 ms-3">Explore</a>

          </div>

          <h5 class="text-center text-white mt-2">Carpets</h5>

        </div>



        <div class="col-md-4 col-sm-6">

          <div class="gallery-item position-relative">

            <a href="cloths-hanger-portfolio.html">

              <img src="assets/img/product/curtains/3.webp" class="img-fluid rounded shadow gallery-img"

                alt="Curtain 3">

            </a>

            <a href="cloths-hanger-portfolio.html" class="custom-btn position-absolute bottom-0 start-0 mb-3 ms-3">Explore</a>

          </div>

          <h5 class="text-center text-white mt-2">Cloth Hangers</h5>

        </div>



        <div class="col-md-4 col-sm-6">

          <div class="gallery-item position-relative">

            <a href="flooring-portfolio.html">

              <img src="assets/img/product/curtains/3.webp" class="img-fluid rounded shadow gallery-img"

                alt="Curtain 3">

            </a>

            <a href="flooring-portfolio.html" class="custom-btn position-absolute bottom-0 start-0 mb-3 ms-3">Explore</a>

          </div>

          <h5 class="text-center text-white mt-2">Flooring</h5>

        </div>



        <div class="col-md-4 col-sm-6">

          <div class="gallery-item position-relative">

            <a href="wallpaper-portfolio.html">

              <img src="assets/img/product/curtains/3.webp" class="img-fluid rounded shadow gallery-img"

                alt="Curtain 3">

            </a>

            <a href="wallpaper-portfolio.html" class="custom-btn position-absolute bottom-0 start-0 mb-3 ms-3">Explore</a>

          </div>

          <h5 class="text-center text-white mt-2">Wallpapers</h5>

        </div>

      </div>

    </div>

  </section>



  <!-- footer -->

  <footer>
    @include('layouts.footer');
  </footer>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <script src="assets/js/script.js"></script>

</body>



</html>