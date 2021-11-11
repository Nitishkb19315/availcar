<?php require_once("../includes/config.php");?>
<?php require_once("../includes/functions.php");?>
<?php 
if(isset($_GET['id']) && !empty($_GET['id'])){
    delete_feature($_GET['id']);
    redirect("../manage-feature.php?er=5");
}else{
    redirect("../manage-feature.php");
}
?>