<?php
// include_once('./includes/header.php');
resource_include('includes/header', [
    'page_name' => 'Main section',
]);
?>

<main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about mt-5">
        <div class="container" data-aos="fade-up">
            <div class="row gx-0">
                <div class="col-md-8 ms-auto me-auto">
                    <article class="entry">

                        <div class="entry-img">
                            <img src="<?= assets($data->image) ?>" alt="" class="img-fluid">
                        </div>

                        <div class="d-flex bd-highlight mb-3 mt-2">
                            <div class="me-auto p-2 bd-highlight">
                                <h2 class="text-right entry-title mt-2">
                                    <a href="#"><?= $data->title ?></a>
                                </h2>
                            </div>
                            <div class="p-2 mt-3 bd-highlight">
                                <a href="/apply_now" class="apply_now_btn">Apply now</a>
                            </div>
                        </div>


                        <div class="entry-content mt-5">
                            <h2>Job descirption: </h2>
                            <p>
                                <?= $data->description ?>
                            </p>
                        </div>

                    </article>
                </div>
            </div>
        </div>
    </section>
</main><!-- End #main -->

<?php
// include_once('./includes/header.php');
resource_include('includes/footer');
?>