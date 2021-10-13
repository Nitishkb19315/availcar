<?php ob_start(); ?>
<?php require_once("includes/config.php"); ?>
<?php require_once("includes/functions.php"); ?> 
<?php
if(isset($_POST['submit']))
{
echo $category= mysql_prep($_POST['category']);
add_cate($category);
redirect("admin-gallery-category.php?er=8");	
}
else {
redirect("admin-gallery-cate.php?er=2");	
}

?>