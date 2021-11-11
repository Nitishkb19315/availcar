<?php require_once("includes/config.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php 
if(isset($_POST['submit'])){
$package = mysql_prep($_POST['package']);
if(check_package($package)){
    addPackage($package,$_POST['price'],$_POST['listing']);
    redirect("admin-package.php?er=8");
}else{
    redirect("admin-package.php?er=2");
}

}
else {
redirect("admin-package.php?er=2");
}
?>