<?php
session_start();
include 'dboperation.php';
include 'function.php';
$errors=[];
$msg='';


 if(isset($_POST['submit_insert'])) {

     //form validation
     $item_name = '';
     $description = '';
     $price = 0;
     $category = '';
     
     //checking for empty fields
    if(!empty($_POST['item_name']) && !empty($_POST['description']) && !empty($_POST['price']) && !empty($_FILES["thumbnail"]["name"])) {

        //checking for invalid price
         if(filter_var($_POST['price'], FILTER_VALIDATE_FLOAT)) {
            $item_name = filter_var($_POST['item_name'], FILTER_SANITIZE_STRING);
            $description = filter_var($_POST['description'], FILTER_SANITIZE_STRING);
            $price = $_POST['price'];
            $category = $_POST['category'];

            //image upload process begins

            $target_dir = "img/";
            $target_file = $target_dir . basename($_FILES["thumbnail"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            $check = getimagesize($_FILES["thumbnail"]["tmp_name"]);
        
        
            if($check !== false) {
                //echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                array_push($errors, "File is not an image.");
                $uploadOk = 0;
            }
        
            // Check if file already exists
            if (file_exists($target_file)) {
                //echo "Sorry, file already exists.";
                $uploadOk = 0;
            }
            // Check file size
            if ($_FILES["thumbnail"]["size"] > 500000) {
                array_push($errors, "Sorry, your file is too large.");
                $uploadOk = 0;
            }
            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
                array_push($errors, "Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
                $uploadOk = 0;
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {

            // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file)) {
                    //echo "The file ". basename( $_FILES["thumbnail"]["name"]). " has been uploaded.";

                } else {
                    array_push($errors, "Sorry, there was an error uploading your file.");
                }
            }
             //image upload process ends

            //storing all retrieved data into an array
            $data = [
                'item_name' => $item_name,
                'description' => $description,
                'price' => $price,
                'category' => $category,
                'path' => $target_file
            ];
            $obj->insert_record('item',$data);
            $msg="Product inserted successfully!!";


         }//end of fload validation for price
         else {
            array_push($errors, "Invalid Price");
         }
    }//end of empty field check
    else {
        array_push($errors, "All fields are mandatory!!");
    }

    //form validation and data insert ends
}


//delete data using button
if(isset($_GET['delete'])){
    $id= $_GET['delete'];
    $obj->delete_record($id);
}

//delete user using button
if(isset($_GET['userdelete'])){
    $id= $_GET['userdelete'];
    $obj->delete_record_user($id);
}
//update data using button
if(isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update_result = $obj->fetch_id_record($id);

}

//display fetch user data 
// if(isset($_GET['user'])) {
//     $user_record = $obj->fetch_record('user');
// }

//updating the data in database
 
if(isset($_POST['update'])) {

    //form validation
    $item_name = '';
    $description = '';
    $price = 0;
    $category = '';
    
    //checking for empty fields
   if(!empty($_POST['item_name']) && !empty($_POST['description']) && !empty($_POST['price']) && !empty($_FILES["thumbnail"]["name"])) {

       //checking for invalid price
        if(filter_var($_POST['price'], FILTER_VALIDATE_FLOAT)) {
           $item_name = filter_var($_POST['item_name'], FILTER_SANITIZE_STRING);
           $description = filter_var($_POST['description'], FILTER_SANITIZE_STRING);
           $price = $_POST['price'];
           $category = $_POST['category'];

           //image upload process begins

           $target_dir = "img/";
           $target_file = $target_dir . basename($_FILES["thumbnail"]["name"]);
           $uploadOk = 1;
           $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
           $check = getimagesize($_FILES["thumbnail"]["tmp_name"]);
       
       
           if($check !== false) {
               //echo "File is an image - " . $check["mime"] . ".";
               $uploadOk = 1;
           } else {
            array_push($errors, "File is not an image.");
               $uploadOk = 0;
           }
       
           // Check if file already exists
           if (file_exists($target_file)) {
               //echo "Sorry, file already exists.";
               $uploadOk = 0;
           }
           // Check file size
           if ($_FILES["thumbnail"]["size"] > 500000) {
            array_push($errors, "Sorry, your file is too large.");
               $uploadOk = 0;
           }
           // Allow certain file formats
           if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
           && $imageFileType != "gif" ) {
            array_push($errors, "Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
               $uploadOk = 0;
           }
           // Check if $uploadOk is set to 0 by an error
           if ($uploadOk == 0) {
               //echo "Sorry, your file was not uploaded.";
           // if everything is ok, try to upload file
           } else {
               if (move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file)) {
                  // echo "The file ". basename( $_FILES["thumbnail"]["name"]). " has been uploaded.";
       
               } else {
                array_push($errors, "Sorry, there was an error uploading your file.");
               }
           }
            //image upload process ends
           
           $itemid = $_POST['itemid'];

           $obj->update_item_record($itemid, $item_name, $description, $category, $price, $target_file);
           $msg="Record updated successfully!!";


        }//end of fload validation for price
        else {
            array_push($errors, "Invalid Price");
        }
   }//end of empty field check
   else {
    array_push($errors, "All fields are mandatory!!");
   }

   //form validation and data insert ends
}

/* Register form validation and user registration */
$username = '';
$email='';

if(isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];
    $ageRange = $_POST['ageRange'];

    if(empty($username)) {
        array_push($errors, "Username field is empty!!");
    }


    if(empty($_POST['condition']))
    {
        array_push($errors, "Agree to our terms and condition!");
    }

    if(empty($email)) {
        array_push($errors, "Email field is empty!!");
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
    }

    if(empty($pass1)) {
        array_push($errors, "Password field is empty!!");
    }
    else if($pass1 != $pass2) {
        array_push($errors, "Passwords do not match!!");
    }
    else if(strlen($pass1) < 8) {
        array_push($errors, "Password must be atleast 8 characters long!!");
    }

    if(empty($ageRange)) {
        array_push($errors, "Provide your age range!");
    }

    $users = $obj->fetch_record('user');
    foreach($users as $user) {
        if($user['username'] == $username){
            array_push($errors, "User with the username already exits");
        }
    }
    $password = md5($pass1);
    $data = [
        'username' => $username,
        'password' => $password,
        'email' => $email,
        'ageRange'=>$ageRange

    ];

    if(count($errors)==0) {
        //inserting user into database
        $query = $obj->insert_record('user', $data);
        //fetching the userdata
        if($query) {
            $user_data = $obj->fetch_user($username, $password);
            //creating a session variables
            $_SESSION['is_admin'] = $user_data[0]['is_admin'];
            $_SESSION['username'] = $username;
            $_SESSION['userid'] = $user_data[0]['userid'];
            header('location: index.php');  
        }
 
    }

}

