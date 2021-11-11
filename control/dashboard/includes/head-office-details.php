<?php require_once("../includes/config.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php 
if(isset($_GET['value'])&& !empty($_GET['value'])){
    print_r($_GET);

    $value = mysql_prep($_GET['value']);
    if(isset($_GET['action'])){
        echo "working";
        switch($_GET['action']){
            case 1:
                update_headOffice_first_email($value);
                break;
            case 2:
                update_headOffice_second_email($value);
                break;
            case 3:
                update_headOffice_first_mobile_no($value);
                break;
            case 4:
                update_headOffice_second_mobile_no($value);
                break;
            case 5:
                update_headOffice_address($value);
                break;
        }
    }
}
?>