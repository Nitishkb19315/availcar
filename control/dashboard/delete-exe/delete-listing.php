
<?php require_once("../includes/config.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php
	if(isset($_GET['id']) && !empty($_GET['id']))
	{
		$id = mysql_prep($_GET['id']);
		$directory = "listing_image";
		$result = getListingID($id);
		if(mysqli_num_rows($result)>0)
		{
		    $row = mysqli_fetch_assoc($result);
		    $filename = mysql_prep($row['main_image']);
		}
		$images = get_listing_images($id);
		$i=0;
		$listing_images[0]="";
		while($row=mysqli_fetch_assoc($images)){
			$listing_images[$i] = $row['image_name'];
			$i++;
		}

		if(DeleteListing($directory, $filename, $id, $listing_images)){
            // redirect("../manage-listing.php?er=5");
			header("Location: " . $_SERVER["HTTP_REFERER"]."?er=5");
        }else{
            redirect("../manage-listing.php?er=13");
        }
		
    }
?>