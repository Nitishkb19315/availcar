<?php require_once("../includes/config.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php
$listing_data = get_all_pending_listings();
if (mysqli_num_rows($listing_data) > 0) {
    while ($data = mysqli_fetch_assoc($listing_data)) {
        $id = $data['id'];
        $status = "Approved";
        if (change_listing_approval_status($id, $status)) {
            header("Location: " . $_SERVER["HTTP_REFERER"]);
        } else {
            header("Location: " . $_SERVER["HTTP_REFERER"]);
        }
    }
}
else{
    header("Location: " . $_SERVER["HTTP_REFERER"]);
}


?>