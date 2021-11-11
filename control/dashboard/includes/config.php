<?php
ob_start();
require_once("constants.php");

$con = @mysqli_connect(DB_SERVER,DB_USER,DB_PASS);
if(!$con){
die("Could Not Connect to Server: " .mysqli_error());
}

$db_select=mysqli_select_db($con, DB_NAME);
if(!$db_select){
die("Could not connect to database: ".mysqli_error());
}


//@ use for remove the error my_sql depriciated
?>