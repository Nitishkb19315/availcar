<?php require_once("includes/config.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php $page = "admin-make.php" ?>

<?php 
if(isset($_POST['submit'])){
$errors = array();
$table_name = "make";
$unique_id = get_max_id($table_name);
$make = mysql_prep($_POST['make']);
addMake($unique_id,$make);
redirect("admin-make.php?er=8");
}
else {
redirect("admin-make.php?er=2");
}
?>