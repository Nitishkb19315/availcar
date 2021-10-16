<?php require_once("includes/config.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php
	if(isset($_GET['id']) && !empty($_GET['id']))
	{
		
		deleteVariant($_GET['id']);
		redirect("admin-make.php?er=5");	
	}
?>