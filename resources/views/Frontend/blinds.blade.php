<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SK Decors</title>

    <link rel="icon" type="image/png" href="assets/img/brand-elements/favicon.png">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

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

            <h1 class="banner-text">Window Blinds</h1>

            <nav class="breadcrumb-nav">

                <a href="index.html">Home</a> <span>&raquo;</span> <span>Our Products</span> <span>&raquo;</span>

                <span>Window Blinds</span>

            </nav>

        </div>

    </section>



    <!-- Details -->

    <section class="product-details container my-5">

        <!-- Main Product Image -->

        <div class="row">

            <div class="col-12 detail-img">

                <h1 class="fw-bold">Premium Designer Window Blinds</h1>

                <img src="assets/img/product/blinds/4.jpeg" class="img-fluid rounded" alt="Product Image">

            </div>

        </div>



        <!-- Title & Info -->

        <div class="row my-4">

            <div class="col-lg-8">

                <p class="text-muted">

                    Discover the perfect blend of style, practicality, and lasting quality with our premium designer window blinds. 

                    Crafted from superior materials, they enhance the visual appeal of your interiors while providing exceptional privacy, 

                    light control, and long-lasting durability — creating a sleek, comfortable, and timeless look for any living or workspace.

                </p>

                

                <p class="text-muted">

                    Our blinds are available in a variety of designs, textures, and colors, allowing you to customize your windows to perfectly match your décor. 

                    Whether you want to filter natural light for a cozy ambiance or achieve complete privacy for personal spaces, 

                    our collection offers solutions to suit every need and preference.

                </p>

                

                <p class="text-muted">

                    Easy to operate and maintain, these blinds combine functionality with elegance, making them an ideal choice for both homes and commercial settings. 

                    With their refined finish and versatile style, they effortlessly elevate the aesthetics of any room while delivering practical everyday benefits.

                </p>

                

            </div>

            <div class="col-lg-4">

                <!-- Features with checkboxes -->

                <div class="features-box p-4 rounded shadow-sm">

                    <h5 class="fw-bold mb-3 text-brown">Product Highlights</h5>

                    <ul class="list-unstyled mb-0">

                        <li><i class="fa fa-check-circle me-2"></i> Elegant & Modern Designs</li>

                        <li><i class="fa fa-check-circle me-2"></i> High-Quality Materials</li>

                        <li><i class="fa fa-check-circle me-2"></i> Light-Filtering & Privacy Friendly</li>

                        <li><i class="fa fa-check-circle me-2"></i> Custom Artwork Printed Blinds</li>

                        <li><i class="fa fa-check-circle me-2"></i> Easy to Maintain</li>

                    </ul>

                </div>

            </div>

        </div>



        <!-- 4 Small Images -->

        <div class="row g-3">

            <div class="col-6 col-md-3 four-img">

                <img src="assets/img/product/blinds/5-1.webp" class="img-fluid rounded popup-img" alt=""

                    data-bs-toggle="modal" data-bs-target="#imageModal">

            </div>

            <div class="col-6 col-md-3 four-img">

                <img src="assets/img/product/blinds/31-1.webp" class="img-fluid rounded popup-img" alt=""

                    data-bs-toggle="modal" data-bs-target="#imageModal">

            </div>

            <div class="col-6 col-md-3 four-img">

                <img src="assets/img/product/blinds/57-1.webp" class="img-fluid rounded popup-img" alt=""

                    data-bs-toggle="modal" data-bs-target="#imageModal">

            </div>

            <div class="col-6 col-md-3 four-img">

                <img src="assets/img/product/blinds/98-1.webp" class="img-fluid rounded popup-img" alt=""

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

                <p>Our premium designer window blinds are designed to combine functionality with style. Choose from a

                    variety of elegant finishes, artwork-inspired designs, or even custom image-printed blinds to make a

                    unique statement. Whether you prefer soft light-filtering options for a warm ambiance or blackout

                    blinds for total privacy, our collection offers the perfect solution for every room. Designed to

                    suit any décor, they’re the ultimate upgrade for your interiors.</p>

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

                    <img src="assets/img/product/blinds/38.jpeg" class="img-fluid cta-img" alt="">

                    <div class="gradient-overlay"></div>

                </div>

            </div>

        </div>

    </section>





    <!-- footer -->
    <footer>
    @include('layouts.footer');
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