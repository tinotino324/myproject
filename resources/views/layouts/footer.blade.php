<div class="container">

      <div class="row">

        <div class="col-md-2">

          <div class="ft-cl-1">

            <img src="assets/img/brand-elements/skdecors-white.png" alt="">

            <p>Started in the year 2010 into curtains gradually we

              diversified ourselves into various services of home

              décor items from Mosquito nets to luxury end home

              decor products.

            </p>

          </div>

        </div>

        <div class="col-md-2">

          <div class="ft-cl-2">

            <h4 class="sub-title">Our Company</h4>

            <ul>

              <li><a href="<?= ('about') ?>">About</a></li>

              <li><a href="javascript:void(0)">Products</a></li>

              <li><a href="<?= ('portfolio') ?>">Portfolio</a></li>

              <li><a href="<?=('contact')?>">Contact</a></li>

            </ul>

          </div>

        </div>

        <div class="col-md-2">

          <div class="ft-cl-3">

            <h4 class="sub-title">Products</h4>

            <ul>

                <li><a href="<?= ('curtains') ?>">Curtains</a></li>

                <li><a href="<?= ('mosquito-net') ?>">Mosquito Net</a></li>

                <li><a href="<?= ('wallpaper')?>">Wallpaper</a></li>

                <li><a href="<?= ('carpets')?>">Carpets</a></li>

                <li><a href="<?= ('flooring')?>">Flooring</a></li>

                <li><a href="<?= ('artificial-grass')?>">Artificial Grass</a></li>

                <li><a href="<?= ('cloth-hanger')?>">Cloth Hanger</a></li>

                <li><a href="<?= ('blinds')?>">Window Blinds</a></li>

            </ul>

          </div>

        </div>
        
            <div class="col-md-3">

                <div class="ft-cl-3">

                <h4 class="sub-title">Products</h4>

                <ul>

                @if(!empty($products))
                @foreach($products as $product)
                    <li><a href="<?= ('product_list?file='.$product->names)?>">{{$product->names}}</a></li>
                @endforeach
                @endif

                </ul>

                </div>

                </div>    

        <div class="col-md-2">

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