//destroying the session when logout is pressed
if(isset($_GET['logout'])) {
    session_destroy();
    header('location: index.php');

}

//checking user data for login
if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $pass = $_POST['pass'];

    if(empty($username)) {
        array_push($errors, "Username field is empty!!");
    }


    if(empty($pass)) {
        array_push($errors, "Password field is empty!!");
    }


    $password = md5($pass);

    if(count($errors)==0) {
        $user_data = $obj->fetch_user($username, $password);
        if($user_data) {
            //checking if user is admin or not
            $_SESSION['is_admin'] = $user_data[0]['is_admin'];
            $_SESSION['username'] = $username;
            $_SESSION['userid'] = $user_data[0]['userid'];
            header('location: index.php');
        }
        else {
            array_push($errors, "User doesn't exist!");
        }
    }
}

//fetching items for category.php page
$items= [];
if(isset($_GET['category'])){
    $category= $_GET['category'];
    $items = $obj->fetch_item_category($category);
}

//fetching userfav
// if(isset($_SESSION['userid'])) {
//     $userfav = $obj->fetch_user_fav($_SESSION['userid']);

// }




// $user_id ='';
// //saving user favourites in the database 
// if(isset($_GET['fav'])) {
//     $fav = $_GET['fav'];
//     $userid = $_SESSION['userid'];

//     $data = [
//         'userid'=>$userid,
//         'itemid'=>$fav
//     ];
//     if(!check_fav($userfav, $fav)){
//         $obj->insert_record('favourite',$data);
//     }

