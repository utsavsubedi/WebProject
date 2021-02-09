<?php include 'header.php';?>

    <section class='container'>
        <div class='how-section1'></div><?php


    if(!isset($_SESSION['userid'])){
        header('location: index.php');
    }?>

        <?php

        if(isset($favItem)) {?>
            <div class="container">
            <div><a href="favourite.php?action=clear">remove all</a></div>
            <div class="row hidden-md-up">
            <?php
            foreach($favItem as $item) {
                $iteminfo = $obj->fetch_id_record($item);
                ?><div class="col-md-4 p-3">
                    <div class="card card__padding">
                    <img src="<?php echo $iteminfo['path'];?>" alt="product image" class="card-img-top img-responsive thumbnail">
                    <div class="card-block p-5">
                        <h3><?php echo $iteminfo['item_name'];?></h3>
                        <p><?php echo shorten_text($iteminfo['description'], 200,'........', true);?></p>
                        <h3>$<?php echo $iteminfo['price'];?></h3>
                        <div><a href="favourite.php?action=delete&id=<?php echo $iteminfo['itemid'];?>">remove</a></div>
                    </div>

                    </div>
                </div><?php  
            }?>
            </div>
            </div><?php
        }
        else {?>
            <div class='text-center'><h4>No favourites saved!</h4></div><?php
        }

    ?>
    </section>
<?php include 'footer.php'; ?>