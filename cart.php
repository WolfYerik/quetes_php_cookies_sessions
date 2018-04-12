<?php require 'inc/head.php';?>

<section class="cookies container-fluid">
    <div class="row">
        <?php
            if (isset($_COOKIE['panier'])){
                $cart = substr($_COOKIE['panier'],0,strlen($_COOKIE['panier'])-1);
                $data=explode(',',$cart) ;
                foreach($data as $id){
                    echo '<div class="col-xs-6">Article ' . $cookies[$id] . ' commandé</div>';
                }
            }
        ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
