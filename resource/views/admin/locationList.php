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
                        <h2>Locations</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-border table-striped">
                            <thead>
                                <tr>
                                    <th>title</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($locations as $key => $value) {
                                ?>
                                    <tr>
                                        <td><?= $value->name ?></td>
                                        <td>
                                            <button class="btn btn-primary">View</button>
                                            <button class="btn btn-warning">Edit</button>
                                            <button class="btn btn-danger">Delete</button>
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