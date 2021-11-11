
<?php require_once("../includes/config.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php
	if(isset($_GET['id']) && !empty($_GET['id']))
	{
		$id = mysql_prep($_GET['id']);
		$directory = "listing_image";
		$filename = get_listing_image_name($id);
		if(deleteListingImage($directory, $filename, $id)){
            header("Location: " . $_SERVER["HTTP_REFERER"]);
        }else{
            redirect("../listing-images.php?er=");
        }
    }
?>