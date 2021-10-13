<?php require_once("includes/config.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php
	if(isset($_GET['id']) && !empty($_GET['id']))
	{
		
		deletevideo($_GET['id']);
		redirect("admin-video.php?er=5");	
	}
?>