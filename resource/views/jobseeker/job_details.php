<?php
check_jobseeker_permission();
resource_include('jobseeker/layouts/header');
?>


<div id="layoutSidenav">
    <?php
    resource_include('jobseeker/layouts/navbar');
    ?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4 mt-5">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="card">
                            <img src="<?= assets($data->image) ?>" class="card-img-top" alt="...">
                            
                            <div class="card-body">
                                <h5 class="card-title"><?= $data->title ?></h5>
                                <h6>Job location: <?= $data->location ?></h6>

                                <div class="card-header">
                                    Job details: 
                                </div>
                                <p class="card-text">
                                    <?= $data->description ?>
                                </p>
                                <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

<?php
resource_include('jobseeker/layouts/footer');
?>