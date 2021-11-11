<?php
ob_start();
require_once("../includes/session.php");
require_once("../includes/config.php");
require_once("../includes/functions.php");
echo "<pre>";
print_r($_POST);
print_r($_FILES);
print_r(empty($_FILES['profile_image']['name']));
echo"</pre>";

if(isset($_POST['submit'])){
    $upload_dir = "profiles";
    $errors = array();
    $table_name = "user_profile";
    $unique_id = get_max_id($table_name);
    $width = 550;
    $height = 450;
    $filename = "";
    if(!empty($_FILES['profile_image']['name'])){
        if ( !$filename  = upload_file($_FILES['profile_image']['tmp_name'], $_FILES['profile_image']['name'], $upload_dir, $width, $height, $unique_id)) {
            $errors[] = "File not exists";
        }
    }
    if (!$errors){
        add_user($_POST, $filename,$unique_id,$_POST['id']);
        redirect("../user-dashboard.php");
    } else{
        redirect("../user-details.php?id=".$_POST['id']);
    }
    
}
?>