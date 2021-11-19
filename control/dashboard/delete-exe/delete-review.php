<?php require_once("../includes/config.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php
	if(isset($_GET['id']) && !empty($_GET['id']))
	{
		if(deleteReview($_GET['id'])){
			redirect("../manage-reviews.php?er=5");
		}else{
			redirect("../manage-reviews.php?er=13");
		}	
	}else{
		redirect("../manage-reviews.php");
	}
?>