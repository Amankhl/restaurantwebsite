<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!---primary meta tags-->
  <title>Public Affair - Khan Market</title>
  <meta name="title" content="Public Affair - Khan Market">
  <meta name="description" content="This is the website of Public Affair - Khan Market made by Social Vata">

  <!--- favicon-->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!--- google font link-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap" rel="stylesheet">

<?php  $timestamp = filemtime('./assets/css/style.css');?>

  <!-- - custom css link-->
  <link rel="stylesheet" href="./assets/css/style.css?<?php echo $timestamp; ?>">

  <!--- preload images-->
  <link rel="preload" as="image" href="./assets/images/unsplash-slider1.png">
  <link rel="preload" as="image" href="./assets/images/unsplash-slider2.png">
  <link rel="preload" as="image" href="./assets/images/unsplash-slider3.png">

</head>

<body id="top">

  <!--- #PRELOADER-->

  <div class="preload" data-preaload>
    <div class="circle"></div>
    <p class="text">Public Affair</p>
  </div>


  <!--- #TOPBAR-->

  <?php require 'topbar.php'; ?>

  <!--- #HEADER-->

  <?php require 'header.php'; ?>



  <main>
    <article>

      <!--- #HERO-->

      <section class="hero text-center" aria-label="home" id="home">

        <ul class="hero-slider" data-hero-slider>

          <li class="slider-item active" data-hero-slider-item>

            <div class="slider-bg">
              <img src="./assets/images/unsplash-slider1.png" width="1880" height="950" alt="" class="img-cover">
            </div>

            <p class="label-2 section-subtitle-custom section-subtitle slider-reveal">Quality & Hygine</p>

            <h1 class="display-1 hero-title slider-reveal">
              For the love of <br>
              delicious food
            </h1>

            <p class="body-2 hero-text slider-reveal">
              Come with family & feel the joy of mouthwatering food
            </p>

            <a href="#" class="btn btn-primary slider-reveal">
              <span class="text text-1">View Our Menu</span>
            </a>

          </li>

          <li class="slider-item" data-hero-slider-item>

            <div class="slider-bg">
              <img src="./assets/images/unsplash-slider2.png" width="1880" height="950" alt="" class="img-cover">
            </div>

            <p class="label-2 section-subtitle-custom section-subtitle slider-reveal">delightful experience</p>

            <h1 class="display-1 hero-title slider-reveal">
              Flavors Inspired by <br>
              the Seasons
            </h1>

            <p class="body-2 hero-text slider-reveal">
              Come with family & feel the joy of mouthwatering food
            </p>

            <a href="#" class="btn btn-primary slider-reveal">
              <span class="text text-1">View Our Menu</span>
            </a>

          </li>

          <li class="slider-item" data-hero-slider-item>

            <div class="slider-bg">
              <img src="./assets/images/unsplash-slider3.png" width="1880" height="950" alt="" class="img-cover">
            </div>

            <p class="label-2 section-subtitle-custom section-subtitle slider-reveal">amazing & delicious</p>

            <h1 class="display-1 hero-title slider-reveal">
              Where every flavor <br>
              tells a story
            </h1>

            <p class="body-2 hero-text slider-reveal">
              Come with family & feel the joy of mouthwatering food
            </p>

            <a href="#" class="btn">
              <span>View Our Menu</span>
            </a>

          </li>

        </ul>

        <button class="slider-btn prev" aria-label="slide to previous" data-prev-btn>
          <ion-icon name="chevron-back"></ion-icon>
        </button>

        <button class="slider-btn next" aria-label="slide to next" data-next-btn>
          <ion-icon name="chevron-forward"></ion-icon>
        </button>

        <a href="#" class="hero-btn has-after">
          <img src="./assets/images/hero-icon.png" width="48" height="48" alt="booking icon">

          <span class="label-2 text-center span">Book A Table</span>
        </a>

      </section>


      <!--- #SERVICE-->
        <?php require 'service.php'; ?> 
      

      <!--- #ABOUT-->

      <?php require 'about.php'; ?>


      <!--- #SPECIAL DISH-->

      <?php require 'special-dish.php'; ?>


      <!--- #MENU-->

      <?php require 'menu.php'; ?>


      <!--- #TESTIMONIALS-->

      <?php require 'testimonials.php'; ?>


      <!--- #RESERVATION -->

      <?php require 'reservation.php'; ?>


      <!--- #FEATURES-->

      <?php require 'features.php'; ?>


      <!--- #EVENT-->

      <?php require 'event.php'; ?>



  </main>



  <!---#FOOTER-->

  <?php require 'footer.php'; ?>


  <!--- #BACK TO TOP-->

  <a href="#top" class="back-top-btn active" aria-label="back to top" data-back-top-btn>
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
  </a>



  <!--- custom js link-->
  <script src="./assets/js/script.js"></script>

  <!--- ionicon link-->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>