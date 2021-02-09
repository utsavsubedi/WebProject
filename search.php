<?php include 'header.php';

    

if(isset($_POST['search'])){

        $searchitem = strtoupper($_POST['item']);
        $items=$obj->fetch_search_item($searchitem);


    if($items){?>
        <section> 
        <div class="py-5">
        <div class="container">

        <div class="row hidden-md-up">
        <?php
        foreach($items as $item) {
            ?><div class="col-md-4 card__padding">
                <div class="card ">
                <img src="<?php echo $item['path'];?>" alt="product image" class="card-img-top img-responsive thumbnail">
                <div class="card-block">
                    <h3><?php echo $item['item_name'];?></h3>
                    <p><?php echo shorten_text($item['description'], 200,'......', true);?></p>

                    <div class='row'>                    
                       
                    <span class='col-md-8'><h2>$<?php echo $item['price'];?></h2></span>

                    <span class='col-md-4 ml-auto'>
                    <?php
                        if(isset($favItem)){
                        if(!in_array($item['itemid'], $favItem)){?>
                            <a href="search.php?search=<?php echo $searchitem;?>&fav=<?php echo $item['itemid'];?>" class="ml-5"><div class="glyphicon glyphicon-heart"></div></a> <?php
                        }
                        else {?><div class="glyphicon glyphicon-heart ml-5"></div> <?php
                         }
                        }
                         else{?><a href="search.php?search=<?php echo $searchitem;?>&fav=<?php echo $item['itemid'];?>" class="ml-3"><div class="glyphicon glyphicon-heart"></div></a><?php
                         } ?>
                    </span>
                    </div>
                </div>

                </div>
            </div><?php  
        }?>
        </div>
        </div>
        </div>

        </section><?php
    }
    else {
        echo "No results found!!";
    }

}

if(isset($_GET['search'])) {

    $searchitem = strtoupper($_GET['search']);
    $items=$obj->fetch_search_item($searchitem);

    if($items){?>
        <section> 
        <div class="py-5">
        <div class="container">

        <div class="row hidden-md-up">
        <?php
        foreach($items as $item) {
            ?><div class="col-md-4 card__padding">
                <div class="card ">
                <img src="<?php echo $item['path'];?>" alt="product image" class="card-img-top img-responsive thumbnail">
                <div class="card-block">
                    <h3><?php echo $item['item_name'];?></h3>
                    <p><?php echo shorten_text($item['description'], 200,'......', true);?></p>

                    <div class='row'>                    
                       
                    <span class='col-md-8'><h2>$<?php echo $item['price'];?></h2></span>

                    <span class='col-md-4 ml-auto'>
                    <?php
                        if(isset($favItem)){
                        if(!in_array($item['itemid'], $favItem)){?>
                            <a href="search.php?search=<?php echo $searchitem;?>&fav=<?php echo $item['itemid'];?>" class="ml-5"><div class="glyphicon glyphicon-heart"></div></a> <?php
                        }
                        else {?><div class="glyphicon glyphicon-heart ml-5"></div> <?php
                         }
                        }
                         else{?><a href="search.php?search=<?php echo $searchitem;?>&fav=<?php echo $item['itemid'];?>" class="ml-3"><div class="glyphicon glyphicon-heart"></div></a><?php
                         } ?>
                    </span>
                    </div>
                </div>

                </div>
            </div><?php  
        }?>
        </div>
        </div>
        </div>

        </section><?php
    }
    

}






include ('footer.php');?>
