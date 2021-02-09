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
            <li><a id='font-white' href="admin.php" class='nolink'><span class="glyphicon glyphicon-lock"></span> Product Listing</a></li>
        </ul>
  </div>
</nav>
</div>
<!--header ends-->



    <?php
        $items = $obj->fetch_record('user');?>
        <section class="container">
            <div class='container mt-5 mb-5'>
                <h2><b>User Listing</b></h2>
            </div>

            <table class="table table-bordred table-striped">
                   
                   <thead>
                   <th>First Name</th>
                     <th>Email</th>
                     <th>Role</th>
                       <th>Delete</th>
                   </thead>

                   <tbody>

                   <?php

                    foreach($items as $item) {?>

                    <tr>
                        <td><?php echo $item['username'];?></td>
                        <td><?php echo $item['email'];?></td><?php
                        if($item['is_admin']){?>
                        <td>admin</td>
                        <td></td><?php
                        }
                        else {?>
                        <td>user</td>
                        <td><a href="users.php?userdelete=<?php echo $item['userid'];?>"><p><button class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></button></p></a></td><?php

                        }

                        ?>
                    </tr><?php  
                        }?>
                   
                   </tbody>

            </table>

         </section>

<?php include 'footer.php' ?>