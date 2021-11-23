
<?php require_once("../includes/config.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php

$data = get_all_pending_listings();
if (mysqli_num_rows($data) > 0) {
    $errors = array();
    while ($row_main = mysqli_fetch_assoc($data)) {
        $id =$row_main['id'];
        $directory = "listing_image";
        $result = getListingID($id);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $filename = mysql_prep($row['main_image']);
        }
        $images = get_listing_images($id);
        $i = 0;
        $listing_images[0] = "";
        while ($row = mysqli_fetch_assoc($images)) {
            $listing_images[$i] = $row['image_name'];
            $i++;
        }

        if (!DeleteListing($directory, $filename, $id, $listing_images)) {
            array_push($errors,"failed");
        } 
    }
    if(!$errors){
        redirect("../dashboard.php?er=success");
    }else{
        redirect("../dashboard.php?er=failed");
    }
}
?>