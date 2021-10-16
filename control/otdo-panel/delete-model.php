<?php require_once("includes/config.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php 
    if(isset($_GET['id']) && !empty($_GET['id'])){
        deleteModel($_GET['id']);
		redirect("admin-model.php?er=5");
    }
?>