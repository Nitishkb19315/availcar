<?php require_once("../includes/config.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php 
if(isset($_GET['id'])&&!empty($_GET['id'])){
    $status = get_listing_approve_status($_GET['id']);
    if(strtolower($status)=="pending"){
        $status = "Approved";
        if(change_listing_approval_status($_GET['id'],$status)){
            header("Location: " . $_SERVER["HTTP_REFERER"]."&er=19");
        }
    }else{
        header("Location: " . $_SERVER["HTTP_REFERER"]."&er=20");
    }
}
?>