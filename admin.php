<?php
include 'includes/form.php'; ?>
<?php
    if(!isset($_SESSION['is_admin'])) {
        header('location: index.php');
    }
?>
<!--header starts-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css"/>
    <link rel='stylesheet' href='css/style.css'/>
    <link rel='stylesheet' href='css/bootstrap4.css'/>
    <title>Daraz</title>
</head>
<body>

    <?php
     //checks session for admins
         if(isset($_SESSION['is_admin'])): ?>
        <div class='container__flex'>
            <div class='flex__item1'>Greetings, <?php echo $_SESSION['username'];?>!</div>
            <div class='flex__item'><a href="admin.php">Dashboard<div class="glyphicon glyphicon-tasks"></div></a></div>
            <div class='flex__item'><a href="favourite.php">Favourite<div class="glyphicon glyphicon-heart"></div></a></div>
            <div class='flex__item'><a href="index.php?logout='1'">Logout<div class="glyphicon glyphicon-log-out"></div></a></div>
        </div>

        <?php 
        endif; ?>


<div class="container-fluid bg-dark">
  <nav class="container navbar navbar-expand-lg navbar-dark bg-black">
  <a class="navbar-brand" href="index.php"><h3><div class="glyphicon glyphicon-euro mr-2"></div>DARAZ</h3></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul>

    </ul>


    <form class="navbar-form navbar-right" method='POST' action='search.php' enctype="multipart/form-data">
      <div class="input-group">
        <input type="text" class="form-control" placeholder='Search' name='item'/>
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit" name='search'>
            <div class="glyphicon glyphicon-search"></div>
          </button>
        </div>
      </div>
    </form>

        <ul class="nav navbar-nav ml-auto">
            <li><a id='font-white' href="users.php" class='nolink'><span class="glyphicon glyphicon-user"></span> User Listing</a></li>
        </ul>
  </div>
</nav>
</div>
<!--header ends-->



    <?php
        $items = $obj->fetch_record('item');?>
        <section class="container mt-5">
        <div class='container mb-5'>
            <div class='row'>
                    <div class="col-md-4"><h2><b>Product Listing</b></h2></div>
                    <div class="col-md-1 ml-auto mr-5"><a href="addProduct.php" class="padding_item"><button class="btn btn-primary">Add Product</button></a></div>
            </div>
        </div>

            <?php
        foreach($items as $item) {
            ?>
            <div class='container mb-5'>
            <div class='row'>
                <div class='col-md-4 ml-5'>
                    <img src="<?php echo $item['path'];?>" alt="product image" class="admin_product_img img-responsive thumbnail">
                </div>
                <div class="col-md-7 ">
                    <div class='row p-3'>
                    <h4><?php echo $item['item_name'];?></h4>
                    </div>
                    <div class='row'>
                    <p><?php echo shorten_text($item['description'], 200,'......', true);?></p>
                    </div>
                    <div class='row'>
                        <h4>$PRICE: <?php echo $item['price'];?></h4>
                    </div>
                    <div class='row'>
                    <a href="addProduct.php?edit=<?php echo $item['itemid'];?>">update</a>
                    <a class='ml-3' href="admin.php?delete=<?php echo $item['itemid'];?>">delete</a>
                    </div>

                    </div>
            </div>

            </div>

      <?php  }
    ?>
    </section>

<?php include 'footer.php' ?>