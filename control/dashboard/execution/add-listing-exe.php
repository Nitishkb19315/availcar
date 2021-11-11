<?php require_once("../includes/config.php") ?>
<?php require_once("../includes/functions.php") ?>
<?php $page = "../add-listing.php" ?>
<?php
session_start();
if (isset($_POST['submit'])) {
//preg_split("/,/","adf"): use for split with ,||||| implode(" ",$arr): use for convert array into string with space separator.
    if(!isset($_POST['username'])){
        $_POST['username'] = get_username($_POST['user_id']);
    }
    $_POST['feature']=implode(",",$_POST['feature']);
    $table_name = "listing";
    $username = mysql_prep($_POST['username']);
    $errors = array();
    $table_name = "listing";
    $unique_id = get_max_id($table_name);
    $width = 550;
    $height = 450;
    $additionalImageName ="";
    $upload_dir = "listing_image";
    if (!$filename  = upload_file($_FILES['mainImage']['tmp_name'], $_FILES['mainImage']['name'], $upload_dir, $width, $height, $unique_id)) {
        $errors[] = "File not exists";
    }
    for($i = 0; $i < count($_FILES['additionalImage']['name']); $i++) {
        $additionalImage_unique_id = $unique_id."_".$i+1; 
        if (!$imageArray[$i]  = upload_file($_FILES['additionalImage']['tmp_name'][$i], $_FILES['additionalImage']['name'][$i], $upload_dir, $width, $height, $additionalImage_unique_id)) {
            $errors[] = "File not exists";
        }
    }
    if (!$errors){
        addListing($_POST, $filename,$imageArray,$unique_id);
        if($_SESSION['user_type'] == "user"){ redirect("../user-listing.php?er=8");}else{ redirect("../manage-listing.php?er=8");}
        
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