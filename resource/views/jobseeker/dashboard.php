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
            <div class="container-fluid px-4">
                <h1 class="mt-4">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </main>
    </div>
</div>

<?php
resource_include('jobseeker/layouts/footer');
?>