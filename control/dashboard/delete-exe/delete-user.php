<?php require_once("../includes/config.php") ?>
<?php require_once("../includes/functions.php") ?>
<?php
if(isset($_GET['id']) && !empty($_GET['id'])){
    if(delete_user($_GET['id'])){
        redirect("../manage-users.php?er=5");
    }else{
        redirect("../manage-users.php?er=6");
    }
}else{
    redirect("../manage-users.php?er=6");
}
?>