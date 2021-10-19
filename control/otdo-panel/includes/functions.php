 <?php
   require_once("image.class.php");
   require_once("file_function.php");
    function redirect($url=NULL){
    	   // redirect to a page
    	if($url!=NULL)
    	header("Location: {$url}");
		exit;
    	
    }
	
	function confirm_query($result){
		if(!$result){
			die("database query failed: ".mysqli_error());
		}
	}
	
	 function getPageName($pageName='home.php')	{
		$currentFile = $_SERVER["PHP_SELF"];
		$parts = Explode('/', $currentFile);
		if($parts[count($parts) - 1]==$pageName)
			echo  "class=\"active\"";
	
	}
	
	function getError($error){
		$errorMsg="";
		switch($error){
			case 1:
				$errorMsg .="<p class='alert alert-danger'><i class='fa fa-times'></i> Username / Password is incorrect";
				break;
			case 2:  // duplication
				$errorMsg .="<p class='alert alert-danger'>Record Already Exists error <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
		    	<span aria-hidden='true'>&times;</span></button> </p>";
				break;
			case 3:
				$errorMsg .="<p class=\"info\">Please Select the appropriate Item";
				break;
			case 4:
				$errorMsg .="<p class=\"warning\">Please Enter the values";
				break;
			case 5:
				$errorMsg .="<p class='alert alert-danger'>Deleted Successfully <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
		    	<span aria-hidden='true'>&times;</span></button></p>";
				break;
			case 6:
				$errorMsg .="<p class=\"error\">Cannot Deleted";
				break;
			case 7:
				$errorMsg .="<p class='alert alert-info'> Update Successfully<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
		    	<span aria-hidden='true'>&times;</span></button>  </p>";
				break;
			case 8:
				$errorMsg .="<p class='alert alert-success'> Added Successfully <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
		    	<span aria-hidden='true'>&times;</span></button> </p>";
				break;
			case 9:
				$errorMsg .="<p class=\"error\">Problem With file please upload file less then 900kb ";
				break;
			case 10:
			$errorMsg .="<h4 class='text-green'><i class='fa fa-check'></i> Logout Successfully </h4> ";
			break;
			case 11:
			$errorMsg .="<p class='text-red'><i class='fa fa-times'></i> File Size Problem </p> ";
			break;
			case 12:
			$errorMsg .="<p class='alert alert-success'>  Send Successfully <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
		    	<span aria-hidden='true'>&times;</span></button> </p> ";
			break;
			case 13:  // duplication
				$errorMsg .="<p class='alert alert-danger'>Couldn't delete <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				<span aria-hidden='true'>&times;</span></button> </p>";
				break;
			}

		
		$errorMsg .="</p>";
		
			return $errorMsg;
	}
	function mysql_prep($value){
		$new_enough_php=function_exists("mysql_real_escape_string"); // i.e php >=4.3.0
		if($new_enough_php){
			
			$value= stripslashes($value);
			$value = mysql_real_escape_string($value);
			
		}
		else { //before php 4.3.0
			$value=addslashes($value);
			
		}
		
		return $value;
	}

	////////////////////// super admin functions ////////////////////////////////////////
	
	function check_profile(){
		global $con;
		$query = "select * from superadmin";
		$result = mysqli_query($con,$query);
		confirm_query($result);
		$rows = mysqli_num_rows($result);
		if($rows>0){
			return true;
		}
		else {
			return false;
		}
	}
	function create_super_admin($uname,$hpassword){
		global $con;
		$query = "INSERT INTO superadmin(uname, hpassword) VALUES ('$uname','$hpassword')";
		$result = mysqli_query($con,$query);
		confirm_query($result); 
		return true;
		
	}
	function login($uname, $hpassword, $type=1){
		global $con;
		$query = "SELECT * FROM ";
		switch($type){
			case 1:
				$query .="superadmin ";
			break;
				
		}
		$query .="WHERE uname='$uname' and hpassword='$hpassword' ";
		$query .="LIMIT 1";
		$result = mysqli_query($con,$query);
		confirm_query($result);
		$num=mysqli_num_rows($result);
		if($num>0){
			
			return true;
		}
		else {
			return false;
		}	
	}
	function getBackground($pageName='index.php')	{
		$currentFile = $_SERVER["PHP_SELF"];
		$parts = Explode('/', $currentFile);
		if($parts[count($parts) - 1]==$pageName)
			echo  "class=\"page1\"";
		else {
			echo "class=\"page2\"";
		}
	
	}
	/*******************emp*************************/
	function verifyEmp($mob){
		global $con;
		$query= "SELECT * FROM ";
		$query .="registrations ";
		$query .="WHERE ";
		$query .=" mobile = '{$mob}'";
		$result = mysqli_query($con,$query);
		confirm_query($result);
		if($num=mysqli_num_rows($result)>0)
			return true;
		else 
			return false;
	}
