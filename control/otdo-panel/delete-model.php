<?php require_once("includes/config.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php 
    if(isset($_GET['id']) && !empty($_GET['id'])){
        if(check_subcategory_model($_GET['id'],"car_variant")){
            deleteModel($_GET['id']);
		    redirect("admin-model.php?er=5");
        }else{
            redirect("admin-model.php?er=13");
        }
    }
?>