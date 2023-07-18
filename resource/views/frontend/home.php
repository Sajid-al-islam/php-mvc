<?php
// include_once('./includes/header.php');
resource_include('includes/header', [
    'page_name' => 'Main section',
]);
?>


<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">

<div class="container">
  <div class="row">
    <div class="col-lg-6 d-flex flex-column justify-content-center">
      <h1 data-aos="fade-up">Discover Hire Hub</h1>
      <h2 data-aos="fade-up" data-aos-delay="400">the ultimate destination for effortless
job search and connecting seekers with employers.</h2>
      <div data-aos="fade-up" data-aos-delay="600">
        <div class="text-center text-lg-start">
          <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
            <span>Get Started</span>
            <i class="bi bi-arrow-right"></i>
          </a>
        </div>
      </div>
    </div>
    <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
      <img src="<?= assets('frontend/') ?>assets/img/hero-img.png" class="img-fluid" alt="">
    </div>
  </div>
</div>

</section><!-- End Hero -->

<main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h3>Who We Are</h3>
              <h2>Discover Hire Hub</h2>
              <p>
              the ultimate destination for effortless
                job search and connecting seekers with employers. Simplify your hunt for the perfect job and
                find your ideal fit now.
              </p>
              <div class="text-center text-lg-start">
                <a href="/register" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>Read More</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="<?= assets('frontend/') ?>assets/img/about.jpg" class="img-fluid" alt="">
          </div>

        </div>
      </div>

    </section><!-- End About Section -->
    

  </main><!-- End #main -->

<?php
// include_once('./includes/header.php');
resource_include('includes/footer');
?>