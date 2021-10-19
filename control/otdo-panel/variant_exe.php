<?php require_once("includes/config.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php 
if(isset($_POST['submit'])){
    $make = mysql_prep($_POST['make']);
    $model = mysql_prep($_POST['model']);
    $variant = mysql_prep($_POST['variant']);
    if(check_variant($variant)){
        addVariant($make,$model,$variant);
        redirect("admin-variant.php?er=8");
    }else{
        redirect("admin-variant.php?er=2");
    }
}
?>