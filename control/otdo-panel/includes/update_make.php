<?php require_once("./config.php"); ?>
<?php require_once("./functions.php"); ?>
<?php
if(isset($_GET["new"]) && !empty($_GET['new'])){
    if(update_make($_GET["new"],$_GET["preVal"])){
        echo "Success";
    }
    else{
        echo "failed";
    }
}
?>