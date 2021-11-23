<?php require_once("../includes/config.php") ?>
<?php require_once("../includes/functions.php") ?>
<?php 
 if(approve_all_users()){ 
     header("Location: " . $_SERVER["HTTP_REFERER"]);
 }else{
    header("Location: " . $_SERVER["HTTP_REFERER"]);
 }
?>