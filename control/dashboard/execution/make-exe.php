<?php require_once("../includes/config.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php $page = "../manage-make.php" ?>

<?php 
if(isset($_POST['submit'])){
$errors = array();
$table_name = "make";
$unique_id = get_max_id($table_name);
$make = mysql_prep($_POST['make']);
if(check_make($make)){
    addMake($unique_id,$make);
    redirect($page."?er=8");
}else{
    redirect($page."?er=2");
}

}
else {
redirect($page."?er=2");
}
?>