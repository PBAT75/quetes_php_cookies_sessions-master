<?php require 'inc/head.php'; ?>
<?php
session_start();

?>


<section class="cookies container-fluid">
    <div class="row">
        <?php foreach ($_SESSION["idProduit"] as $key=>$value){ ?>
            <ul>
                <li>
                    <img src="assets/img/product-<?= $key ?>.jpg"/>
                    <p> Vous avez commandé <?= $value ?> de cookies de cette sorte. </p>
                </li>
            </ul>


        <?php } ?>


    </div>
</section>

<?php require 'inc/foot.php'; ?>
