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

        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">

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

            <h1 class="banner-text">Contact Us</h1>

            <nav class="breadcrumb-nav">

                <a href="index.html">Home</a> <span>&raquo;</span> <span>Contact Us</span>

            </nav>

        </div>

    </section>

    <!-- form section -->

    <!-- <section class="contact-section">

        <div class="container">

            <div class="row align-items-center">

                <div class="mb-4">

                    <div class="contact-heading">

                        <h2 class="mt-2 text-center">Happy to answer all your questions</h2>

                    </div>

                </div>

            </div>

        </div>

    </section> -->



    <!-- contact info -->

    <section class="contact-details py-5">

        <div class="container">

            <h3 class="text-center mb-5 fw-bold">Contact Details</h3>

            <div class="row g-4">

                <!-- Address -->

                <div class="col-md-4">

                    <div class="contact-card p-4 bg-white shadow-sm rounded h-100">

                        <div class="d-flex align-items-start">

                            <div class="icon-circle me-3">

                                <i class="fas fa-map-marker-alt"></i>

                            </div>

                            <div>

                                <h5 class="fw-bold">Address</h5>

                                <p class="mb-0">

                                    No. 164, 4th Street, K. K. Pudur Saibaba Colony, Near S Bend, K K Pudur, Coimbatore-

                                    641038, Tamil Nadu, India

                                </p>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Email -->

                <div class="col-md-4">

                    <div class="contact-card p-4 bg-white shadow-sm rounded h-100">

                        <div class="d-flex align-items-start">

                            <div class="icon-circle me-3">

                                <i class="fas fa-envelope"></i>

                            </div>

                            <div>

                                <h5 class="fw-bold">Email Us</h5>

                                <p class="mb-0">rajkumar84sk@gmail.com</p>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Phone -->

                <div class="col-md-4">

                    <div class="contact-card p-4 bg-white shadow-sm rounded h-100">

                        <div class="d-flex align-items-start">

                            <div class="icon-circle me-3">

                                <i class="fas fa-phone-alt"></i>

                            </div>

                            <div>

                                <h5 class="fw-bold">Call Us</h5>

                                <p class="mb-0">97901 04588</p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <!-- map contact -->

    <section class="map-section">

        <div class="container">

            <h3 class="text-center mb-4 fw-bold">Find Us Here</h3>

            <div class="map-container">

                <iframe

                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.1476320846783!2d76.934607!3d11.023835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba8572c1b94e5dd%3A0x2d5df1a94d1a5b27!2s164%2C%204th%20St%2C%20Krishna%20Nagar%2C%20Kuppakonam%20Pudur%2C%20Coimbatore%2C%20Tamil%20Nadu%20641038!5e0!3m2!1sen!2sin!4v1690200000000!5m2!1sen!2sin"

                    width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"

                    referrerpolicy="no-referrer-when-downgrade">

                </iframe>

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

                            <li><i class="fa-solid fa-location-dot"></i> No. 164, 4th Street, K. K. Pudur Saibaba

                                Colony, Near S Bend, K K Pudur, Coimbatore- 641038</li>

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