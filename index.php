<?php include 'header.php'; ?>


    <div style="background-image: url('img/women.jpg')" class='masthead'>
        <div class='headerText ml-5'>
            MAKE YOUR SHOPPING EASIER AND CHEAPER</br>
            
            WITH DARAZ
        </div>
    </div>

    <!--drop down for category-->
    <section class="container mt-5 ">
    <div class="dropdown">
        <span class="h1">Categories</span><div class="glyphicon glyphicon-chevron-down"></div>

        <div class="dropdown-content">
            <div><a href='category.php?category=mobiles'>Mobiles</a></div>
            <div><a href='category.php?category=clothes'>clothes</a></div>
            <div><a href='category.php?category=laptops'>laptops</a></div>
        </div>
    </div>
    </section>


    <section class="container mt-5">
    <h2 class='mb-5'>Mobiles</h2>
    <?php 
        $result = $obj->fetch_item_category('mobiles');
        if($result){?> 
            <div class="row"><?php
            foreach($result as $item) {?>

                <div class="col-md-3">
                <a class='nolink' href="item.php?itemid=<?php echo $item['itemid'];?>">
                    <div class='card'>
                    <div class="card-img-top ">
                        <img class="card-img-top img-responsive thumbnail" src="<?php echo $item['path'];?>" alt="product image">
                    </div>
                    <div class="card-body">
                    <h3><?php echo $item['item_name'];?></h3>
                    <p><?php echo shorten_text($item['description'], 200,'.......', true);?></p>
                    </a>
                    <div class='row'>                    
                       
                    <span class='col-md-8'><h2>$<?php echo $item['price'];?></h2></span>

                    <span class='col-md-4 ml-auto'>
                    <?php if(isset($_SESSION['username'])) {
                        if(isset($favItem)){
                            if(!in_array($item['itemid'], $favItem)){?>
                                <a href="index.php?fav=<?php echo $item['itemid'];?>" class="ml-5"><div id='font-green' class="glyphicon glyphicon-heart"></div></a> <?php
                            }
                            else {?><div id='font-red' class="glyphicon glyphicon-heart ml-5"></div> <?php
                             }
                            }
                             else{?><a href="index.php?fav=<?php echo $item['itemid'];?>" class="ml-3"><div id='font-green' class="glyphicon glyphicon-heart"></div></a><?php
                             } 

                    }?>
                    </span>
                    </div>


                    </div>
                    </div> 

                    </div>
                                <?php
            } ?>
            </div> <?php
        }?>
    </section>




        
    <section class="container mt-5">
    <h2 class='mb-5'>Clothes</h2>
    <?php 
        $result = $obj->fetch_item_category('clothes');
        if($result){?> 
            <div class="row"><?php
            foreach($result as $item) {?>

                <div class="col-md-3">
                <a class='nolink' href="item.php?itemid=<?php echo $item['itemid'];?>">
                    <div class='card'>
                    <div class="card-img-top ">
                        <img class="card-img-top img-responsive thumbnail" src="<?php echo $item['path'];?>" alt="product image">
                    </div>
                    <div class="card-body">
                    <h3><?php echo $item['item_name'];?></h3>
                    <p><?php echo shorten_text($item['description'], 200,'.......', true);?></p>
                    </a>
                    <div class='row'>                    
                       
                    <span class='col-md-8'>$<?php echo $item['price'];?></span>

                    <span class='col-md-4 ml-auto'>
                    <?php if(isset($_SESSION['username'])) {
                        if(isset($favItem)){
                            if(!in_array($item['itemid'], $favItem)){?>
                                <a href="index.php?fav=<?php echo $item['itemid'];?>" class="ml-5"><div id='font-green' class="glyphicon glyphicon-heart"></div></a> <?php
                            }
                            else {?><div id='font-red' class="glyphicon glyphicon-heart ml-5"></div> <?php
                             }
                            }
                             else{?><a href="index.php?fav=<?php echo $item['itemid'];?>" class="ml-3"><div id='font-green' class="glyphicon glyphicon-heart"></div></a><?php
                             } 

                    }?>
                    </span>
                    </div>


                    </div>
                    </div> 

                    </div>
                                <?php
            } ?>
            </div> <?php
        }?>
    </section>



    <section class="container mt-5">
    <h2 class='mb-5'>Laptops</h2>
    <?php 
        $result = $obj->fetch_item_category('laptops');
        if($result){?> 
            <div class="row"><?php
            foreach($result as $item) {?>

                <div class="col-md-3">
                <a class='nolink' href="item.php?itemid=<?php echo $item['itemid'];?>">
                    <div class='card'>
                    <div class="card-img-top ">
                        <img class="card-img-top img-responsive thumbnail" src="<?php echo $item['path'];?>" alt="product image">
                    </div>
                    <div class="card-body">
                    <h3><?php echo $item['item_name'];?></h3>
                    <p><?php echo shorten_text($item['description'], 200,'.......', true);?></p>
                    </a>
                    <div class='row'>                    
                       
                    <span class='col-md-8'>$<?php echo $item['price'];?></span>

                    <span class='col-md-4 ml-auto'>
                    <?php if(isset($_SESSION['username'])) {
                        if(isset($favItem)){
                            if(!in_array($item['itemid'], $favItem)){?>
                                <a href="index.php?fav=<?php echo $item['itemid'];?>" class="ml-5"><div id='font-green' class="glyphicon glyphicon-heart"></div></a> <?php
                            }
                            else {?><div id='font-red' class="glyphicon glyphicon-heart ml-5"></div> <?php
                             }
                            }
                             else{?><a href="index.php?fav=<?php echo $item['itemid'];?>" class="ml-3"><div id='font-green' class="glyphicon glyphicon-heart"></div></a><?php
                             } 

                    }?>
                    </span>
                    </div>


                    </div>
                    </div> 

                    </div>
                                <?php
            } ?>
            </div> <?php
        }?>
    </section>



        

<?php include 'footer.php' ?>