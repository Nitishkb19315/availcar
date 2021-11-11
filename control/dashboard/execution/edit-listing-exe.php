<?php require_once("../includes/config.php"); ?>
<?php require_once("../includes/functions.php"); ?>


<?php 
if(isset($_POST['submit'])) {

    print_r($_POST);
    $status = update_list($_POST['username'],$_POST['id'],$_POST['modelYear'],$_POST['make'],$_POST['model'],$_POST['variant'],$_POST['interiorColor'],$_POST['exteriorColor'],$_POST['transmission'],$_POST['fuel'],$_POST['salePrice'],$_POST['marketPrice'],$_POST['description']);
    if($status){
        redirect('../manage-listing.php?er=7');
    }else{
        redirect('../manage-listing.php?er=');
    }
}else{ redirect('../manage-listing.php?er=');}
?>