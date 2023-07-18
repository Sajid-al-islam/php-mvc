<?php
// include_once('./resource/views/includes/header.php');
resource_include('includes/header');
?>

<section class="py-5 my-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2>All jobs</h2>
        </div>
        <div class="row">
            <?php
            foreach ($data as $key => $item) {

            ?>
                <div class="col-md-12">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-2">
                                <img src="<?= assets($item->image) ?>" style="width: 200px" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-10">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $item->title ?></h5>
                                    <p class="card-text"><?= $item->description ?></p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="card mb-3">
                        <div style="max-height: 250px; overflow: hidden;">
                            <img src="<?= assets($item->image) ?>" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?= $item->title ?></h5>
                            <p class="card-text"><?= $item->title ?></p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div> -->
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>

<?php
resource_include('includes/footer');
?>