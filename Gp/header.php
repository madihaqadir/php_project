<?php session_start(); ?>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index Index Asaan trading</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/logo.jpg" rel="icon">
  <link href="assets/img/logo.jpg" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Gp
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Updated: Aug 15 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<style>
  /* CSS for the logo image */
  .logo img {
    width: 40px;
    height: 40px;
    background-color: transparent;
    /* Ensures the background is transparent */
    object-fit: cover;
    /* Ensures the image scales nicely */
    border-radius: 50%;
    /* Optional: Make the image circular */
  }
</style>

<header id="header" class="header d-flex align-items-center fixed-top">
  <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

    <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
      <!-- Logo with transparent background -->
      <div>
        <img src="assets/img/logo.png" alt="Asaan Trading Logo" class="logo">
      </div>
      <h1 class="sitename"> Asaan Trading</h1>
      <span>.</span>
    </a>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="#hero" class="active">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#team">Mentors</a></li>
        <li><a href="privacypolicy.php">Privacy Policy</a></li>
        <li><a href="#course">Course</a></li>
        <li><a href="contact.php">Contact</a></li>
        <?php
        if (!isset($_SESSION['img'])) { ?>
          <a href="sign.php" class="nav-item nav-link">Login</a>
          <a href="signuplogin.php" class="nav-item nav-link">Register</a>
        <?php } else { ?>
         
          <div class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
        <img class="rounded-circle me-lg-2" src="<?php echo $_SESSION['img']; ?>" alt="" style="width: 40px; height: 40px;">
        <span class="d-none d-lg-inline-flex">
            <?php echo $_SESSION['name']; ?>
        </span>
    </a>
    <ul class="dropdown-menu rounded-0 m-0">
        <li><a href="showprofile.php" class="dropdown-item">My Profile</a></li>
        <li><a href="logout.php" class="dropdown-item">Log Out</a></li>
    </ul>
</div>

        <?php } ?>
      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>
  </div>
</header>
<br><br><br><br>