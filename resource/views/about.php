<?php
// include_once('./resource/views/includes/header.php');
resource_include('includes/header');
?>
<section>
    <div class="container">
        <h1>About page</h1>
        <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores
            temporibus quae, fuga amet fugit quas praesentium debitis nostrum,
            fugiat libero repellendus obcaecati accusamus, error deserunt sit v
            oluptatum corrupti enim illum! Amet iusto dolores sapiente minima exce
            pturi enim porro perspiciatis commodi labore laboriosam numquam assumenda
            odit ducimus, nemo tempora quidem distinctio quia illo autem aspernatur!
            Sunt, quo labore excepturi non consequuntur magni similique quam. Enim, l
            aboriosam! Praesentium libero deleniti, asperiores pariatur beatae sunt s
            it, iste nostrum at maxime molestiae nemo! Ea sapiente rerum, quisquam hic
            ipsa ipsum in modi repellendus odio quod explicabo vitae iste, blanditiis v
            el. Placeat dolorum eum sequi.
        </p>
    </div>
    <table class="p-5 table table-hover table-bordered">
        <tr>
            <td>username</td>
            <td>phone number</td>
        </tr>
        <?php
        foreach ($data as $item) {
        ?>
            <tr>
                <td><?= $item->name ?></td>
                <td><?= $item->contact ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</section>

<?php
resource_include('includes/footer');
?>