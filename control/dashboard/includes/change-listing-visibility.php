<?php require_once("../includes/config.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php 
if(isset($_GET['id'])&& !empty($_GET['id'])){
    echo(change_listing_visibility($_GET['id'],$_GET['status']));
}
?>