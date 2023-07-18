<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Hire hub</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">


  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


  <link href="<?= assets('frontend/') ?>assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= assets('frontend/') ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= assets('frontend/') ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= assets('frontend/') ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= assets('frontend/') ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?= assets('frontend/') ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="<?= assets('frontend/') ?>assets/css/style.css" rel="stylesheet">
  <style>
    .btn-get-started {
      margin-top: 30px;
      line-height: 0;
      padding: 15px 40px;
      border-radius: 4px;
      transition: 0.5s;
      color: #fff;
      background: #4154f1;
      box-shadow: 0px 5px 30px rgba(65, 84, 241, 0.4);
    }
    .filter_btn {
      margin-top: 45px;
      line-height: 10px;
      padding: 15px 15px;
      border-radius: 4px;
      transition: 0.5s;
      color: #fff;
      background: #4154f1;
      box-shadow: 0px 5px 30px rgba(65, 84, 241, 0.4);
    }
    .apply_now_btn {
      line-height: 10px;
      padding: 15px 15px;
      border-radius: 4px;
      transition: 0.5s;
      color: #fff;
      background: #4154f1;
      box-shadow: 0px 5px 30px rgba(65, 84, 241, 0.4);
    }
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span>HireHub</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="/">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="/jobs">Jobs</a></li>
          <?php
          if (auth()->check()) {
          ?>

            <li class="nav-item">
              <?php
              if (auth()->user('role') == 'admin') {
              ?>
                <a class="nav-link" href="/admin">admin</a>
              <?php
              } else {
              ?>
                <a class="nav-link" href="jobseeker/dashboard">Dashboard</a>
              <?php } ?>
            </li>
            <li class="nav-item">
              <a class="nav-link" onclick="return confirm('do you want to logout?')" href="/logout">logout</a>
            </li>
          <?php
          } else {
          ?>
            <li><a class="nav-link scrollto" href="/login">login</a></li>
            <li><a class="getstarted scrollto" href="/register">Sign up</a></li>
          <?php } ?>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->