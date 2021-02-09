<?php 
//creating a funciton for checking if user as a certain item as a fav
//this function requires $userfav array which is only created if user logs in
function check_fav($userfav,$itemid) {
    $favcount=0;
    if($userfav) {
        foreach($userfav as $fav) {
            if($fav['itemid']==$itemid){
                return true;
            }
        }
    }

    else return false;
}

function shorten_text($text, $max_length = 140, $cut_off = '...', $keep_word = false)
{
    if(strlen($text) <= $max_length) {
        return $text;
    }

    if(strlen($text) > $max_length) {
        if($keep_word) {
            $text = substr($text, 0, $max_length + 1);

            if($last_space = strrpos($text, ' ')) {
                $text = substr($text, 0, $last_space);
                $text = rtrim($text);
                $text .=  $cut_off;
            }
        } else {
            $text = substr($text, 0, $max_length);
            $text = rtrim($text);
            $text .=  $cut_off;
        }
    }

    return $text;
}

//get's userid of current session and stores it with the itemid

function cookieStore($itemid) {

    

    if(isset($_COOKIE[$_SESSION['userid']]))
    {
     $cookie_data = stripslashes($_COOKIE[$_SESSION['userid']]);//if cookie is set then stipe the value 
   
     $cart_data = json_decode($cookie_data, true);//json decode it
   
    }
    else
    {
     $cart_data = array();//else create an empty array called cart_data
    }
   
    $item_id_list = $cart_data;//fetch itemid data directly from nested assoc array 
                                                        //store it in itemidlist
   
    if(!in_array($itemid, $item_id_list))
    {
     $cart_data[] = $itemid;
    }
   
    
    $item_data = json_encode($cart_data);
    setcookie($_SESSION['userid'], $item_data, time() + (10000000)); //finally encode the data and store it
   }
   
   /* deleting individual data */
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
       $item_data = json_encode($cart_data);  //again stores it in a variable and sets cookie
       setcookie($_SESSION['userid'], $item_data, time() + (86400 * 30));
      }
     }
    }
    if($_GET["action"] == "clear")
    {
     setcookie($_SESSION['userid'], "", time() - 3600);
     header("location:index.php?clearall=1");
    }

}

// function fetch_cookie($userid) {



 






