<?php
// include_once('./resource/views/includes/header.php');
resource_include('includes/header');
?>
<section class="my-5 py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h2>Login form</h2>
                    </div>
                    <div class="card-body">
                        <form action="/login/submit" method="POST">
                            <div class="form-group mb-4">
                                <label for="">email</label>
                                <input type="email" name="email" value="<?= session()->old('email') ?>" class="form-control">
                                <div class="text-danger py-2">
                                    <?= session()->get('error_message') ?>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="">password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <button class="btn btn-info">submit</button>
                        </form>
                        <?php
                        dd(session()->all());
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
resource_include('includes/footer');
?>