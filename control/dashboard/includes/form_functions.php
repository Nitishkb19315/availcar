<?php
  
  //form validation and error messaging
  
  function check_required_fields($required_array){
  	$field_errors = array();
	foreach($required_array as $fieldname){
		if(!isset($_POST[$fieldname]) || (empty($_POST[$fieldname]) && !is_int($fieldname))){
			$field_errors[]= $fieldname;
		}
	}
	return $field_errors;
  }
  
  function check_max_field_length($field_length_array){
  	$field_errors = array();
	foreach($field_length_array as $fieldname => $maxlength){
		if(strlen(trim(mysql_prep($_POST[$fieldname])))>$maxlength){
			$field_errors[]=$fieldname;
		}
	}
	return $field_errors;
  }
  
//   function display_errors($error_array){
//   	echo "<p class=\"errors\">";
// 	 echo "<please review the following fields:<br>";
// 	  foreach ($error_array as $error) {
// 		  echo " - " .$error ."<br />";
// 	  }
	  
// 	  echo "</p>";
//   }


  // ************** validation for  create user ********************
  function check_exists_user($data){
	$field_errors = array();
	foreach($data as $key => $value){
		if(record_existed($key,$value)){
			array_push($field_errors,$key);
		}
	}
	return $field_errors;
  }
  function record_existed($key,$value){
	  global $con;
	  $query = "SELECT * FROM `users`";
	  $query .= "WHERE `$key` = '$value'";
	  $result = mysqli_query($con,$query);
	  confirm_query($result);
	  if(mysqli_num_rows($result)>0){
		  return true;
	  }else{
		  return false;
	  }
  }
?>