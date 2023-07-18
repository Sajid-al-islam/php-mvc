<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">

                <div class="sb-sidenav-menu-heading">Jobs</div>
                <!-- <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Jobs
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="/jobseeker/jobs">Job list</a>
                        <a class="nav-link" href="/jobseeker/favourite-jobs">Favourite Jobs</a>
                    </nav>
                </div> -->
                <a class="nav-link" href="/jobseeker/my_favourite_jobs">
                    <div class="sb-nav-link-icon"><i class="fas fa-briefcase"></i></div>
                    My favourite jobs
                </a>
                <a class="nav-link" href="/jobseeker/jobs">
                    <div class="sb-nav-link-icon"><i class="fas fa-briefcase"></i></div>
                    All jobs
                </a>
                <a class="nav-link" href="/jobseeker/my_applied_jobs">
                    <div class="sb-nav-link-icon"><i class="fas fa-briefcase"></i></div>
                    My applied jobs
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            <?php auth()->user('first_name') ?> <?php auth()->user('second_name') ?>
        </div>
    </nav>
</div>