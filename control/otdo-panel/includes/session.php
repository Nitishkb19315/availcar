<?php
  session_start();
  
  function logged_in(){
  	return isset($_SESSION['uid']);
  }
  
  function confirm_logged_in(){
  	if(!logged_in()){
  		redirect("login.php");
  	}
  }
  
?>