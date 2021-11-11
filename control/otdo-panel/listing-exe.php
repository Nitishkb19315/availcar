<?php require_once("includes/config.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php $page = "admin-listing.php" ?>
<?php
if (isset($_POST['submit'])) {
    print_r($_FILES['mainImage']);
    // preg_split("/,/","adf"): use for split with ,   || implode(" ",$arr): use for convert array into string with space separator.
    $username = mysql_prep($_POST['username']);
    $errors = array();
    $table_name = "listing";
    $unique_id = get_max_id($table_name);
    $width = 550;
    $height = 450;
    $upload_dir = "listing_image";
    if (!$filename  = upload_file($_FILES['mainImage']['tmp_name'], $_FILES['mainImage']['name'], $upload_dir, $width, $height, $unique_id)) {
        $errors[] = "File not exists";
    }
    if (!$errors){
        addListing($_POST, $filename);
        redirect($page . "?er=8");
    } else {
        redirect($page . "?er=11");
    }
} else {
    redirect($page . "?er=enter");
}

function verifyData($title)
{
    if (trim($title) == "" || empty($title))
        return false;
    else {
        return true;
    }
}

?>