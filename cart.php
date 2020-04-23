<?php
session_start();

// If not logged in, redirect to index
if (empty($_SESSION['login'])) {
    header('location: ./login.php');
    exit();
}

require 'inc/data/products.php';
require 'inc/head.php';
?>
<section class="cookies container-fluid">
    <div class="row">
        <?php
        $cart = $_SESSION['cart'];

        foreach ($cart as $id) {
            foreach ($catalog as $key => $cookie) {
                if ($id == $key) {?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $cookie['name']; ?>" class="img-responsive">
                    <figcaption class="caption">
                        <h3><?= $cookie['name']; ?></h3>
                        <p><?= $cookie['description']; ?></p>
                    </figcaption>
                </figure>
            </div>
        <?php }
            }
        } ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
