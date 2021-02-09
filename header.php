
<?php
include 'includes/form.php'; ?>
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
    //checks for sessions for user who is not admin
    if(isset($_SESSION['username']) && !$_SESSION['is_admin']): ?>
    <div class='container__flex'>
        <div class='flex__item1'>Greetings, <?php echo $_SESSION['username'];?>!</div>
        <div class='flex__item'><a href="favourite.php">Favourite <i class="fas fa-columns"></i></a></div>
        <div class='flex__item'><a href="index.php?logout='1'">Logout<div class="glyphicon glyphicon-log-out"></div></a></div>
    </div>

        <?php
     endif;
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

    <?php
         //for user who is not logged in
        if(!isset($_SESSION['username'])): ?>
        <ul class="nav navbar-nav ml-auto">
            <li><a id='font-white' href="register.php" class='nolink'><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a id='font-white' href="login.php" class='nolink'><span class="glyphicon glyphicon-log-in ml-3"></span> Login</a></li>
        </ul>
      <?php endif; ?>
  </div>
</nav>
</div>




    <!--navbar ends-->