<?php require_once("../includes/config.php") ?>
<?php require_once("../includes/functions.php") ?>
<?php
$page = "../manage-users.php";
if(isset($_GET['id']) && !empty($_GET['id'])){
    $value=1;
    if(get_user_active_status($_GET['id'])){ $value=0; }else{ $value= 1;}
    if(activate_user($_GET['id'],$value)){
        if($value){ 
            redirect("$page?er=17");
        }else{
            redirect("$page?er=18");
        }
        
    }
}else{
    redirect("$page?er=4");
}

?>