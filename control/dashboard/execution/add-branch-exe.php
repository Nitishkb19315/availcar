<?php require_once("../includes/config.php") ?>
<?php require_once("../includes/functions.php") ?>
<?php
if(isset($_POST['submit'])){
    print_r($_POST);
    $phone_no = mysql_prep($_POST['branch_number']);
    $email =  mysql_prep($_POST['branch_email']);
    $name = mysql_prep($_POST['branch_name']);
    $address = mysql_prep($_POST['branch_address']);
    if(addBranch($phone_no, $email, $name, $address)){
        redirect("../contacts.php");
    }else{
        redirect("../contacts.php");
    }
}else{
    redirect("../contacts.php");
}
?>