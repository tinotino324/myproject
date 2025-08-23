<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8">{{ asset('css/style.css') }}

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

    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css" rel="stylesheet">

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

            <h1 class="banner-text">Curtains</h1>

            <nav class="breadcrumb-nav">

                <a href="index.html">Home</a> <span>&raquo;</span> <span>Our Products</span> <span>&raquo;</span>

                <span>Curtains</span>

            </nav>

        </div>

    </section>



    <!-- Details -->

    <section class="product-details container my-5">

        <!-- Main Product Image -->

        <div class="row">

            <h1 class="fw-bold">Premium Designer Curtains</h1>

            <div class="col-12 detail-img">

                <img src="assets/img/product/curtains/8.jpeg" class="img-fluid rounded" alt="Product Image">

            </div>

        </div>



        <!-- Title & Info -->

        <div class="row my-4">

            <div class="col-lg-8">

                <p class="text-muted">

                    Discover the perfect blend of elegance, functionality, and enduring quality with our premium designer curtains. 

                    Expertly tailored from high-grade fabrics, they are designed to enhance the beauty of your interiors while 

                    delivering unmatched performance in privacy and light control. Their refined textures and rich finishes bring a 

                    touch of sophistication to any room, making them an essential element for creating stylish, welcoming spaces.

                </p>

                

                <p class="text-muted">

                    Whether you’re aiming for a modern, minimalistic vibe or a classic, luxurious look, our designer curtains adapt 

                    effortlessly to your style preferences. Built for durability and easy maintenance, they not only uplift your home’s 

                    aesthetic but also provide lasting comfort, transforming every window into a statement of elegance and timeless charm.

                </p>                

            </div>

            <div class="col-lg-4">

                <!-- Features with checkboxes -->

                <div class="features-box p-4 rounded shadow-sm">

                    <h5 class="fw-bold mb-3 text-brown">Product Highlights</h5>

                    <ul class="list-unstyled mb-0">

                        <li><i class="fa fa-check-circle me-2"></i> Elegant & Modern Designs</li>

                        <li><i class="fa fa-check-circle me-2"></i> High-Quality Fabric</li>

                        <li><i class="fa fa-check-circle me-2"></i> Light-Filtering & Privacy Friendly</li>

                        <li><i class="fa fa-check-circle me-2"></i> Easy to Maintain</li>

                    </ul>

                </div>

            </div>

        </div>



        <!-- 4 Small Images -->

        <div class="row g-3">

            <div class="col-6 col-md-3 four-img">

                <img src="assets/img/product/curtains/3.webp" class="img-fluid rounded popup-img" alt=""

                    data-bs-toggle="modal" data-bs-target="#imageModal">

            </div>

            <div class="col-6 col-md-3 four-img">

                <img src="assets/img/product/curtains/9.webp" class="img-fluid rounded popup-img" alt=""

                    data-bs-toggle="modal" data-bs-target="#imageModal">

            </div>

            <div class="col-6 col-md-3 four-img">

                <img src="assets/img/product/curtains/5.webp" class="img-fluid rounded popup-img" alt=""

                    data-bs-toggle="modal" data-bs-target="#imageModal">

            </div>

            <div class="col-6 col-md-3 four-img">

                <img src="assets/img/product/curtains/23.webp" class="img-fluid rounded popup-img" alt=""

                    data-bs-toggle="modal" data-bs-target="#imageModal">

            </div>

        </div>



        <!-- Image Modal -->

        <div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">

            <div class="modal-dialog modal-dialog-centered modal-lg">

                <div class="modal-content bg-dark border-0">

                    <div class="modal-body p-0 text-center">

                        <img id="modalImage" class="img-fluid rounded zoomable" src="" alt="">

                    </div>

                </div>

            </div>

        </div>





        <!-- Paragraph Description -->

        <div class="row my-4">

            <div class="col-12">

                <p>Our premium designer curtains are made from top-quality fabrics, offering both functionality and

                    style. Whether you need soft light-filtering drapes for a cozy atmosphere or blackout curtains for

                    complete privacy, our collection brings beauty and comfort to every room. Designed to complement any

                    interior, they’re the perfect upgrade for your home décor.</p>

            </div>

        </div>

    </section>



    <!-- CTA Section -->

    <section class="cta-section d-flex align-items-center my-5">

        <div class="container">

            <div class="row align-items-center">

                <!-- Left Content -->

                <div class="col-lg-6 text-white p-5">

                    <h2 class="fw-bold">Create Spaces That Reflect Your Style</h2>

                    <p class="text-white">Transform your home with our premium décor collection — elegance made simple.

                    </p>

                    <a href="contact.html" class="btn btn-light btn-lg mt-3">Enquiry Now</a>

                </div>

                <!-- Right Image -->

                <div class="col-lg-6 position-relative">

                    <img src="assets/img/product/curtains/9.webp" class="img-fluid cta-img" alt="">

                    <div class="gradient-overlay"></div>

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

                            <li><a href="curtains.html"></a>Curtains</a></li>

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



    <div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered modal-lg">

            <div class="modal-content bg-transparent border-0">

                <img id="modalImage" class="img-fluid rounded" src="" alt="">

            </div>

        </div>

    </div>



    <!-- script -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/11.0.2/bootstrap-slider.min.js"

        integrity="sha512-f0VlzJbcEB6KiW8ZVtL+5HWPDyW1+nJEjguZ5IVnSQkvZbwBt2RfCBY0CBO1PsMAqxxrG4Di6TfsCPP3ZRwKpA=="

        crossorigin="anonymous" referrerpolicy="no-referrer"></script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Lightbox JS -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@panzoom/panzoom@4.5.1/dist/panzoom.min.js"></script>

    <script src="assets/js/script.js"></script>

</body>



</html>