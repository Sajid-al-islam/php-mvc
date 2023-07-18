<?php
// include_once('./resource/views/includes/header.php');
resource_include('includes/header');
?>

<section class="py-5 my-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2>All jobs</h2>
        </div>
        <div class="d-flex justify-content-end">
            <form action="/jobs?location=" method="get">
                <div class="row">
                    <div class="col">
                        <label for="job_location">Filter by location</label>
                        <select name="location" class="form-control" id="job_location">
                        <?php
                            foreach ($locations as $item) {
                            ?>
                                <option name="location" value="<?= $item->name ?>"><?= $item->name ?></option>
                            <?php
                            }
                        ?>
                        </select>
                    </div>
                    <div class="col">
                        <button type="submit" class="filter_btn mb-5 d-inline-flex align-items-center justify-content-center align-self-center">
                            <span>Apply filter</span>
                        </button>
                    </div>
                </div>
            </form>
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
                                    <p class="card-text">
                                        <?php
                                            $new_string =  mb_strimwidth($item->description, 0, 300, "...");
                                            
                                            print($new_string);
                                        ?>
                                    </p>

                                    <b>Location: </b> <?= $item->location ?><br>

                                    <a href="/register" class="btn-get-started d-inline-flex align-items-center justify-content-center align-self-center me-3">
                                        <span>Read Description</span>
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                    <a href="/register" class="btn-get-started d-inline-flex align-items-center justify-content-center align-self-center">
                                        <span>Apply for the job</span>
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                </div>
                            </div>
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
resource_include('includes/footer');
?>