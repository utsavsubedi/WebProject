<?php 
	include('init.php');


//Use an if statement to determine whether the session var holding //the user name ($_SESSION['user'] has been set.  If it has, echo out //a welcome message for the user, followed by a links to a pages //called protected.php and logout.php.
if (isset($_SESSION['user']))
{
	echo ("Welcome to the Login system");

}

else
{
	header('location:loginform.php');
}

//add an else section that will include loginform.php and display any //error message that is held in ($_SESSION['error']  
	
	?>

	<html>
<head>
</head>
<body>
	<br/><a href = 'protected.php'> Protected Page </a> <br/>
		<a href = 'logout.php'> Logout </a></form>
</body>
</html>
