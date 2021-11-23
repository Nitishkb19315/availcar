<?php require_once("../includes/config.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php 
    if(isset($_GET['id']) && !empty($_GET['id'])){
        if(deletePackage($_GET['id'])){
		    redirect("../manage-packages.php?er=5");
        }else{
            redirect("../manage-packages.php?er=13");
        }
    }
?>