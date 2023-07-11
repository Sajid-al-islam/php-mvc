<?php
// include_once('./includes/header.php');
resource_include('includes/header', [
    'page_name' => 'home page',
]);
?>

<section>
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
</section>

<?php
// include_once('./includes/header.php');
resource_include('includes/footer');
?>