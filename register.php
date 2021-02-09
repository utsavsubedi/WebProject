<?php 
include 'header.php'; ?>



    <div class="container">
    <div class='how-section1'></div>
            <div class="row justify-content-center align-items-center">
                <div class="my__container">
                        <form class="form" method='POST' action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' enctype="multipart/form-data">
                            <div class='card__padding'><h3 class="text-center mb-5">REGISTER</h3></div>

                            <div class='mt-5'>
                            <?php 
                                if(count($errors)>0):
                                ?>
                                <div>
                                <?php
                                    foreach($errors as $error):?>
                                    <p><?php echo $error; ?></p>
                                    <?php endforeach
                                ?>
                                </div>
                                <?php endif ?>
                            </div>
                            <div class="form-group">
                                <label for="username" >Username:</label><br>
                                <input type="text" name="username"  value='<?php if(isset($_POST['username'])) echo $_POST['username'];?>' class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="username" >Email:</label><br>
                                <input type="text" name="email" value='<?php if(isset($_POST['email'])) echo $_POST['email'];?>'  class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" >Password:</label><br>
                                <input type="text" name="pass1" value='<?php if(isset($_POST['pass1'])) echo $_POST['pass1'];?>' class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" >Confirm Password:</label><br>
                                <input type="text" name="pass2" value='<?php if(isset($_POST['pass2'])) echo $_POST['pass2'];?>' class="form-control">
                            </div>
                            <div class="form-group">

                                <select name='ageRange' class="form-control">
                                    <option>18-30</option>
                                    <option>31-60</option>
                                </select>
                            </div>
                            <div class="form-group">
                            <input type="checkbox" name="condition" value='1' >
                            <label for="password" >Agree to term and condition</label><br>

                            </div>
                            <div class="form-group">
                                <input type="submit" name="register" class="btn btn-info btn-md" value="Register">
                            </div>

                            <div id="register-link" class="text-right">
                            Already a member? <a href="login.php">Login</a>
                            </div>
                        </form>
                    </div>
            </div>







  


<?php include 'footer.php' ?>