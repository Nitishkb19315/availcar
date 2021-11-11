<?php
ob_start();
require_once("../includes/session.php");
require_once("../includes/config.php");
require_once("../includes/functions.php");
if (isset($_POST['submit'])) {
    echo $uname = mysql_prep($_POST['uname']);
    echo $hpassword = md5(mysql_prep($_POST['hpassword']));
    $type = "";
    if(login($uname, $hpassword)){
        $_SESSION['uid'] = $uname;
        $_SESSION['user_type']= "admin";
        redirect("../dashboard.php");
    } else {
        redirect("../admin-login.php?er=1");
    }
}
