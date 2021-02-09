<?php
include ('init.php');
//Gather details submitted from the $_POST array and store in local vars

if(isset($_POST['subLogin'])){

	$user = $_POST['txtUser'];
	$pass = md5($_POST['txtPass']);
	//build query to SELECT records from the users table WHERE
	//the username AND password in the table are equal to those entered.
	$sql="SELECT * FROM user WHERE username='$user' and password='$pass'";
	$result=mysqli_query($connection, $sql);
							
	 print_r($result);
	//run query and store result
	
	//check result and generate message with code below
	if ($row = mysqli_fetch_assoc($result)) {
		$_SESSION['user']=$user;
		header ('location:watWk9.php');
	
	} else {
	echo 'User not recognised';
	echo $sql;
	} 

}

?>