function get_max_id($table_name){
		global $con;
		$query = "select max(id) as 'id' from ".$table_name;
		$result = mysqli_query($con,$query);
		confirm_query($result); 
		if(mysqli_num_rows($result)>0){
			$row = mysqli_fetch_assoc($result);
			if(is_null($row['id']))
				return 1;
			else 
				$unique_id =   $row['id'];
				$unique_id = intval($unique_id)+1;
				return $unique_id;
		}
	}
	



	function add_blog($dates,$title,$detail,$filename){
		global $con;
		$query = "INSERT INTO ";
		$query .="blog ";
		$query .="(dates,title,detail,filename) ";
		$query .="VALUES ( ";
		$query .="'$dates','$title','$detail','$filename' ";
		$query .= ");";
		$result = mysqli_query($con,$query);
		confirm_query($result);
		return true;
	}
	function get_blog(){
		global $con;
		$query = "SELECT * FROM";
		$query .=" blog";
		$query .= " ORDER BY id DESC";
		$result = mysqli_query($con,$query);
		confirm_query($result, $query);
		return $result;
	}
	function get_blog_byid($id){
		global $con;
		$query = "SELECT * FROM";
		$query .=" blog where id=$id";
		$query .= " ORDER BY id DESC";
		$result = mysqli_query($con,$query);
		confirm_query($result, $query);
		return $result;
	}
	function get_blog_limit3(){
		global $con;
		$query = "SELECT * FROM";
		$query .=" blog";
		$query .= " ORDER BY id DESC LIMIT 3";
		$result = mysqli_query($con,$query);
		confirm_query($result, $query);
		return $result;
	}
	function getblogID($id){
		  global $con;
		  $query= "SELECT * FROM ";
		  $query .=" blog";
		  $query .=" WHERE id=$id";
		  $result = mysqli_query($con,$query);
		  confirm_query($result);
		 return $result;
	  }
	function Deleteblog($diretory, $filename, $id){
		global $con;
		if(delete_photo($diretory, $filename)){
			$query = "DELETE FROM ";
			$query .= "blog ";
			$query .= "WHERE ";
			$query .= "id= {$id} ";
			$query .= "LIMIT 1";
			$result = mysqli_query($con,$query);
			confirm_query($result);
			if(mysqli_affected_rows()>0){
				return TRUE;
			}
			else {
				return FALSE;
			}
		}
	}
	/*  */
	function get_news(){
		global $con;
		$query = "SELECT * FROM";
		$query .=" news";
		$query .= " ORDER BY id DESC";
		$result = mysqli_query($con,$query);
		confirm_query($result, $query);
		return $result;
	}
	function get_news_limit3(){
		global $con;
		$query = "SELECT * FROM";
		$query .=" news";
		$query .= " ORDER BY id DESC LIMIT 3";
		$result = mysqli_query($con,$query);
		confirm_query($result, $query);
		return $result;
	}
	function add_news($dates,$title,$detail,$filename){
		global $con;
		$query = "INSERT INTO ";
		$query .="news ";
		$query .="(dates,title,detail,filename) ";
		$query .="VALUES ( ";
		$query .="'$dates','$title','$detail','$filename' ";
		$query .= ");";
		$result = mysqli_query($con,$query);
		confirm_query($result);
		return true;
	}
	function getnewsID($id){
		global $con;
		$query= "SELECT * FROM ";
		$query .=" news";
		$query .=" WHERE id=$id";
		$result = mysqli_query($con,$query);
		confirm_query($result);
	   return $result;
	}
  function Deletenews($diretory, $filename, $id){
	  global $con;
	  if(delete_photo($diretory, $filename)){
		  $query = "DELETE FROM ";
		  $query .= "news ";
		  $query .= "WHERE ";
		  $query .= "id= {$id} ";
		  $query .= "LIMIT 1";
		  $result = mysqli_query($con,$query);
		  confirm_query($result);
		  if(mysqli_affected_rows()>0){
			  return TRUE;
		  }
		  else {
			  return FALSE;
		  }
	  }
  }



	/********************* gallery Category Function*************************/	
	 function add_cate($category){
		global $con;
		$query = "INSERT INTO ";
		$query .="category ";
		$query .="(category) ";
		$query .="VALUES ( ";
		$query .="'$category' ";
		$query .= ");";
		$result = mysqli_query($con,$query);
		confirm_query($result);
		return true;
	}
	function ListCate(){
		  global $con;
		  $query= "SELECT * FROM ";
		  $query .="category ORDER BY id DESC";
		  $result = mysqli_query($con,$query);
		 confirm_query($result);
		 return $result;

	  }
	  function deletecate($id){
		global $con;
		$query = "DELETE FROM ";
		$query .= "category ";
		$query .= "WHERE ";
		$query .= "id= {$id} ";
		$query .= "LIMIT 1";
		$result = mysqli_query($con,$query);
		confirm_query($result);
		if(mysqli_affected_rows()>0){
			return TRUE;
		}
		else {
			return FALSE;
		}
	}

	


	/**********************Gallery Function***********************************/
	function addGallery($category,$filename){
		global $con;
		$query = "INSERT INTO ";
		$query .="gallery ";
		$query .="(category,filename) ";
		$query .="VALUES ( ";
		$query .=" '$category','$filename' ";
		$query .= ");";
		$result = mysqli_query($con,$query);
		confirm_query($result);
		return true;
	}
	function List_Gallery(){
	  global $con;
		  $query= "SELECT category.category,gallery.filename,gallery.id FROM ";
		  $query .="category,gallery";
		  $query .=" WHERE category.id=gallery.category ORDER BY id DESC";
		  $result = mysqli_query($con,$query);
		  confirm_query($result);
		  return $result;
	  }
	  function List_Gallery_limit6(){
	  global $con;
		  $query= "SELECT * FROM ";
		  $query .="gallery ";
		  $query .=" ORDER BY id DESC LIMIT 6";
		  $result = mysqli_query($con,$query);
		  confirm_query($result);
		  return $result;
	  }
	  function List_Gallery_bycate($id){
	  global $con;
		  $query= "SELECT * FROM ";
		  $query .="gallery where category='$id'";
		  $query .=" ORDER BY id DESC";
		  $result = mysqli_query($con,$query);
		  confirm_query($result);
		  return $result;
	  }
	  function List_allGallery(){
	  global $con;
		  $query= "SELECT * FROM ";
		  $query .="gallery";
		  $query .=" ORDER BY id DESC LIMIT 8";
		  $result = mysqli_query($con,$query);
		  confirm_query($result);
		  return $result;
	  }
	  function getgalleryID($id){
		  global $con;
		  $query= "SELECT * FROM ";
		  $query .=" gallery";
		  $query .=" WHERE id=$id";
		  $result = mysqli_query($con,$query);
		  confirm_query($result);
		 return $result;
	  }
	  function getgallerycateID($cate){
		  global $con;
		  $query= "SELECT * FROM ";
		  $query .=" gallery";
		  $query .=" WHERE cate=$cate";
		  $result = mysqli_query($con,$query);
		  confirm_query($result);
		 return $result;
	  }
	  function DeleteGallery($diretory, $filename, $id){
		global $con;
		if(delete_photo($diretory, $filename)){
			$query = "DELETE FROM ";
			$query .= "gallery ";
			$query .= "WHERE ";
			$query .= "id= {$id} ";
			$query .= "LIMIT 1";
			$result = mysqli_query($con,$query);
			confirm_query($result);
			if(mysqli_affected_rows($con)>0){
				return TRUE;
			}
			else {
				return FALSE;
			}
		}
	}
	
	/********************* Video Function*************************/	
	 function add_video($title,$link){
		global $con;
		$query = "INSERT INTO ";
		$query .="video ";
		$query .="(title,link) ";
		$query .="VALUES ( ";
		$query .="'$title','$link' ";
		$query .= ");";
		$result = mysqli_query($con,$query);
		confirm_query($result);
		return true;
	}
	
	  /*function ListVideo(){
	  global $con;
		  $query= "SELECT videocate.category,video.title,video.link,video.id FROM ";
		  $query .="videocate,video";
		  $query .=" WHERE videocate.id=video.category";
		  $result = mysqli_query($con,$query);
		  confirm_query($result);
		  return $result;
	  }*/
	  function ListVideo(){
	  global $con;
		  $query= "SELECT * FROM ";
		  $query .="video ORDER BY id DESC";
		  $result = mysqli_query($con,$query);
		  confirm_query($result);
		  return $result;
	  }
	  /*function ListVideo_bycate($id){
		  global $con;
		  $query= "SELECT * FROM ";
		  $query .="video where category='$id' ORDER BY id DESC";
		  $result = mysqli_query($con,$query);
		 confirm_query($result);
		 return $result;

	  }*/
	  function deletevideo($id){
		global $con;
		$query = "DELETE FROM ";
		$query .= "video ";
		$query .= "WHERE ";
		$query .= "id= {$id} ";
		$query .= "LIMIT 1";
		$result = mysqli_query($con,$query);
		confirm_query($result);
		if(mysqli_affected_rows()>0){
			return TRUE;
		}
		else {
			return FALSE;
		}
	}
	
	/********************* video Category Function*************************/	
	 /*function add_vcate($category){
		global $con;
		$query = "INSERT INTO ";
		$query .="videocate ";
		$query .="(category) ";
		$query .="VALUES ( ";
		$query .="'$category' ";
		$query .= ");";
		$result = mysqli_query($con,$query);
		confirm_query($result);
		return true;
	}
	function ListvCate(){
		  global $con;
		  $query= "SELECT * FROM ";
		  $query .="videocate ORDER BY id DESC";
		  $result = mysqli_query($con,$query);
		 confirm_query($result);
		 return $result;

	  }
	  function deletevcate($id){
		global $con;
		$query = "DELETE FROM ";
		$query .= "videocate ";
		$query .= "WHERE ";
		$query .= "id= {$id} ";
		$query .= "LIMIT 1";
		$result = mysqli_query($con,$query);
		confirm_query($result);
		if(mysqli_affected_rows()>0){
			return TRUE;
		}
		else {
			return FALSE;
		}
	}*/

	/***********************testimonial function *********************/
	function add_testimonial($name,$detail,$filename){
		global $con;
		$query = "INSERT INTO ";
		$query .="testimonial ";
		$query .="(name,detail,filename) ";
		$query .="VALUES ( ";
		$query .="'$name','$detail','$filename' ";
		$query .= ");";
		$result = mysqli_query($con,$query);
		confirm_query($result);
		return true;
	}
	function get_testimonial(){
		global $con;
		$query = "SELECT * FROM";
		$query .=" testimonial";
		$query .= " ORDER BY id DESC";
		$result = mysqli_query($con,$query);
		confirm_query($result, $query);
		return $result;
	}
	function gettestimonialID($id){
		  global $con;
		  $query= "SELECT * FROM ";
		  $query .=" testimonial";
		  $query .=" WHERE id=$id";
		  $result = mysqli_query($con,$query);
		  confirm_query($result);
		 return $result;
	  }
	function DeleteTestimonial($diretory, $filename, $id){
		global $con;
		if(delete_photo($diretory, $filename)){
			$query = "DELETE FROM ";
			$query .= "testimonial ";
			$query .= "WHERE ";
			$query .= "id= {$id} ";
			$query .= "LIMIT 1";
			$result = mysqli_query($con,$query);
			confirm_query($result);
			if(mysqli_affected_rows()>0){
				return TRUE;
			}
			else {
				return FALSE;
			}
		}
	}
	/********************* Reg Function*************************/	
	 function add_reg($name,$email,$mobile,$passwords,$course){
		global $con;
		$query = "INSERT INTO ";
		$query .="registration ";
		$query .="(name,email,mobile,passwords,course) ";
		$query .="VALUES ( ";
		$query .="'$name','$email','$mobile','$passwords','$course' ";
		$query .= ");";
		$result = mysqli_query($con,$query);
		confirm_query($result);
		return true;
	}
	function ListReg(){
		  global $con;
		  $query= "SELECT * FROM ";
		  $query .="registration ORDER BY id DESC";
		  $result = mysqli_query($con,$query);
		 confirm_query($result);
		 return $result;

	  }
	  function deletereg($id){
		global $con;
		$query = "DELETE FROM ";
		$query .= "registration ";
		$query .= "WHERE ";
		$query .= "id= {$id} ";
		$query .= "LIMIT 1";
		$result = mysqli_query($con,$query);
		confirm_query($result);
		if(mysqli_affected_rows()>0){
			return TRUE;
		}
		else {
			return FALSE;
		}
	}

	/***********************Story function *********************/
	function add_story($title,$detail,$filename){
		global $con;
		$query = "INSERT INTO ";
		$query .="story ";
		$query .="(title,detail,filename) ";
		$query .="VALUES ( ";
		$query .="'$title','$detail','$filename' ";
		$query .= ");";
		$result = mysqli_query($con,$query);
		confirm_query($result);
		return true;
	}
	function get_story(){
		global $con;
		$query = "SELECT * FROM";
		$query .=" story";
		$query .= " ORDER BY id DESC";
		$result = mysqli_query($con,$query);
		confirm_query($result, $query);
		return $result;
	}
	function getstoryID($id){
		  global $con;
		  $query= "SELECT * FROM ";
		  $query .=" story";
		  $query .=" WHERE id=$id";
		  $result = mysqli_query($con,$query);
		  confirm_query($result);
		 return $result;
	  }
	function Deletestory($diretory, $filename, $id){
		global $con;
		if(delete_photo($diretory, $filename)){
			$query = "DELETE FROM ";
			$query .= "story ";
			$query .= "WHERE ";
			$query .= "id= {$id} ";
			$query .= "LIMIT 1";
			$result = mysqli_query($con,$query);
			confirm_query($result);
			if(mysqli_affected_rows()>0){
				return TRUE;
			}
			else {
				return FALSE;
			}
		}
	}


	// *****************search list*******************
	function get_car_make(){
		global $con;
		  $query= "SELECT * FROM ";
		  $query .=" make";
		  $result = mysqli_query($con,$query);
		  confirm_query($result);
		 return $result;
	}
	function get_car_model($id){
		global $con;
		$query = "SELECT * FROM ";
		$query .=" `car_model`";
		$query .=" WHERE `make`= $id";
		$result= mysqli_query($con,$query);
		confirm_query($result);
		return $result;
	}
	//*************** makes  **********************
	function addMake($unique_id,$make){
		global $con;
		$query = "INSERT INTO ";
		$query .= " `make` ";
		$query .= " (`id`,`make`) ";
		$query .= " VALUES ($unique_id,'$make')";
		$result = mysqli_query($con,$query);
		confirm_query($result);
		return $result;
	}
	function get_make_list(){
		global $con;
		$query = "SELECT * FROM ";
		$query .=" `make`";
		$result= mysqli_query($con,$query);
		confirm_query($result);
		return $result;
	}
	function deleteMake($id){
		global $con;
		$query = "DELETE FROM ";
		$query .= "make ";
		$query .= "WHERE ";
		$query .= "id= {$id} ";
		$query .= "LIMIT 1";
		$result = mysqli_query($con,$query);
		confirm_query($result);
		if(mysqli_affected_rows($con)>0){
			return TRUE;
		}
		else {
			return FALSE;
		}
	}

	//*************** makes  **********************
	function addModel($make,$model){
		global $con;
		$query = "INSERT INTO ";
		$query .= " `car_model` ";
		$query .= " (`make`,`model`) ";
		$query .= " VALUES ('$make','$model')";
		$result = mysqli_query($con,$query);
		confirm_query($result);
		return $result;
	}
	function get_model_list(){
		global $con;
		$query = "SELECT ";
		$query .= "`model_id` AS id,make.make AS make,`model`";
		$query .="FROM  `make`,`car_model`";
		$query .= "WHERE car_model.make = make.id";
		$result= mysqli_query($con,$query);
		confirm_query($result);
		return $result;
	}
	function addVariant($make,$model,$variant){
		global $con;
		$query = "INSERT INTO ";
		$query .= " `car_variant` ";
		$query .= " (`make_id`,`model_id`,`variant`) ";
		$query .= " VALUES ('$make','$model','$variant')";
		$result = mysqli_query($con,$query);
		confirm_query($result);
		return $result;
	}
	function get_variant_list(){
		global $con;
		$query = "SELECT";
		$query .= " variant_id AS id,make.make AS make,model,variant ";
		$query .= " FROM";
		$query .= " make,car_variant,car_model";
		$query .= " WHERE";
		$query .= " car_variant.model_id = car_model.model_id";
		$query .= " AND car_model.make = make.id";
		$query .=" ORDER BY id DESC";
		$result = mysqli_query($con,$query);
		confirm_query($result);
		return $result;
	}
	function deleteVariant($id){
		global $con;
		$query = "DELETE FROM ";
		$query .= "car_variant ";
		$query .= "WHERE ";
		$query .= "variant_id= {$id} ";
		$query .= "LIMIT 1";
		$result = mysqli_query($con,$query);
		confirm_query($result);
		if(mysqli_affected_rows($con)>0){
			return TRUE;
		}
		else {
			return FALSE;
		}
	}
	function deleteModel($id){
		global $con;
		$query = "DELETE FROM ";
		$query .= "car_model ";
		$query .= "WHERE ";
		$query .= "model_id = {$id} ";
		$result = mysqli_query($con,$query);
		confirm_query($result);
		if(mysqli_affected_rows($con)>0){
			return TRUE;
		}
		else {
			return FALSE;
		}
	}

	// ************ checking *******************
	function check_make($make){
		global $con;
		$query = "SELECT `make` FROM";
		$query .= " make";
		$result = mysqli_query($con,$query);
		confirm_query($result);
		return check_existence_make($make,$result);
	}
	function check_modal($model){
		global $con;
		$query = "SELECT `model` FROM";
		$query .= " `car_model`";
		$result = mysqli_query($con,$query);
		confirm_query($result);
		return check_existence_model($model,$result);
	}
	function check_variant($variant){
		global $con;
		$query = "SELECT `variant` FROM";
		$query .= " `car_variant`";
		$result = mysqli_query($con,$query);
		confirm_query($result);
		return check_existence_variant($variant,$result);
	}
	function check_existence_variant($make,$result){
		$status = true;
		 if(mysqli_num_rows($result)>0){
			while($row=mysqli_fetch_assoc($result)){
				if(strtoupper($make)  ==  strtoupper($row['variant'])){
					$status =false;
					break;
				}
			}
		 }
		 return $status;
	}
	function check_existence_model($make,$result){
		$status = true;
		 if(mysqli_num_rows($result)>0){
			while($row=mysqli_fetch_assoc($result)){
				if(strtoupper($make)  ==  strtoupper($row['model'])){
					$status =false;
					break;
				}
			}
		 }
		 return $status;
	}
	function check_existence_make($make,$result){
		$status = true;
		 if(mysqli_num_rows($result)>0){
			while($row=mysqli_fetch_assoc($result)){
				if(strtoupper($make)  ==  strtoupper($row['make'])){
					$status =false;
					break;
				}
			}
		 }
		 return $status;
	}
	function check_subcategory_make($id,$table){
		global $con;
		$query = "SELECT `make` FROM";
		$query .= " $table";
		$query .= " WHERE make=$id";
		$result = mysqli_query($con,$query);
		confirm_query($result);
		if(mysqli_num_rows($result)>0){
			return false;
		}
		else{
			return true;
		}
	}
	function check_subcategory_model($id,$table){
		global $con;
		$query = "SELECT * FROM";
		$query .= " `$table`";
		$query .= " WHERE model_id=$id";
		$result = mysqli_query($con,$query);
		confirm_query($result);
		if(mysqli_num_rows($result)>0){
			return false;
		}
		else{
			return true;
		}
	}
	function update_make($make,$preVal){
		global $con;
		$query  = "UPDATE `make` ";
		$query .= " SET make='$make' ";
		$query .= " WHERE make='$preVal' ";
		$result = mysqli_query($con,$query);
		confirm_query($con,$result);
		if(mysqli_affected_rows($con)>0){
			return TRUE;
		}else{
			return FALSE;
		}
	}
?>
