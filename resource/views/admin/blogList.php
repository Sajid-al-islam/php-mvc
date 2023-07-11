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
                <div class="card">
                    <div class="card-header">
                        <h2>blog list</h2>
                    </div>
                    <div class="card-body">
                        <table class="table text-center table-border table-striped">
                            <thead>
                                <tr>
                                    <th>title</th>
                                    <th>description</th>
                                    <th>image</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($blogs as $key => $value) {
                                ?>
                                    <tr>
                                        <td><?= $value->title ?></td>
                                        <td><?= $value->description ?></td>
                                        <td>
                                            <img width="100px" src="<?= assets($value->image) ?>" alt="">
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

<?php
resource_include('admin/layouts/footer');
?>