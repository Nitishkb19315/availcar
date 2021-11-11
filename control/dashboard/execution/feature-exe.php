<?php require_once("../includes/config.php") ?>
<?php require_once("../includes/functions.php") ?>
<?php
if(isset($_POST['submit'])){
    $table_name = "car_feature";
    $id = get_max_id($table_name);
    $position = get_max_position($table_name);
    if(check_feature($_POST['feature'])){
        if(addFeature($_POST['feature'],$position)){
            redirect("../manage-feature.php?er=8");
        }else{
            redirect("../manage-feature.php?er=2");
        }
        
    }
    else{
        redirect("../manage-feature.php?er=2");
    }
}else {
redirect("../manage-make.php?er=2");
}
?>
