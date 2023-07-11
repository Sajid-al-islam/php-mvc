<?php
resource_include('admin/layouts/header');
?>

<div class="container-fluid">
    <div class="row">
        <?php
        resource_include('admin/layouts/navbar');
        ?>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="container my-5 py-5">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h2>blog create</h2>
                            </div>
                            <div class="card-body">
                                <div class="text-success">
                                    <?= session()->get('success_message') ?>
                                    <?php
                                        session()->forget('success_message')
                                    ?>
                                </div>
                                <form enctype="multipart/form-data" action="/admin/blog/create/store" method="POST">
                                    <div class="form-group mb-3">
                                        <label for="">title</label>
                                        <input type="text" name="title" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">description</label>
                                        <textarea name="description" class="form-control"></textarea>
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