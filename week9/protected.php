<?php
include 'init.php';
if(!isset($_SESSION['user'])){
    header ('location:watWk9.php');
}
?>
<html>
<head>
</head>
<body>
	This is Protected Page.	
</body>
</html>
