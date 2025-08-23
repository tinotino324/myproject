<!DOCTYPE html>

<html lang="en">



<head>

  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>SK Decors</title>

  <link rel="icon" type="image/png" href="assets/img/brand-elements/favicon.png">


  <link rel="preconnect" href="https://fonts.googleapis.com">

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <link rel="stylesheet"

    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/11.0.2/css/bootstrap-slider.min.css"

    integrity="sha512-3q8fi8M0VS+X/3n64Ndpp6Bit7oXSiyCnzmlx6IDBLGlY5euFySyJ46RUlqIVs0DPCGOypqP8IRk/EyPvU28mQ=="

    crossorigin="anonymous" referrerpolicy="no-referrer" />

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

  <section id="hero-slider h-b">

    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">

      <div class="carousel-inner">

        <!-- Slide 1 -->

        <div class="carousel-item active">

          <img src="assets/img/b1.jpeg" class="d-block w-100" alt="Slide 1">

        </div>

        <!-- Slide 2 -->

        <div class="carousel-item">

          <img src="assets/img/b2.jpeg" class="d-block w-100" alt="Slide 2">

        </div>

        <!-- Slide 3 -->

        <div class="carousel-item">

          <img src="assets/img/b3.jpeg" class="d-block w-100" alt="Slide 3">

        </div>

      </div>



      <!-- Next/Prev Buttons -->

      <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">

        <span class="carousel-control-prev-icon"></span>

      </button>

      <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">

        <span class="carousel-control-next-icon"></span>

      </button>

    </div>

  </section>



  <!-- about us -->

  <section class="py-5 about">

    <div class="container">

      <div class="row align-items-center gy-5">



        <!-- Image Column -->

        <div class="col-md-6 position-relative">

          <img src="assets/img/product/curtains/9.webp" class="img-fluid rounded-4" alt="Team">

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

                <i class="fas fa-home"></i>

                <span>Residential</span>

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







  <!-- Product -->

  <section class="services-section">

    <div class="background-title">PRODUCTS</div>



    <div class="services-header">

      <p><i class="fas fa-circle-dot"></i>WHAT WE DO</p>

      <h2>Our Products</h2>

    </div>



    <div class="row pad-20">

      <div class="col-md-4">

        <div class="service-card">

          <img src="assets/img/product/curtains/1.jpeg" alt="Web Design">

          <div class="card-overlay">

            <h3>Curtains</h3>

            <a href="curtains.html" class="btn-1">Explore</a>

          </div>

        </div>

      </div>

      <div class="col-md-4">

        <div class="service-card">

          <img src="assets/img/product/blinds/30.jpeg" alt="Web Design">

          <div class="card-overlay">

            <h3>Window Blinds</h3>

            <a href="blinds.html" class="btn-1">Explore</a>

          </div>

        </div>

      </div>

      <div class="col-md-4">

        <div class="service-card">

          <img src="assets/img/product/net/13.jpeg" alt="Web Design">

          <div class="card-overlay">

            <h3>Mosquito Net</h3>

            <a href="mosquito-net.html" class="btn-1">Explore</a>

          </div>

        </div>

      </div>

    </div>

    <div class="emergency-call"><a href="javascript:void(0)">Explore All Products</a></div>

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



  <!-- Services -->

  <section class="product-accordion-section py-5">

    <div class="container">

      <div class="row g-4">

        <!-- Left Pills -->

        <div class="col-lg-4 col-md-12">

          <div class="custom-list-group nav flex-column" id="serviceTabs" role="tablist">

            <button class="custom-list-item active d-flex justify-content-between align-items-center"

              data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab">

              <span>Fast Installation</span>

              <span class="icon-circle"><i class="fas fa-arrow-up-right-from-square"></i></span>

            </button>

            <button class="custom-list-item d-flex justify-content-between align-items-center" data-bs-toggle="tab"

              data-bs-target="#tab2" type="button" role="tab">

              <span>Free Bulk Installation</span>

              <span class="icon-circle"><i class="fas fa-arrow-up-right-from-square"></i></span>

            </button>

            <button class="custom-list-item d-flex justify-content-between align-items-center" data-bs-toggle="tab"

              data-bs-target="#tab3" type="button" role="tab">

              <span>Pan‑India Delivery</span>

              <span class="icon-circle"><i class="fas fa-arrow-up-right-from-square"></i></span>

            </button>

            <button class="custom-list-item d-flex justify-content-between align-items-center" data-bs-toggle="tab"

              data-bs-target="#tab4" type="button" role="tab">

              <span>Wide Product Range</span>

              <span class="icon-circle"><i class="fas fa-arrow-up-right-from-square"></i></span>

            </button>

            <button class="custom-list-item d-flex justify-content-between align-items-center" data-bs-toggle="tab"

              data-bs-target="#tab5" type="button" role="tab">

              <span>Home Décor Solutions</span>

              <span class="icon-circle"><i class="fas fa-arrow-up-right-from-square"></i></span>

            </button>

          </div>

        </div>



        <!-- Right Column (Image + Text side by side) -->

        <div class="col-lg-8 col-md-12">

          <div class="tab-content" id="serviceTabsContent">



            <!-- Tab 1 -->

            <div class="tab-pane fade show active" id="tab1" role="tabpanel">

              <div class="d-flex flex-wrap align-items-center">

                <div class="flex-shrink-0 ac-img me-3 mb-3 mb-md-0" style="flex: 0 0 80%;">

                  <img src="assets/img/service-1.jpg" class="img-fluid rounded shadow" alt="Fast Installation">

                </div>

                <div class="flex-grow-1">

                  <h4>Fast Installation</h4>

                  <p>Quick & Hassle‑Free Setup. Our expert team ensures your curtains, blinds, nets, and flooring are

                    installed quickly and professionally — with zero hassle.</p>

                </div>

              </div>

            </div>



            <!-- Tab 2 -->

            <div class="tab-pane fade" id="tab2" role="tabpanel">

              <div class="d-flex flex-wrap align-items-center">

                <div class="flex-shrink-0 ac-img me-3 mb-3 mb-md-0" style="flex: 0 0 80%;">

                  <img src="assets/img/service-2.jpg" class="img-fluid rounded shadow" alt="Free Bulk Installation">

                </div>

                <div class="flex-grow-1">

                  <h4>Free Bulk Installation</h4>

                  <p>Save More on Large Orders. Placing a bulk order? Enjoy complimentary installation, making your

                    large décor projects smooth and budget‑friendly.</p>

                </div>

              </div>

            </div>



            <!-- Tab 3 -->

            <div class="tab-pane fade" id="tab3" role="tabpanel">

              <div class="d-flex flex-wrap align-items-center">

                <div class="flex-shrink-0 ac-img me-3 mb-3 mb-md-0" style="flex: 0 0 80%;">

                  <img src="assets/img/service-3.jpg" class="img-fluid rounded shadow" alt="Free Pan‑India Delivery">

                </div>

                <div class="flex-grow-1">

                  <h4>Pan‑India Delivery</h4>

                  <p>Delivered Anywhere, Anytime. No matter where you are in India, we deliver your products on time and

                    at no extra cost.</p>

                </div>

              </div>

            </div>



            <!-- Tab 4 -->

            <div class="tab-pane fade" id="tab4" role="tabpanel">

              <div class="d-flex flex-wrap align-items-center">

                <div class="flex-shrink-0 ac-img me-3 mb-3 mb-md-0" style="flex: 0 0 80%;">

                  <img src="assets/img/service-4.jpg" class="img-fluid rounded shadow" alt="Wide Product Range">

                </div>

                <div class="flex-grow-1">

                  <h4>Wide Product Range</h4>

                  <p>All You Need for a Beautiful Home. From curtains, blinds, mosquito nets, and flooring to elegant

                    home décor items — everything you need in one place.</p>

                </div>

              </div>

            </div>



            <!-- Tab 5 -->

            <div class="tab-pane fade" id="tab5" role="tabpanel">

              <div class="d-flex flex-wrap align-items-center">

                <div class="flex-shrink-0 ac-img me-3 mb-3 mb-md-0" style="flex: 0 0 80%;">

                  <img src="assets/img/service-5.jpg" class="img-fluid rounded shadow" alt="Home Décor Solutions">

                </div>

                <div class="flex-grow-1">

                  <h4>Home Décor Solutions</h4>

                  <p>Complete Style & Comfort. We don’t just sell products — we create tailored décor solutions that

                    bring beauty, functionality, and comfort to your home.</p>

                </div>

              </div>

            </div>



          </div>

        </div>

      </div>

    </div>

  </section>



  <!-- Our Latest Project -->

  <section class="project-section container">

    <div class="section-header">

      <p><i class="fas fa-circle-dot"></i> PROCESS</p>

      <h2>Our Latest Project</h2>

    </div>



    <!-- First Row -->

    <div class="carousel-container">

      <div class="carousel-track d-flex">

        <div class="carousel-item-custom"><img src="assets/img/product/curtains/6.jpeg" alt="1"></div>

        <div class="carousel-item-custom"><img src="assets/img/product/blinds/4.jpeg" alt="2"></div>

        <div class="carousel-item-custom"><img src="assets/img/product/curtains/7.jpeg" alt="3"></div>

        <div class="carousel-item-custom"><img src="assets/img/product/net/2.jpeg" alt="4"></div>

        <div class="carousel-item-custom"><img src="assets/img/product/blinds/6.jpeg" alt="5"></div>

        <div class="carousel-item-custom"><img src="assets/img/product/curtains/5.webp" alt="6"></div>



        <!-- Duplicates -->

        <div class="carousel-item-custom"><img src="assets/img/product/curtains/6.jpeg" alt="1"></div>

        <div class="carousel-item-custom"><img src="assets/img/product/blinds/4.jpeg" alt="2"></div>

        <div class="carousel-item-custom"><img src="assets/img/product/curtains/7.jpeg" alt="3"></div>

        <div class="carousel-item-custom"><img src="assets/img/product/net/2.jpeg" alt="4"></div>

        <div class="carousel-item-custom"><img src="assets/img/product/blinds/6.jpeg" alt="5"></div>

        <div class="carousel-item-custom"><img src="assets/img/product/curtains/5.jpeg" alt="6"></div>

      </div>

    </div>



    <!-- Second Row -->

    <div class="carousel-container ">

      <div class="carousel-track reverse d-flex">

        <div class="carousel-item-custom"><img src="assets/img/product/curtains/9.webp" alt="A"></div>

        <div class="carousel-item-custom"><img src="assets/img/product/blinds/8.jpeg" alt="B"></div>

        <div class="carousel-item-custom"><img src="assets/img/product/net/5.jpeg" alt="C"></div>

        <div class="carousel-item-custom"><img src="assets/img/product/curtains/10.jpeg" alt="D"></div>

        <div class="carousel-item-custom"><img src="assets/img/product/blinds/10.jpeg" alt="E"></div>

        <div class="carousel-item-custom"><img src="assets/img/product/net/1.jpeg" alt="F"></div>



        <!-- Duplicates -->

        <div class="carousel-item-custom"><img src="assets/img/product/curtains/9.webp" alt="A"></div>

        <div class="carousel-item-custom"><img src="assets/img/product/blinds/8.jpeg" alt="B"></div>

        <div class="carousel-item-custom"><img src="assets/img/product/net/5.jpeg" alt="C"></div>

        <div class="carousel-item-custom"><img src="assets/img/product/curtains/10.jpeg" alt="D"></div>

        <div class="carousel-item-custom"><img src="assets/img/product/blinds/10.jpeg" alt="E"></div>

        <div class="carousel-item-custom"><img src="assets/img/product/net/1.jpeg" alt="F"></div>

      </div>

    </div>

  </section>



  <!-- video section -->

  <section class="video-section">

    <div class="video-overlay"></div>

    <div class="video-content">

      <div class="emergency-call"><a href="contact.html">Talk With Our experts</a></div>

      <h1>Style and comfort with curtains, nets & blinds.</h1>

      <a href="#video-popup" class="play-btn">

        <i class="fas fa-play"></i>

      </a>

    </div>

  </section>



  <!-- CSS-Only Video Popup -->

  <div class="video-popup" id="video-popup">

    <div class="video-popup-content">

      <a href="#" class="close-popup">&times;</a>

      <iframe src="https://www.youtube.com/embed/xyz" frameborder="0" allow="autoplay; encrypted-media"

        allowfullscreen></iframe>

    </div>

  </div>





  <!-- blog -->

  <!-- <section class="blog-section py-5">

    <div class="container position-relative">



      <a href="#" class="view-all-btn">

        See All Blogs <i class="fa-solid fa-arrow-up-right"></i>

      </a>



      <div class="row g-4">

        <div class="col-lg-4">

          <p class="section-label">What we do</p>

          <h2 class="section-title">Latest posts & articles</h2>



          <div class="blog-item d-flex align-items-start gap-3 border-bottom pb-3 mb-3">

            <img src="assets/img/product/curtains/3.webp" alt="Blog 1" class="rounded-3"

              style="width:70px; height:70px; object-fit:cover;">

            <div class="blog-info">

              <span><i class="fa-regular fa-calendar"></i> May 09, 2024</span>

              <span><i class="fa-regular fa-user"></i> By Admin</span>

              <h4>Simple Décor Tips Using Curtains, Nets & Grass Flooring</h4>

            </div>

          </div>



          <div class="blog-item d-flex align-items-start gap-3 border-bottom pb-3 mb-3">

            <img src="assets/img/product/net/4.jpeg" alt="Blog 2" class="rounded-3"

              style="width:70px; height:70px; object-fit:cover;">

            <div class="blog-info">

              <span><i class="fa-regular fa-calendar"></i> May 09, 2024</span>

              <span><i class="fa-regular fa-user"></i> By Admin</span>

              <h4>Benefits of Installing Mosquito Nets at Home</h4>

            </div>

          </div>



          <div class="blog-item d-flex align-items-start gap-3 border-bottom pb-3">

            <img src="assets/img/product/blinds/5.jpeg" alt="Blog 3" class="rounded-3"

              style="width:70px; height:70px; object-fit:cover;">

            <div class="blog-info">

              <span><i class="fa-regular fa-calendar"></i> May 09, 2024</span>

              <span><i class="fa-regular fa-user"></i> By Admin</span>

              <h4>Why Curtains Matter More Than You Think</h4>

            </div>

          </div>

        </div>



        <div class="col-lg-8">

          <div class="featured-blog d-flex flex-column flex-md-row bg-light rounded-4 overflow-hidden h-100">

            <div class="featured-image w-100 w-md-40">

              <img src="assets/img/product/curtains/1.jpeg" alt="Featured Blog" class="img-fluid h-100"

                style="object-fit:cover;">

            </div>

            <div class="featured-content p-4">

              <span><i class="fa-regular fa-calendar"></i> May 09, 2024</span>

              <span><i class="fa-regular fa-user"></i> By Admin</span>

              <h3 class="mt-2">Choosing the Right Curtains for Every Room</h3>

              <p>From sheer to blackout, pick curtain styles that match your room's lighting, mood, and function

                perfectly.</p>

            </div>

          </div>

        </div>

      </div>

    </div>

  </section> -->



  <!-- review section -->

  <section class="container py-5">

    <div class="row mb-4">

      <div class="col-lg-6">

        <small class="text-uppercase fw-bold text-warning">CLIENT FEEDBACK</small>

        <h2 class="client-section-title">Hear from<br>clients.</h2>

      </div>

    </div>



    <!-- Navigation Buttons -->

    <div class="d-flex justify-content-end gap-2 mb-3">

      <button id="prevBtn" class="btn btn-outline-secondary rounded-circle">

        <i class="fas fa-chevron-left"></i>

      </button>

      <button id="nextBtn" class="btn btn-outline-secondary rounded-circle">

        <i class="fas fa-chevron-right"></i>

      </button>

    </div>



    <!-- Slider -->

    <div class="d-flex overflow-auto client-slider-wrapper" id="client-slider">

      <div class="client-card flex-shrink-0 me-3">

        <div class="client-stars mb-2">

          <i class="fas fa-star"></i><i class="fas fa-star"></i>

          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>

        </div>

        <p class="client-text mb-3">Work completion was good and neat and on time. Very satisfied.</p>

        <div class="d-flex align-items-center">

          <img src="assets/img/woman.png" class="client-avatar me-3" />

          <div>

            <div class="client-name">Lakshmi Priya</div>

            <div class="client-location text-muted">Coimbatore</div>

          </div>

        </div>

      </div>



      <div class="client-card flex-shrink-0 me-3">

        <div class="client-stars mb-2">

          <i class="fas fa-star"></i><i class="fas fa-star"></i>

          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>

        </div>

        <p class="client-text mb-3">Good service.maintaining the correct timing.rate also ok.</p>

        <div class="d-flex align-items-center">

          <img src="assets/img/boy.png" class="client-avatar me-3" />

          <div>

            <div class="client-name">Manikandan Venugopal</div>

            <div class="client-location text-muted">Coimbatore</div>

          </div>

        </div>

      </div>



      <div class="client-card flex-shrink-0 me-3">

        <div class="client-stars mb-2">

          <i class="fas fa-star"></i><i class="fas fa-star"></i>

          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>

        </div>

        <p class="client-text mb-3">Neat and pleasantable workl, will give a 💯👍</p>

        <div class="d-flex align-items-center">

          <img src="assets/img/woman.png" class="client-avatar me-3" />

          <div>

            <div class="client-name">SHANTHINI M</div>

            <div class="client-location text-muted"> Coimbatore</div>

          </div>

        </div>

      </div>



      <div class="client-card flex-shrink-0 me-3">

        <div class="client-stars mb-2">

          <i class="fas fa-star"></i><i class="fas fa-star"></i>

          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>

        </div>

        <p class="client-text mb-3">Awesome; overall very good customer service by Mr. Rajkumar</p>

        <div class="d-flex align-items-center">

          <img src="assets/img/boy.png" class="client-avatar me-3" />

          <div>

            <div class="client-name">Mark Arputharaj</div>

            <div class="client-location text-muted">Coimbatore</div>

          </div>

        </div>

      </div>



      <div class="client-card flex-shrink-0 me-3">

        <div class="client-stars mb-2">

          <i class="fas fa-star"></i><i class="fas fa-star"></i>

          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>

        </div>

        <p class="client-text mb-3">Communicated well and finished work on time</p>

        <div class="d-flex align-items-center">

          <img src="assets/img/woman.png" class="client-avatar me-3" />

          <div>

            <div class="client-name">Jayanthi Asokan</div>

            <div class="client-location text-muted">Coimbatore</div>

          </div>

        </div>

      </div>



      <div class="client-card flex-shrink-0 me-3">

        <div class="client-stars mb-2">

          <i class="fas fa-star"></i><i class="fas fa-star"></i>

          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>

        </div>

        <p class="client-text mb-3">Very good work. They beat the mosquito in a very good way</p>

        <div class="d-flex align-items-center">

          <img src="assets/img/boy.png" class="client-avatar me-3" />

          <div>

            <div class="client-name">Sathish Kumar</div>

            <div class="client-location text-muted">Coimbatore</div>

          </div>

        </div>

      </div>



      <div class="client-card flex-shrink-0 me-3">

        <div class="client-stars mb-2">

          <i class="fas fa-star"></i><i class="fas fa-star"></i>

          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>

        </div>

        <p class="client-text mb-3">No doubt about the quality and the lowest price in the market.</p>

        <div class="d-flex align-items-center">

          <img src="assets/img/boy.png" class="client-avatar me-3" />

          <div>

            <div class="client-name">Krishna S</div>

            <div class="client-location text-muted">Coimbatore</div>

          </div>

        </div>

      </div>



      <!-- Add more client-cards here -->

    </div>

  </section>

  <!-- partners -->

  <section class="logo-section py-5">

    <div class="container overflow-hidden">

      <div class="logo-carousel d-flex">

        <div class="logo-track d-flex align-items-center">

          <!-- Repeat logos as needed -->

          <img src="assets/img/partners/1.png" alt="Logo 1" class="logo-img" />

          <img src="assets/img/partners/2.png" alt="Logo 2" class="logo-img" />

          <img src="assets/img/partners/3.png" alt="Logo 3" class="logo-img" />

          <img src="assets/img/partners/4.png" alt="Logo 4" class="logo-img" />

          <img src="assets/img/partners/5.png" alt="Logo 5" class="logo-img" />

          <img src="assets/img/partners/6.png" alt="Logo 6" class="logo-img" />

          <!-- Duplicate logos to create seamless scroll -->

          <img src="assets/img/partners/1.png" alt="Logo 1" class="logo-img" />

          <img src="assets/img/partners/2.png" alt="Logo 2" class="logo-img" />

          <img src="assets/img/partners/3.png" alt="Logo 3" class="logo-img" />

          <img src="assets/img/partners/4.png" alt="Logo 4" class="logo-img" />

          <img src="assets/img/partners/5.png" alt="Logo 5" class="logo-img" />

          <img src="assets/img/partners/6.png" alt="Logo 6" class="logo-img" />

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



  <!-- script -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/11.0.2/bootstrap-slider.min.js"

    integrity="sha512-f0VlzJbcEB6KiW8ZVtL+5HWPDyW1+nJEjguZ5IVnSQkvZbwBt2RfCBY0CBO1PsMAqxxrG4Di6TfsCPP3ZRwKpA=="

    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <script src="assets/js/script.js"></script>



</body>



</html>