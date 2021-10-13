<?php ob_start(); ?>
<?php require_once("includes/config.php"); ?>
<?php require_once("includes/functions.php"); ?> 
<?php
if(isset($_POST['submit']))
{
echo $title= mysql_prep($_POST['title']);
echo $link= mysql_prep($_POST['link']);
add_video($title,$link);
redirect("admin-video.php?er=8");	
}
else {
redirect("admin-video.php?er=2");	
}

?>