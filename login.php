<?php include 'header.php'; ?>



    <div class="container ">
            <div class='how-section1'></div>
            <div class="row justify-content-center align-items-center">
                <div class="my__container ">
                        <form class="form" method='POST' action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' enctype="multipart/form-data">
                            <div class='card__padding'><h1 class="text-center mb-5">LOGIN</h1></div>

                            <div class="mt-5">
                            <?php
                                foreach($errors as $error):?>
                                <p><?php echo $error; ?></p>
                            <?php endforeach;
                            ?>
                            </div>
                            <div class="form-group">
                                <label for="username" >Username:</label><br>
                                <input type="text" name="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" >Password:</label><br>
                                <input type="text" name="pass" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="login" class="btn btn-info btn-md" value="submit">
                            </div>
                            <div id="register-link" class="text-right">
                                Not a member? <a href="register.php" >Register here</a>
                            </div>
                        </form>
                    </div>
            </div>
        </div>

    </div>







    <?php include 'footer.php' ?>