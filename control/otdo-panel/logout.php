<?php
ob_start();
   require_once("includes/config.php");
   require_once("includes/functions.php");
   session_start();
   $_SESSION['uid'] = NULL;
   $_SESSION = array();
   
   if(isset($_COOKIE[session_name()])){
   	setcookie(session_name(),'',time()-42000,'/');
   }
   
   session_unset();
   session_destroy();
   
   redirect("index.php?er=10");
?>