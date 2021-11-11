<?php
  session_start();
  
  function logged_in(){
  	return isset($_SESSION['uid']);
  }
  
  function confirm_logged_in(){
  	if(!logged_in()){
  		redirect("index.php");
  	}
  }
  function is_logged_in(){
    if(logged_in()){
      if($_SESSION['user_type']=="user"){
        redirect("user-dashboard.php");
      }else{
        redirect("dashboard.php");
      }
    }
  }
  function confirm_admin(){
    if($_SESSION['user_type']=="user"){ 
      return false;
    }else{
      return true;
    }
  }
  
?>