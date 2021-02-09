<?php include 'header.php' ;

    if(!isset($_SESSION['is_admin'])) {
        header('location: index.php');
    }
        ?>
    <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="my__container">
                        <form class="form" method='POST' action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' enctype="multipart/form-data">
                            <div class='card__padding'><h3 class="text-center text-info">Add Product</h3></div>

                            <div>
                                <?php if(count($errors)) {
                                foreach($errors as $error) {
                                    ?><div><?php echo $error;?></div><?php
                                }
                                }
                                echo $msg?>
                                
                            </div> 

                            <input type='hidden' name='itemid'
                            value='<?php echo (isset($update_result)) ? $update_result['itemid'] : '';
                            echo (isset($_POST['itemid'])) ? $_POST['itemid']: '';
                            ?>'/>

                            <div class="form-group">
                                <label for="item_name" class="text-info">Name:</label><br>
                                <input type="text" name="item_name"  value='<?php echo (isset($update_result)) ? $update_result['item_name'] : '';
                                                                                    echo (isset($_POST['item_name'])) ? $_POST['item_name']: ''; ?>'  class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="username" class="text-info">Description</label><br>
                                <textarea name='description'  class="form-control" minlength="250">
                                    <?php echo (isset($update_result)) ? $update_result['description'] : '';
                                        echo (isset($_POST['description'])) ? $_POST['description']: '';?>
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Price:</label><br>
                                <input type="text" name="price" 
                                value='<?php echo (isset($update_result)) ? $update_result['price'] : '';
                                            echo (isset($_POST['price'])) ? $_POST['price']: '';?>'  class="form-control">
                            </div>

                            <div class="form-group">

                                <select name='category'
                                value='<?php echo (isset($update_result)) ? $update_result['category'] : '';
                                            echo (isset($_POST['category'])) ? $_POST['category']: '';?>'  class="form-control">
                                    <option value='mobiles'>Mobiles</option>
                                    <option value='clothes'>Clothes</option>
                                    <option value='laptops'>laptops</option>
                                </select>
                            </div>
                            <div class="form-group">
                            <input type="file" name="thumbnail" >

                            </div>
                            <div>
                                <?php 
                                echo ($obj->update == true) ? "<input class='btn btn-success' type='submit' name='update' value='Update'/>" : "<input class='btn btn-success' type='submit' name='submit_insert' value='Insert'/>";
                                ?>
                            </div>

                            <div class="text-right">
                            <div><a href="admin.php">Back to admin</a></div>
                            </div>
                        </form>
                    </div>
            </div>
        </div>




    <!--</form> -->
<?php include 'footer.php' ?>