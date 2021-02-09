<?php include 'header.php'; ?>


    <section class="container">
        <div class='how-section1'></div><?php

    if(isset($_GET['itemid'])) {
        $iteminfo = $obj->fetch_id_record($_GET['itemid']);
        ?>
        <div class='row'>
        <div class='col-md-6'>
            <img src="<?php echo $iteminfo['path'];?>" alt="product image" class=" img-responsive">
        </div>
        <div class="col-md-4">
            <div class='flex__item'>
            <h3><?php echo $iteminfo['item_name'];?></h3>
            </div>
            <div class='row'>
                <div class='col-md-3 ml-3 '>Price: $<?php echo $iteminfo['price'];?></div>

                <div class='col-md-1'>
                <?php
                    if(isset($favItem)){
                    if(!in_array($iteminfo['itemid'], $favItem)){?>
                        <a href="item.php?itemid=<?php echo $iteminfo['itemid']; ?>&fav=<?php echo $iteminfo['itemid']; ?>"><div class="glyphicon glyphicon-heart ml-5"></div></a> <?php
                    }
                    else {?><div class="glyphicon glyphicon-heart ml-5"></div> <?php
                        }
                    }
                        else{?><a href="item.php?itemid=<?php echo $iteminfo['itemid']; ?>&fav=<?php echo $iteminfo['itemid']; ?>"><div class="glyphicon glyphicon-heart ml-5"></div></a><?php
                        } ?>
                </div>



            </div>

        
        </div>
    </div>
    <div class='row'>
        <h3>Desciption</h3>
        <div class='how-section1'></div>
        <div class='mt-5'><p class='text-center'><?php echo $iteminfo['description']?> <?php echo $_SESSION['userid']; echo $_SESSION['username'];?></p></div>
     </div>
     </section>
    <?php
    }else {
        header('location: index.php');
    }
include 'footer.php'; ?>