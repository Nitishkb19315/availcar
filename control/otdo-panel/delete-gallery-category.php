<?php require_once("includes/config.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php
	if(isset($_GET['id']) && !empty($_GET['id']))
	{
		
		deletecate($_GET['id']);
		redirect("admin-gallery-category.php?er=5");	
	}
?>