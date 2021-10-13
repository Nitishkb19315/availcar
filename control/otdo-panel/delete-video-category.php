<?php require_once("includes/config.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php
	if(isset($_GET['id']) && !empty($_GET['id']))
	{
		
		deletevcate($_GET['id']);
		redirect("admin-video-category.php?er=5");	
	}
?>