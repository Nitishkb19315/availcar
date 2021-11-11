<?php require_once("../includes/config.php") ?>
<?php require_once("../includes/functions.php") ?>
<?php
$page = "../auth-create.php";
ob_start();
require_once("../includes/session.php");
if (isset($_POST['submit'])) {
    $uname= $_POST['username'];
    $password = md5(mysql_prep($_POST['password']));
    $repassword = md5(mysql_prep($_POST['re-password']));
    $email =  mysql_prep($_POST['email']);
    $mobile_no = mysql_prep($_POST['mobile_no']);
    $table_name="users";
    $user_id = get_max_id($table_name);
    if($password != $repassword){
        redirect($page."?er=15");
        exit();
    }
    if(check_exists_user($_POST)){
        redirect("../auth-create.php?er=16");
        exit();
    }
    if(create_user($user_id,$uname,$email,$password,$mobile_no)){
        $_SESSION['uid'] = $uname;
        $_SESSION['user_type']= "user";
        $_SESSION['user_id']= $user_id;
        if(!check_user_profile($user_id)){
            redirect("../user-details.php?id=$user_id");
        }
        redirect("../user-dashboard.php");
    }
}else{
    redirect("../index.php");
}
?>