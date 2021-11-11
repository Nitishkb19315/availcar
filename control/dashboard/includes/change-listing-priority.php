<?php require_once("../includes/config.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php 
if(isset($_GET['id'])&& !empty($_GET['id'])){
    // echo(change_listing_state($_GET['id'],$_GET['status'],"feature_state"));
    echo(change_listing_priority($_GET['id'],$_GET['status'],"priority"));
    
    echo "working";
}
?>