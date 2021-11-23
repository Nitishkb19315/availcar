<?php require_once("../includes/config.php") ?>
<?php require_once("../includes/functions.php") ?>
<?php
if(isset($_POST['submit'])){
    print_r($_POST);
    $id = get_max_id("package");
    $package = mysql_prep(trim($_POST['name']));
    $package = strtolower($package);
    $listing =  mysql_prep($_POST['listing']);
    $price = mysql_prep($_POST['price']);
    if(check_package($package)){
        if(addPackage($id,$package, $price, $listing)){
            redirect("../manage-packages.php?er=8");
        }
    }else{
        redirect("../manage-packages.php?er=2");
    }
}else{
    
}
?>