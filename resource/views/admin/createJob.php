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
                                <h2>Create Job</h2>
                            </div>
                            <div class="card-body">
                                <div class="text-success">
                                    <?= session()->get('success_message') ?>
                                    <?php
                                    session()->forget('success_message')
                                    ?>
                                </div>
                                <form enctype="multipart/form-data" action="/admin/job/create/store" method="POST">
                                    <div class="form-group mb-3">
                                        <label for="">title</label>
                                        <input type="text" name="title" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">description</label>
                                        <textarea id="myTextarea" cols="30" rows="10" name="description" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="job_location">Job location</label>
                                        <select name="location_id" class="form-control" id="job_location">
                                        <?php
                                            foreach ($locations as $item) {
                                            ?>
                                                <option value="<?= $item->name ?>"><?= $item->name ?></option>
                                            <?php
                                            }
                                        ?>
                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">image</label>
                                        <input accept=".jpg,.jpeg,.png" type="file" name="image" class="form-control">
                                    </div>
                                    <button class="btn btn-info">
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