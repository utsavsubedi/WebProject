<?php include 'header.php';


    if(isset($_GET['category'])){


        
?>



        <section> 
            <div class="py-5">

            <div class="container">
            <h2><?php
            echo strtoupper($category);?></h2>
            <div class="dropdown mt-5 mb-3">
                <div>
                    <span class="h3">sort by</span><div class="glyphicon glyphicon-chevron-down"></div>
                </div>
        
                <div class="dropdown-content">
                    <div><a href='category.php?sort=cheap&category=<?php echo $category;?>'>cheapest</a></div>
                    <div><a href='category.php?sort=letters&category=<?php echo $category;?>'>alphabets</a></div>
                    <div><a href='category.php?sort=exp&category=<?php echo $category;?>'>most expensive</a></div>
                </div>
            </div>
            <div class="row hidden-md-up">
            <?php
            foreach($items as $item) {?>
                <div class="col-md-3">
                <a href="item.php?itemid=<?php echo $item['itemid'];?>">
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
                                   <a href="category.php?category=<?php echo $category;?>&fav=<?php echo $item['itemid'];?>" class="ml-5"><div id='font-green' class="glyphicon glyphicon-heart"></div></a> <?php
                               }
                               else {?><div id='font-red' class="glyphicon glyphicon-heart ml-5"></div> <?php
                                }
                               }
                                else{?><a href="category.php?category=<?php echo $category;?>&fav=<?php echo $item['itemid'];?>" class="ml-3"><div id='font-green' class="glyphicon glyphicon-heart"></div></a><?php
                                } 
   
                       }?>
                       </span>
                       </div>

                    </div>
                    </div> 

                    </div>
                                <?php  
            }?>
            </div>
            </div>
    </div>
        
        </section>
<?php
    } 
    else {
        header('location: index.php');
    }        ?>

<?php include 'footer.php' ?>