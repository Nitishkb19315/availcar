<?php
ob_start();
require_once("../includes/session.php");
require_once("../includes/config.php");
require_once("../includes/functions.php");
if (isset($_POST['submit'])) {
    echo $uname = mysql_prep($_POST['uname']);
    echo $hpassword = md5(mysql_prep($_POST['hpassword']));
    $type = "";
    if($data=user_login($uname, $hpassword)){
        $_SESSION['uid'] = $uname;
        $_SESSION['user_id'] = $data['id'];
        $_SESSION['user_type'] = $data['user_type'];
        if(!check_user_profile($data['id'])){
            redirect("../user-details.php?id=".$data['id']);
        }else{
            redirect("../user-dashboard.php");
        }
    } else {
        redirect("../index.php?er=1");
    }
}
