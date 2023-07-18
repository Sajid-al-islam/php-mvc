<?php

resource_include('includes/header');
?>
<section id="contact" class="contact">

    <div class="container aos-init aos-animate" data-aos="fade-up">

        <header class="section-header">
            <p>Register</p>
        </header>

        <div class="row gy-4">
            <?php if (session()->get('register_error_message')) { ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong><?= session()->get('register_error_message') ?></strong>
                    <?php
                    session()->forget('register_error_message')
                    ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php } ?>
            <?php if (session()->get('register_success_message')) { ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong><?= session()->get('register_success_message') ?></strong>
                    <?php
                    session()->forget('register_success_message')
                    ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php } ?>
            <div class="col-lg-6">
                <img src="<?= assets('frontend/') ?>assets/img/features-2.png" class="img-fluid" alt="">
            </div>

            <div class="col-lg-6">
                <form method="post" action="register/submit" method="POST" class="php-email-form">
                    <div class="row gy-4">
                        <div class="col-md-6">
                            <input type="text" name="first_name" class="form-control" placeholder="First Name" required="">
                        </div>

                        <div class="col-md-6">
                            <input type="text" name="second_name" class="form-control" placeholder="Second Name" required="">
                        </div>

                        <div class="col-md-6">
                            <input type="number" name="age" class="form-control" placeholder="Age" required="">
                        </div>

                        <div class="col-md-6">
                            <input type="number" name="phone_number" class="form-control" placeholder="Mobile Number" required="">
                        </div>

                        <div class="col-md-12">
                            <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                        </div>

                        <div class="col-md-12">
                            <input type="password" class="form-control" name="password" placeholder="password" required="">
                        </div>


                        <div class="col-md-12">
                            <input type="password" class="form-control" name="confirm_password" placeholder="confirm password" required="">
                        </div>

                        <div class="g-recaptcha" data-sitekey="6LebkTUnAAAAAOsu--WaEh6nGcC47FiuM3CbjXkb"></div>

                        <div class="col-md-12 text-center">
                            <!-- <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div> -->

                            <button type="submit">Sign up</button>
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