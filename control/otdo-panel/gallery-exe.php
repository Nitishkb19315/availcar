<?php require_once("includes/config.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php $page="admin-gallery.php" ?>
<?php
if(isset($_POST['submit']))
{
echo $category= mysql_prep($_POST['category']);
$errors = array();
$table_name = "gallery";
$unique_id = get_max_id($table_name);
$width=550;
$height=450;
$upload_dir="gallery";
if(!$filename  = upload_file($_FILES['file_upload']['tmp_name'], $_FILES['file_upload']['name'], $upload_dir, $width, $height, $unique_id))
{
$errors[]="File not exists";
}
if(!$errors)
{	
addGallery($category,$filename);
redirect($page."?er=8");	
} 
else 
{
redirect($page."?er=11");	
}
}
else 
{
redirect($page."?er=enter");	
}

function verifyData($title){
if(trim($title) =="" || empty($title))
return false;
else {
return true;
}
}

?>