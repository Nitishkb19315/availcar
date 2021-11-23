<?php require_once("../includes/config.php") ?>
<?php require_once("../includes/functions.php") ?>
<?php
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $error = true;
    
    if (get_user_listing_count($_GET['id']) > 0) {
        $data = get_user_listing_id($_GET['id']);
        if (mysqli_num_rows($data) > 0) {
            while ($row = mysqli_fetch_assoc($data)) {
                $filename ="";
                $id = $row['id'];
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

                if (DeleteListing($directory, $filename, $id, $listing_images)) {
                    $error = false;
                } else {
                    $error = true;
                }
            }
        }
    }
    $image = get_user_image($_GET['id']);
    if(!$error && delete_photo('profiles', $image) && delete_user($_GET['id'])){
        redirect("../manage-users.php?er=5");
    }else{
        redirect("../manage-users.php?er=6");
    }
} else {
    redirect("../manage-users.php?er=6");
}
?>