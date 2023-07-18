<?php
check_permission();


resource_include('jobseeker/layouts/header');
?>


<div id="layoutSidenav">
    <?php
    resource_include('jobseeker/layouts/navbar');
    ?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container my-5">
                <!-- <div class="card">
                    <div class="card-header">
                        <h2>Job list</h2>
                    </div>
                    <div class="card-body">
                        
                    </div>
                </div> -->
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
                                    <button class="btn btn-sm btn-warning mb-2">Apply now</button>
                                    <button class="btn btn-sm btn-primary mb-2">Details</button>
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