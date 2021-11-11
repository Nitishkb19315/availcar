<?php require_once("../includes/config.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php
	if(isset($_GET['id']) && !empty($_GET['id']))
	{
		if(check_subcategory_make($_GET['id'],"car_model")){
			deleteMake($_GET['id']);
			redirect("../manage-make.php?er=5");
		}else{
			redirect("../manage-make.php?er=13");	
		}	
	}else{
		redirect("../manage-make.php");
	}
?>