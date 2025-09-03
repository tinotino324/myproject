<link rel="stylesheet" href="{{ asset('css/style.css') }}">

  <nav id="navbar" class="navbar">

      <div class="logo">

        <img src="http://127.0.0.1:8000/storage/profiles/1755950016_Screenshot from 2025-08-20 00-35-15.png" alt="SK Associates Logo"> <!-- Replace with your logo -->

      </div>



      <div class="hamburger" id="hamburger">

        <i class="fas fa-bars"></i>

      </div>



      <ul class="nav-links" id="navLinks">

        <li><a href="<?= ('home') ?>" class="active">Home</a></li>

        <li><a href="<?= ('about') ?>">About Us</a></li>

        <li class="dropdown">

          <a href="javascript:void(0)">Products <i class="fas fa-chevron-down"></i></a>

          <ul class="dropdown-menu">

            <li><a href="<?= ('curtains') ?>">Curtains</a></li>

            <li><a href="<?= ('mosquito-net') ?>">Mosquito Net</a></li>

            <li><a href="<?= ('wallpaper')?>">Wallpaper</a></li>

            <li><a href="<?= ('carpets')?>">Carpets</a></li>

            <li><a href="<?= ('flooring')?>">Flooring</a></li>

            <li><a href="<?= ('artificial-grass')?>">Artificial Grass</a></li>

            <li><a href="<?= ('cloth-hanger')?>">Cloth Hanger</a></li>

            <li><a href="<?= ('blinds')?>">Window Blinds</a></li>
            @if(!empty($products))
            @foreach($products as $product)
              <li><a href="<?= ('product_list?file='.$product->names)?>">{{$product->names}}</a></li>
            @endforeach
            @endif
          </ul>

        </li>

        <li><a href="<?= ('portfolio') ?>">Portfolio</a></li>

        <li><a href="<?=('contact')?>">Contact Us</a></li>
        @if(!Auth::check())
            <li><a href="<?=('login')?>">Login</a></li>
        @else
            <li><a href="{{ url('index') }}">Add Product</a></li>
        @endif
      </ul>

    </nav>