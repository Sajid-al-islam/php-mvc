<?php
// include_once('./includes/header.php');
resource_include('includes/header', [
    'page_name' => 'Main section',
]);
?>

<!-- <section>
    <div class="container">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://img.freepik.com/free-vector/blue-technology-digital-banner-design_1017-32257.jpg?w=2000" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://img.freepik.com/free-vector/blue-technology-digital-banner-design_1017-32257.jpg?w=2000" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://img.freepik.com/free-vector/blue-technology-digital-banner-design_1017-32257.jpg?w=2000" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>

<section class="py-5 my-5">
    <div class="container">
        <div class="text-center">
            <h2>Services</h2>
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum, necessitatibus?
            </p>
        </div>
        <div class="row">
            <?php
            foreach ($blogs as $key => $item) {

            ?>
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div style="max-height: 250px; overflow: hidden;">
                            <img  src="<?= assets($item->image) ?>" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?= $item->title ?></h5>
                            <p class="card-text"><?= $item->description ?></p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</section> -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">

<div class="container">
  <div class="row">
    <div class="col-lg-6 d-flex flex-column justify-content-center">
      <h1 data-aos="fade-up">Meet Hirehub</h1>
      <h2 data-aos="fade-up" data-aos-delay="400">Simplify your hunt for the perfect job and
            find your ideal fit now.</h2>
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
              <h2>Meet Hirehub.</h2>
              <p>
                Simplify your hunt for the perfect job and
                find your ideal fit now.
              </p>
              <div class="text-center text-lg-start">
                <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
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