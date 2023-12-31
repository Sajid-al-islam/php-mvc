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
            <div class="container my-5">
                <div class="text-success">
                    <?php if(session()->get('job_success_message')) { ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong><?= session()->get('job_success_message') ?></strong>
                        <?php
                        session()->forget('job_success_message')
                        ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php } ?>

                    <?php if(session()->get('job_error_message')) { ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong><?= session()->get('job_error_message') ?></strong>
                        <?php
                        session()->forget('job_error_message')
                        ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php } ?>
                </div>
                <h2 class="text-center my-5">All jobs</h2>
                <table id="datatablesSimple" class="table table-border table-striped">
                    <thead>
                        <tr>
                            <th>title</th>
                            <th>description</th>
                            <th>image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($jobs as $key => $value) {
                        ?>
                            <tr>
                                <td><?= $value->title ?></td>
                                <td>
                                    <?php
                                    $new_string =  mb_strimwidth($value->description, 0, 100, "...");

                                    print($new_string);
                                    ?>
                                </td>
                                <td>
                                    <img width="100px" src="<?= assets($value->image) ?>" alt="">
                                </td>
                                <td>
                                    <a href="/jobseeker/job/details?id=<?= $value->id ?>" class="btn btn-sm btn-primary mb-2">Details</a>
                                    <a href="/job/apply_now?id=<?= $value->id ?>" class="btn btn-sm btn-success mb-2">Apply now</a>
                                    <a href="/jobseeker/job/add_to_favourite?id=<?= $value->id ?>" class="btn btn-sm btn-info mb-2">Add to favourite</a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>

<?php
resource_include('jobseeker/layouts/footer');
?>