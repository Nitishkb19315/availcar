<?php require_once("../includes/config.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php 
if(isset($_GET['id']) || !empty($_GET[ 'id'])){
    if(delete_branch($_GET['id'])){
        redirect("../contacts.php?er=");
    }else{
        redirect("../contacts.php?er=");
    }
}else{
    redirect("../contacts.php");
}
?>