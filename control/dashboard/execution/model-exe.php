<?php require_once("../includes/config.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php 
if(isset($_POST['submit'])){
    $make = mysql_prep($_POST['make']);
    $model = mysql_prep($_POST['model']);
    if(check_modal($model)){
        addModel($make,$model);
        redirect("../manage-model.php?er=8");
    }else{
        redirect("../manage-model.php?er=2");
    }
}
?>