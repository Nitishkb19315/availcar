<?php require_once("../includes/config.php") ?>
<?php require_once("../includes/functions.php") ?>
<pre>
<?php
$filename="";
if(isset($_POST['submit'])){

    $errors = array();
    if(empty($_FILES['new_profile_image']['name'])){
        $filename=$_POST['old_profile_image'];
    }else{
        $width = 550;
        $height = 450;
        $upload_dir = "profiles";
        $filename = $_POST['old_profile_image'];

        if(!$filename  = update_profile($_FILES['new_profile_image']['tmp_name'], $_FILES['new_profile_image']['name'], $upload_dir, $width, $height, $filename)){
            $errors[] = "File not exists";
        }
    }
    if(!$errors){
        update_user_profile($_POST, $filename);
        redirect("../manage-users.php?er=7");
    }
}else{
    redirect("../user-profile.php?er=14");
}
?>
</pre>