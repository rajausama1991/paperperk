<!doctype html>
<html lang="mba">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
 
  
  
  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
    integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href='https://fonts.googleapis.com/css?family=Lexend Deca' rel='stylesheet'>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

 <!--<link rel="stylesheet" href="https://paperperk.com/wp-content/themes/theme/custom.css">-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">

  <?php wp_head(); ?>

</head>

<body>

  <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"-->
  <!--  integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"-->
  <!--  crossorigin="anonymous"></script>-->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>


  <!-- ---------NAVBAR------------ -->

  <div class="nav-container img-z-index">

    <div class=" top-navbar">

      <div class="container">

        <div class="row">

          <div class="col-md-12 d-flex align-items-center">

            <div class="btn btn-sm navbar-btn mx-1"><i class="fas fa-phone"></i> <a href="tel:+1 213 318 4345"
                class="text-white text-decoration-none" style=" font-size: 13px; ">+1
                213 318 4345</a></div>

            <div class="btn btn-sm navbar-btn mx-1"> <i class="fas fa-envelope"></i> <a href="#"
                class="text-white text-decoration-none" style=" font-size: 13px; ">info@paperperk.com</a> </div>

          </div>
          <!-- 
      <div class="col-md-6">


      </div> -->

        </div>

      </div>

    </div>
    <nav class="navbar navbar-expand-sm navbar-light" id="neubar">

      <div class="container">

        <a id="logo" href="<?= get_bloginfo('wpurl') ?>"><img src="<?php bloginfo('template_directory'); ?>/images/paper-perk-logo-1.png" alt"paper-perk-logo" /> </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">

          <span class="navbar-toggler-icon"></span>

        </button>

        <div class=" collapse navbar-collapse" id="navbarNavDropdown">

          <ul class="navbar-nav ms-auto " style=" align-items: center; display: flex; ">

            <li class="nav-item">

              <a class="nav-link  active" aria-current="page" href="<?= get_bloginfo('wpurl') ?>/about-us">About Us</a>
              

            </li>

            <li class="nav-item">

              <a class="nav-link " href="<?= get_bloginfo('wpurl') ?>/our-writers">Our Writers</a>
            </li>

            <li class="nav-item">

              <a class="nav-link" href="<?= get_bloginfo('wpurl') ?>/blog">Blog</a>

            </li>

            <li class="nav-item dropdown">

              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                data-toggle="dropdown" aria-expanded="false">
                Services
              </a>

              <ul class="dropdown-menu mt-1" aria-labelledby="navbarDropdownMenuLink">

                <li><a class="dropdown-item" href="<?= get_bloginfo('wpurl') ?>/services/medical-research-paper-writing">Medical Research Paper</a></li>

                <li><a class="dropdown-item" href="<?= get_bloginfo('wpurl') ?>/services/history-paper-writing-service">History Paper</a></li>

                <li><a class="dropdown-item" href="<?= get_bloginfo('wpurl') ?>/services/phd-research-paper-writing">Ph.D Research Paper</a></li>

                <li><a class="dropdown-item" href="<?= get_bloginfo('wpurl') ?>/services/nursing-research-paper-writing"> Nursing Paper</a></li>

                <li><a class="dropdown-item" href="<?= get_bloginfo('wpurl') ?>/services/research-paper-writing">Research Paper</a></li>

                <li><a class="dropdown-item" href="<?= get_bloginfo('wpurl') ?>/services/college-paper-writing-service">College Paper Writing</a></li>

                <li><a class="dropdown-item" href="<?= get_bloginfo('wpurl') ?>/services/thesis-writing-service">Thesis Writing Service</a></li>

                <li><a class="dropdown-item" href="<?= get_bloginfo('wpurl') ?>/services/term-paper-writing-service">Term Paper Writing Service</a></li>
                
                <li><a class="dropdown-item" href="<?= get_bloginfo('wpurl') ?>/services/dissertation-writing-service">Dissertation Writing Service</a></li>
                
                <li><a class="dropdown-item" href="<?= get_bloginfo('wpurl') ?>/services/coursework-writing-service">Coursework Writing Service</a></li>


              </ul>

            </li>

            <li class="nav-item">

              <a class="nav-link" href="<?= get_bloginfo('wpurl') ?>/pricing">Pricing </a>

            </li>


            <li class="nav-item">

              <a class="nav-link" href="<?= get_bloginfo('wpurl') ?>/free-tool">Free Tools</a>

            </li>
            
            <li class="nav-item">

              <a class="nav-link" href="<?= get_bloginfo('wpurl') ?>/reviews">Reviews</a>

            </li>

            <li class="nav-item">

              <a class="nav-link" href="<?= get_bloginfo('wpurl') ?>/faqs">FAQs</a>

            </li>


            <li class="nav-item">

              <a class="btn btn-custom btn-light-blue btn-shadow" href="https://order.paperperk.com/login"><i
                  class="fas fa-user mx-2"></i>Login</a>

            </li>

            <li class="nav-item">

              <a class="btn btn-custom btn-yellow btn-shadow" href="https://order.paperperk.com">Order Now</a>

            </li>

          </ul>

        </div>

      </div>

    </nav>

  </div>