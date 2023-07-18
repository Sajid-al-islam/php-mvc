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
            <div class="container my-5 py-5">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header">
                                <h2>Create Location</h2>
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
                                        <label for="">Name</label>
                                        <input type="text" name="name" class="form-control">
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