// }
// elseif(isset($_GET['fav']) && isset($_GET['category'])) {
//     $fav = $_GET['fav'];
//     echo $fav;
//     $userid = $_SESSION['userid'];

//     $data = [
//         'userid'=>$userid,
//         'itemid'=>$fav
//     ];
//     if(!check_fav($userfav, $fav)){
//         $obj->insert_record('favourite',$data);
//         header('location: category.php?category='. $_GET['category']);
//     }
// }

//fav with cookies

// if(isset($_GET['category'] && isset([$_GET['fav']]))) {
//     cookieStore($_GET['fav']);
    
// }

//from index
if(isset($_GET['fav'])) {
    //from category
    if(isset($_GET['category'])) {
        cookieStore($_GET['fav']);
        header('location: category.php?category='.$_GET['category']);
    }
    else if(isset($_GET['itemid'])) {
        cookieStore($_GET['fav']);
        header('location: item.php?itemid='.$_GET['itemid']);
    }
    else if(isset($_GET['search'])) {
        cookieStore($_GET['fav']);
        header('location: search.php?search='.$_GET['search']);
    }
    else{
        cookieStore($_GET['fav']);
        header('location: index.php?success=1');
    }
}

// //from category
// if(isset($_GET['fav']) && isset($_GET['category'])) {
//     cookieStore($_GET['fav']);
//     header('location: category.php?category='.$_GET['category']);
// }
// if(isset($_GET['fav']) && isset($_GET['itemid'])) {
//     cookieStore($_GET['fav']);
//     header('location: item.php?category='.$_GET['itemid']);
// }
// if(isset($_GET['fav']) && isset($_GET['search'])) {
//     cookieStore($_GET['fav']);
//     header('location: search.php?search='.$_GET['search']);
// }
// if(isset($_GET['fav']) && !isset($_GET['category']) && !isset($_GET['itemid']) && !isset($_GET['search'])) {
//     cookieStore($_GET['fav']);
// }

//deleting individual favourites
if(isset($_GET['remove'])) {
    $itemid= $_GET['remove'];
    echo $_GET['remove'];
    $query = $obj->remove_fav($itemid, $_SESSION['userid']);
    if($query) {
        header('location: ../favourite.php');
    }
}

if(isset($_GET["action"]))
{
 if($_GET["action"] == "delete")
 {
  $cookie_data = stripslashes($_COOKIE[$_SESSION['userid']]);
  $cart_data = json_decode($cookie_data, true); //stores cookie data

  foreach($cart_data as $keys => $values) //runs loop to go through individual data
  {
   if($values == $_GET["id"])//checks if the itemid which called this process is present
   {
    unset($cart_data[$keys]); //deletes it
    header('location: favourite.php?success=1');
    $item_data = json_encode($cart_data);  //again stores it in a variable and sets cookie
    setcookie($_SESSION['userid'], $item_data, time() + (86400 * 30));
   }
  }
 }

 if($_GET["action"] == "clear")
 {
  setcookie($_SESSION['userid'], "", time() - 3600);
  header("location: favourite.php?clearall=1");
 }

}

//fetching cookies
if(isset($_SESSION['userid'])){
    if(isset($_COOKIE[$_SESSION['userid']]))
    {
    $favItem=[];
     $cookie_data = stripslashes($_COOKIE[$_SESSION['userid']]);
     $cart_data = json_decode($cookie_data, true);
     foreach($cart_data as $keys => $values)
     {
        array_push($favItem, $values);
     }
    
    
    }
}


//delete all from favourite for a user
if(isset($_GET['deleteall'])){
    $query = $obj->fav_delete_all($_SESSION['userid']);
}

//sorting by price cheapest
if(isset($_GET['sort'])){

    if($_GET['sort']=='cheap') {
        $category= $_GET['category'];
        $items = $obj->fetch_cheap_category($category);
    }
    if($_GET['sort']=='letters') {
        $category= $_GET['category'];
        $items = $obj->fetch_letters_category($category);
    }
    if($_GET['sort']=='exp') {
        $category= $_GET['category'];
        $items = $obj->fetch_exp_category($category);
    }
}


