<?php
check_permission();
resource_include('admin/layouts/header');
?>


<div id="layoutSidenav">
    <?php
    resource_include('admin/layouts/navbar');
    ?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4 mt-5">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="card">
                            <div class="card-header">
                                <h2>Update Job</h2>
                            </div>
                            <div class="card-body">
                                <div class="text-success">
                                    <?= session()->get('success_message') ?>
                                    <?php
                                    session()->forget('success_message')
                                    ?>
                                </div>
                                <form enctype="multipart/form-data" action="/admin/job/edit/update?id=<?= $data->id ?>" method="POST">
                                    <div class="form-group mb-3">
                                        <label for="">title</label>
                                        <input type="text" value="<?= $data->title ?>" name="title" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">description</label>
                                        <textarea id="myTextarea" cols="30" rows="10" name="description" class="form-control"><?= $data->description ?></textarea>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="job_location">Job location</label>
                                        <select name="location" class="form-control" id="job_location">
                                        <?php
                                            foreach ($locations as $item) {
                                            ?>
                                                <option <?php if($data->location == $item->name) { echo "selected"; } ?> value="<?= $item->name ?>"><?= $item->name ?></option>
                                            <?php
                                            }
                                        ?>
                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <img width="100px" src="<?= assets($data->image) ?>" alt="">
                                        <label for="">image</label>
                                        <input accept=".jpg,.jpeg,.png" type="file" name="image" class="form-control">
                                    </div>
                                    <button type="submit" class="btn btn-info">
                                        submit
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

<?php
resource_include('admin/layouts/footer');
?>

<script>
    ClassicEditor
        .create(document.querySelector("#myTextarea"))
        .catch(error => {
            console.error(error);
        });
</script>