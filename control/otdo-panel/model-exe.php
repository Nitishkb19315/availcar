<?php require_once("includes/config.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php 
if(isset($_POST['submit'])){
    $make = mysql_prep($_POST['make']);
    $model = mysql_prep($_POST['model']);
    if(check_modal($model)){
        addModel($make,$model);
        redirect("admin-model.php?er=8");
    }else{
        redirect("admin-model.php?er=2");
    }
}
?>