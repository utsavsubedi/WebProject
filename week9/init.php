<?php 
//Set up the database access credentials
session_start();
$hostname = 'localhost'; 
$username = 'root'; 
$password = ''; 
$databaseName = 'daraz'; 
//Open the database connection - exit with error message otherwise 
$connection = mysqli_connect($hostname, $username, $password, $databaseName) or exit("Unable to connect to database!");
?>
