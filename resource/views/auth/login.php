<?php

resource_include('includes/header');
?>
<!-- <section class="my-5 py-5">
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
                        // dd(session()->all());
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<section id="contact" class="contact">

    <div class="container aos-init aos-animate" data-aos="fade-up">

        <header class="section-header">
            <p>Login</p>
        </header>

        <div class="row gy-4">

            <div class="col-lg-6">
                <img src="<?= assets('frontend/') ?>assets/img/features-2.png" class="img-fluid" alt="">
            </div>

            <div class="col-lg-6">
                <form action="/login/submit" method="POST" class="php-email-form">
                    <div class="row gy-4">

                        

                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="mb-2" for="">Email</label>
                                <input type="email" class="form-control" type="email" name="email" value="<?= session()->old('email') ?>" name="email" placeholder="Your Email" required="">
                            </div>
                        </div>

                        <div class="text-danger py-2">
                            <?= session()->get('error_message') ?>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group mb-4">
                                <label class="mb-2" for="">Password</label>
                                <input type="password" name="password" placeholder="password" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-12 text-center">
                            <!-- <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div> -->

                            <button type="submit">Login</button>
                        </div>

                    </div>
                </form>

            </div>

        </div>

    </div>

</section>

<?php
resource_include('includes/footer');
?>