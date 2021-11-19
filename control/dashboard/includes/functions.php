 <?php
	require_once("image.class.php");
	require_once("file_function.php");
	require_once("form_functions.php");
	function redirect($url = NULL)
	{
		// redirect to a page
		if ($url != NULL)
			header("Location: {$url}");
		exit;
	}

	function confirm_query($result)
	{
		if (!$result) {
			die("database query failed: " . mysqli_error());
		}
	}

	function getPageName($pageName = 'home.php')
	{
		$currentFile = $_SERVER["PHP_SELF"];
		$parts = Explode('/', $currentFile);
		if ($parts[count($parts) - 1] == $pageName)
			echo  "class=\"active\"";
	}

	function getError($error)
	{
		$errorMsg = "";
		switch ($error) {
			case 1:
				$errorMsg .= "<p class='alert alert-danger'><i class='fa fa-times'></i> Username / Password is incorrect";
				break;
			case 2:  // duplication
				$errorMsg .= "<p class='alert alert-danger'>Record Already Exists error <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
		    	<span aria-hidden='true'>&times;</span></button> </p>";
				break;
			case 3:
				$errorMsg .= "<p class=\"info\">Please Select the appropriate Item";
				break;
			case 4:
				$errorMsg .= "<p class=\"warning\">Please Enter the values";
				break;
			case 5:
				$errorMsg .= "<p class='alert alert-danger'>Deleted Successfully <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
		    	<span aria-hidden='true'>&times;</span></button></p>";
				break;
			case 6:
				$errorMsg .= "<p class=\"error\">Cannot Deleted";
				break;
			case 7:
				$errorMsg .= "<p class='alert alert-info'> Update Successfully<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
		    	<span aria-hidden='true'>&times;</span></button>  </p>";
				break;
			case 8:
				$errorMsg .= "<p class='alert alert-success'> Added Successfully </p>";
				break;
			case 9:
				$errorMsg .= "<p class=\"error\">Problem With file please upload file less then 900kb ";
				break;
			case 10:
				$errorMsg .= "<p class='text-green'><i class='fa fa-check'></i> Logout Successfully ";
				break;
			case 11:
				$errorMsg .= "<p class='text-red'><i class='fa fa-times'></i> File Size Problem </p> ";
				break;
			case 12:
				$errorMsg .= "<p class='alert alert-success'>  Send Successfully <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
		    	<span aria-hidden='true'>&times;</span></button> </p> ";
				break;
			case 13:  // duplication
				$errorMsg .= "<p class='alert alert-danger'>Couldn't delete <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				<span aria-hidden='true'>&times;</span></button> </p>";
				break;
			case 14:  // duplication
				$errorMsg .= "<p class='alert alert-danger'>Couldn't update <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				<span aria-hidden='true'>&times;</span></button> </p>";
				break;
			case 15:
				// $errorMsg .="<p class='alert alert-danger'><i class='fa fa-times'></i> Unmatched Password";
				$errorMsg .= "<p class='alert alert-danger'>Unmatched Password <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				<span aria-hidden='true'>&times;</span></button> </p>";
				break;
			case 16:
				// $errorMsg .="<p class='alert alert-danger'><i class='fa fa-times'></i> Unmatched Password";
				$errorMsg .= "<p class='alert alert-danger'>Username/Email already exist <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				<span aria-hidden='true'>&times;</span></button> </p>";
				break;
			case 17:
				// $errorMsg .="<p class='alert alert-danger'><i class='fa fa-times'></i> Unmatched Password";
				$errorMsg .= "User Activated";
				break;
			case 18:
				// $errorMsg .="<p class='alert alert-danger'><i class='fa fa-times'></i> Unmatched Password";
				$errorMsg .= "User Deactivated";
				break;
			case 19:
				// $errorMsg .="<p class='alert alert-danger'><i class='fa fa-times'></i> Unmatched Password";
				$errorMsg .= "listing approved";
				break;
			case 20:
				// $errorMsg .="<p class='alert alert-danger'><i class='fa fa-times'></i> Unmatched Password";
				$errorMsg .= "listing already approved";
				break;
			case 21:
				// $errorMsg .="<p class='alert alert-danger'><i class='fa fa-times'></i> Unmatched Password";
				$errorMsg .= "Failed";
				break;
		}
		$errorMsg .= "</p>";
		return $errorMsg;
	}
	function mysql_prep($value)
	{
		$new_enough_php = function_exists("mysql_real_escape_string"); // i.e php >=4.3.0
		if ($new_enough_php) {

			$value = stripslashes($value);
			$value = mysql_real_escape_string($value);
		} else { //before php 4.3.0
			$value = addslashes($value);
		}

		return $value;
	}

	////////////////////// super admin functions ////////////////////////////////////////

	function check_profile()
	{
		global $con;
		$query = "select * from superadmin";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		$rows = mysqli_num_rows($result);
		if ($rows > 0) {
			return true;
		} else {
			return false;
		}
	}
	function create_super_admin($uname, $hpassword)
	{
		global $con;
		$query = "INSERT INTO superadmin(uname, hpassword) VALUES ('$uname','$hpassword')";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		return true;
	}
	function login($uname, $hpassword, $type = 1)
	{
		global $con;
		$query = "SELECT * FROM ";
		switch ($type) {
			case 1:
				$query .= "superadmin ";
				break;
		}
		$query .= "WHERE uname='$uname' and hpassword='$hpassword' ";
		$query .= "LIMIT 1";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		$num = mysqli_num_rows($result);
		if ($num > 0) {

			return true;
		} else {
			return false;
		}
	}
	function user_login($uname, $hpassword)
	{
		global $con;
		$query = "SELECT * FROM `users`";
		$query .= "WHERE username='$uname' and password='$hpassword' ";
		$query .= "LIMIT 1";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		$num = mysqli_num_rows($result);
		$result = mysqli_fetch_assoc($result);
		if ($num > 0) {
			return $result;
		} else {
			return false;
		}
	}
	function getBackground($pageName = 'index.php')
	{
		$currentFile = $_SERVER["PHP_SELF"];
		$parts = Explode('/', $currentFile);
		if ($parts[count($parts) - 1] == $pageName)
			echo  "class=\"page1\"";
		else {
			echo "class=\"page2\"";
		}
	}
	/*******************emp*************************/
	function verifyEmp($mob)
	{
		global $con;
		$query = "SELECT * FROM ";
		$query .= "registrations ";
		$query .= "WHERE ";
		$query .= " mobile = '{$mob}'";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		if ($num = mysqli_num_rows($result) > 0)
			return true;
		else
			return false;
	}
	function get_max_id($table_name)
	{
		global $con;
		$query = "select max(id) as 'id' from " . $table_name;
		$result = mysqli_query($con, $query);
		confirm_query($result);
		if (mysqli_num_rows($result) > 0) {
			$row = mysqli_fetch_assoc($result);
			if (is_null($row['id']))
				return 1;
			else
				$unique_id =   $row['id'];
			$unique_id = intval($unique_id) + 1;
			return $unique_id;
		}
	}
	function get_max_position($table_name)
	{
		global $con;
		$query = "select max(position) as 'position' from " . $table_name;
		$result = mysqli_query($con, $query);
		confirm_query($result);
		if (mysqli_num_rows($result) > 0) {
			$row = mysqli_fetch_assoc($result);
			if (is_null($row['position']))
				return 1;
			else
				$unique_id = $row['position'];
			$unique_id = intval($unique_id) + 1;
			return $unique_id;
		}
	}




	function add_blog($dates, $title, $detail, $filename)
	{
		global $con;
		$query = "INSERT INTO ";
		$query .= "blog ";
		$query .= "(dates,title,detail,filename) ";
		$query .= "VALUES ( ";
		$query .= "'$dates','$title','$detail','$filename' ";
		$query .= ");";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		return true;
	}
	function get_blog()
	{
		global $con;
		$query = "SELECT * FROM";
		$query .= " blog";
		$query .= " ORDER BY id DESC";
		$result = mysqli_query($con, $query);
		confirm_query($result, $query);
		return $result;
	}
	function get_blog_byid($id)
	{
		global $con;
		$query = "SELECT * FROM";
		$query .= " blog where id=$id";
		$query .= " ORDER BY id DESC";
		$result = mysqli_query($con, $query);
		confirm_query($result, $query);
		return $result;
	}
	function get_blog_limit3()
	{
		global $con;
		$query = "SELECT * FROM";
		$query .= " blog";
		$query .= " ORDER BY id DESC LIMIT 3";
		$result = mysqli_query($con, $query);
		confirm_query($result, $query);
		return $result;
	}
	function getblogID($id)
	{
		global $con;
		$query = "SELECT * FROM ";
		$query .= " blog";
		$query .= " WHERE id=$id";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		return $result;
	}
	function Deleteblog($diretory, $filename, $id)
	{
		global $con;
		if (delete_photo($diretory, $filename)) {
			$query = "DELETE FROM ";
			$query .= "blog ";
			$query .= "WHERE ";
			$query .= "id= {$id} ";
			$query .= "LIMIT 1";
			$result = mysqli_query($con, $query);
			confirm_query($result);
			if (mysqli_affected_rows() > 0) {
				return TRUE;
			} else {
				return FALSE;
			}
		}
	}
	/*  */
	function get_news()
	{
		global $con;
		$query = "SELECT * FROM";
		$query .= " news";
		$query .= " ORDER BY id DESC";
		$result = mysqli_query($con, $query);
		confirm_query($result, $query);
		return $result;
	}
	function get_news_limit3()
	{
		global $con;
		$query = "SELECT * FROM";
		$query .= " news";
		$query .= " ORDER BY id DESC LIMIT 3";
		$result = mysqli_query($con, $query);
		confirm_query($result, $query);
		return $result;
	}
	function add_news($dates, $title, $detail, $filename)
	{
		global $con;
		$query = "INSERT INTO ";
		$query .= "news ";
		$query .= "(dates,title,detail,filename) ";
		$query .= "VALUES ( ";
		$query .= "'$dates','$title','$detail','$filename' ";
		$query .= ");";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		return true;
	}
	function getnewsID($id)
	{
		global $con;
		$query = "SELECT * FROM ";
		$query .= " news";
		$query .= " WHERE id=$id";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		return $result;
	}
	function Deletenews($diretory, $filename, $id)
	{
		global $con;
		if (delete_photo($diretory, $filename)) {
			$query = "DELETE FROM ";
			$query .= "news ";
			$query .= "WHERE ";
			$query .= "id= {$id} ";
			$query .= "LIMIT 1";
			$result = mysqli_query($con, $query);
			confirm_query($result);
			if (mysqli_affected_rows() > 0) {
				return TRUE;
			} else {
				return FALSE;
			}
		}
	}



	/********************* gallery Category Function*************************/
	function add_cate($category)
	{
		global $con;
		$query = "INSERT INTO ";
		$query .= "category ";
		$query .= "(category) ";
		$query .= "VALUES ( ";
		$query .= "'$category' ";
		$query .= ");";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		return true;
	}
	function ListCate()
	{
		global $con;
		$query = "SELECT * FROM ";
		$query .= "category ORDER BY id DESC";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		return $result;
	}
	function deletecate($id)
	{
		global $con;
		$query = "DELETE FROM ";
		$query .= "category ";
		$query .= "WHERE ";
		$query .= "id= {$id} ";
		$query .= "LIMIT 1";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		if (mysqli_affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}




	/**********************Gallery Function***********************************/
	function addGallery($category, $filename)
	{
		global $con;
		$query = "INSERT INTO ";
		$query .= "gallery ";
		$query .= "(category,filename) ";
		$query .= "VALUES ( ";
		$query .= " '$category','$filename' ";
		$query .= ");";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		return true;
	}
	function List_Gallery()
	{
		global $con;
		$query = "SELECT category.category,gallery.filename,gallery.id FROM ";
		$query .= "category,gallery";
		$query .= " WHERE category.id=gallery.category ORDER BY id DESC";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		return $result;
	}
	function List_Gallery_limit6()
	{
		global $con;
		$query = "SELECT * FROM ";
		$query .= "gallery ";
		$query .= " ORDER BY id DESC LIMIT 6";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		return $result;
	}
	function List_Gallery_bycate($id)
	{
		global $con;
		$query = "SELECT * FROM ";
		$query .= "gallery where category='$id'";
		$query .= " ORDER BY id DESC";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		return $result;
	}
	function List_allGallery()
	{
		global $con;
		$query = "SELECT * FROM ";
		$query .= "gallery";
		$query .= " ORDER BY id DESC LIMIT 8";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		return $result;
	}
	function getgalleryID($id)
	{
		global $con;
		$query = "SELECT * FROM ";
		$query .= " gallery";
		$query .= " WHERE id=$id";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		return $result;
	}
	function getgallerycateID($cate)
	{
		global $con;
		$query = "SELECT * FROM ";
		$query .= " gallery";
		$query .= " WHERE cate=$cate";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		return $result;
	}
	function DeleteGallery($diretory, $filename, $id)
	{
		global $con;
		if (delete_photo($diretory, $filename)) {
			$query = "DELETE FROM ";
			$query .= "gallery ";
			$query .= "WHERE ";
			$query .= "id= {$id} ";
			$query .= "LIMIT 1";
			$result = mysqli_query($con, $query);
			confirm_query($result);
			if (mysqli_affected_rows($con) > 0) {
				return TRUE;
			} else {
				return FALSE;
			}
		}
	}

	/********************* Video Function*************************/
	function add_video($title, $link)
	{
		global $con;
		$query = "INSERT INTO ";
		$query .= "video ";
		$query .= "(title,link) ";
		$query .= "VALUES ( ";
		$query .= "'$title','$link' ";
		$query .= ");";
		$result = mysqli_query($con, $query);
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
	function ListVideo()
	{
		global $con;
		$query = "SELECT * FROM ";
		$query .= "video ORDER BY id DESC";
		$result = mysqli_query($con, $query);
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
	function deletevideo($id)
	{
		global $con;
		$query = "DELETE FROM ";
		$query .= "video ";
		$query .= "WHERE ";
		$query .= "id= {$id} ";
		$query .= "LIMIT 1";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		if (mysqli_affected_rows() > 0) {
			return TRUE;
		} else {
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
	function add_testimonial($name, $detail, $filename)
	{
		global $con;
		$query = "INSERT INTO ";
		$query .= "testimonial ";
		$query .= "(name,detail,filename) ";
		$query .= "VALUES ( ";
		$query .= "'$name','$detail','$filename' ";
		$query .= ");";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		return true;
	}
	function get_testimonial()
	{
		global $con;
		$query = "SELECT * FROM";
		$query .= " testimonial";
		$query .= " ORDER BY id DESC";
		$result = mysqli_query($con, $query);
		confirm_query($result, $query);
		return $result;
	}
	function gettestimonialID($id)
	{
		global $con;
		$query = "SELECT * FROM ";
		$query .= " testimonial";
		$query .= " WHERE id=$id";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		return $result;
	}
	function DeleteTestimonial($diretory, $filename, $id)
	{
		global $con;
		if (delete_photo($diretory, $filename)) {
			$query = "DELETE FROM ";
			$query .= "testimonial ";
			$query .= "WHERE ";
			$query .= "id= {$id} ";
			$query .= "LIMIT 1";
			$result = mysqli_query($con, $query);
			confirm_query($result);
			if (mysqli_affected_rows() > 0) {
				return TRUE;
			} else {
				return FALSE;
			}
		}
	}
	/********************* Reg Function*************************/
	function add_reg($name, $email, $mobile, $passwords, $course)
	{
		global $con;
		$query = "INSERT INTO ";
		$query .= "registration ";
		$query .= "(name,email,mobile,passwords,course) ";
		$query .= "VALUES ( ";
		$query .= "'$name','$email','$mobile','$passwords','$course' ";
		$query .= ");";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		return true;
	}
	function ListReg()
	{
		global $con;
		$query = "SELECT * FROM ";
		$query .= "registration ORDER BY id DESC";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		return $result;
	}
	function deletereg($id)
	{
		global $con;
		$query = "DELETE FROM ";
		$query .= "registration ";
		$query .= "WHERE ";
		$query .= "id= {$id} ";
		$query .= "LIMIT 1";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		if (mysqli_affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	/***********************Story function *********************/
	function add_story($title, $detail, $filename)
	{
		global $con;
		$query = "INSERT INTO ";
		$query .= "story ";
		$query .= "(title,detail,filename) ";
		$query .= "VALUES ( ";
		$query .= "'$title','$detail','$filename' ";
		$query .= ");";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		return true;
	}
	function get_story()
	{
		global $con;
		$query = "SELECT * FROM";
		$query .= " story";
		$query .= " ORDER BY id DESC";
		$result = mysqli_query($con, $query);
		confirm_query($result, $query);
		return $result;
	}
	function getstoryID($id)
	{
		global $con;
		$query = "SELECT * FROM ";
		$query .= " story";
		$query .= " WHERE id=$id";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		return $result;
	}
	function Deletestory($diretory, $filename, $id)
	{
		global $con;
		if (delete_photo($diretory, $filename)) {
			$query = "DELETE FROM ";
			$query .= "story ";
			$query .= "WHERE ";
			$query .= "id= {$id} ";
			$query .= "LIMIT 1";
			$result = mysqli_query($con, $query);
			confirm_query($result);
			if (mysqli_affected_rows() > 0) {
				return TRUE;
			} else {
				return FALSE;
			}
		}
	}


	// *****************search list*******************
	function get_car_make()
	{
		global $con;
		$query = "SELECT * FROM ";
		$query .= " make";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		return $result;
	}
	function get_car_models($id)
	{
		global $con;
		$query = "SELECT * FROM ";
		$query .= " car_model ";
		$query .= "WHERE make=$id";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		return $result;
	}
	function get_car_variants($make_id, $model_id)
	{
		global $con;
		$query = "SELECT * FROM ";
		$query .= " car_variant ";
		$query .= " WHERE make_id=$make_id AND model_id=$model_id";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		return $result;
	}
	function get_car_model($id)
	{
		global $con;
		$query = "SELECT * FROM ";
		$query .= " `car_model`";
		$query .= " WHERE `make`= $id";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		return $result;
	}
	function get_car_variant($id)
	{
		global $con;
		$query = "SELECT * FROM ";
		$query .= " `car_variant`";
		$query .= " WHERE `model_id`= $id";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		return $result;
	}
	//*************** makes  **********************
	function addMake($unique_id, $make)
	{
		global $con;
		$query = "INSERT INTO ";
		$query .= " `make` ";
		$query .= " (`id`,`make`) ";
		$query .= " VALUES ($unique_id,'$make')";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		return $result;
	}
	function get_make_list()
	{
		global $con;
		$query = "SELECT * FROM ";
		$query .= " `make`";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		return $result;
	}
	function deleteMake($id)
	{
		global $con;
		$query = "DELETE FROM ";
		$query .= "make ";
		$query .= "WHERE ";
		$query .= "id= {$id} ";
		$query .= "LIMIT 1";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		if (mysqli_affected_rows($con) > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	//*************** makes  **********************
	function addModel($make, $model)
	{
		global $con;
		$query = "INSERT INTO ";
		$query .= " `car_model` ";
		$query .= " (`make`,`model`) ";
		$query .= " VALUES ('$make','$model')";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		return $result;
	}
	function get_model_list()
	{
		global $con;
		$query = "SELECT ";
		$query .= "`model_id` AS id,make.make AS make,`model`";
		$query .= "FROM  `make`,`car_model`";
		$query .= "WHERE car_model.make = make.id";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		return $result;
	}
	function addVariant($make, $model, $variant)
	{
		global $con;
		$query = "INSERT INTO ";
		$query .= " `car_variant` ";
		$query .= " (`make_id`,`model_id`,`variant`) ";
		$query .= " VALUES ('$make','$model','$variant')";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		return $result;
	}
	function get_variant_list()
	{
		global $con;
		$query = "SELECT";
		$query .= " variant_id AS id,make.make AS make,model,variant ";
		$query .= " FROM";
		$query .= " make,car_variant,car_model";
		$query .= " WHERE";
		$query .= " car_variant.model_id = car_model.model_id";
		$query .= " AND car_model.make = make.id";
		$query .= " ORDER BY id DESC";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		return $result;
	}
	function deleteVariant($id)
	{
		global $con;
		$query = "DELETE FROM ";
		$query .= "car_variant ";
		$query .= "WHERE ";
		$query .= "variant_id= {$id} ";
		$query .= "LIMIT 1";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		if (mysqli_affected_rows($con) > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}
	function deleteModel($id)
	{
		global $con;
		$query = "DELETE FROM ";
		$query .= "car_model ";
		$query .= "WHERE ";
		$query .= "model_id = {$id} ";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		if (mysqli_affected_rows($con) > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	// ************ checking *******************
	function check_make($make)
	{
		global $con;
		$query = "SELECT `make` FROM";
		$query .= " make";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		return check_existence_make($make, $result);
	}
	function check_modal($model)
	{
		global $con;
		$query = "SELECT `model` FROM";
		$query .= " `car_model`";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		return check_existence_model($model, $result);
	}
	function check_variant($model,$variant)
	{
		global $con;
		$query = "SELECT * FROM";
		$query .= " `car_variant`";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		return check_existence_variant($model,$variant, $result);
	}
	function check_feature($feature)
	{
		global $con;
		$query = "SELECT `feature` FROM";
		$query .= " `car_feature`";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		return check_existence_feature($feature, $result);
	}
	function check_existence_feature($feature, $result)
	{
		$status = true;
		if (mysqli_num_rows($result) > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				if (strtoupper($feature)  ==  strtoupper($row['feature'])) {
					$status = false;
					break;
				}
			}
		}
		return $status;
	}
	function check_existence_variant($model ,$variant, $result)
	{
		$status = true;
		if (mysqli_num_rows($result) > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				if (strtoupper($variant)  ==  strtoupper($row['variant']) && strtoupper($model)  ==  strtoupper($row['model_id'])) {
					$status = false ;
					break;
				}
			}
		}
		return $status;
	}
	function check_existence_model($make, $result)
	{
		$status = true;
		if (mysqli_num_rows($result) > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				if (strtoupper($make)  ==  strtoupper($row['model'])) {
					$status = false;
					break;
				}
			}
		}
		return $status;
	}
	function check_existence_make($make, $result)
	{
		$status = true;
		if (mysqli_num_rows($result) > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				if (strtoupper($make)  ==  strtoupper($row['make'])) {
					$status = false;
					break;
				}
			}
		}
		return $status;
	}
	function check_subcategory_make($id, $table)
	{
		global $con;
		$query = "SELECT `make` FROM";
		$query .= " $table";
		$query .= " WHERE make=$id";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		if (mysqli_num_rows($result) > 0) {
			return false;
		} else {
			return true;
		}
	}
	function check_subcategory_model($id, $table)
	{
		global $con;
		$query = "SELECT * FROM";
		$query .= " `$table`";
		$query .= " WHERE model_id=$id";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		if (mysqli_num_rows($result) > 0) {
			return false;
		} else {
			return true;
		}
	}
	function update_make($make, $preVal)
	{
		global $con;
		$query  = "UPDATE `make` ";
		$query .= " SET make='$make' ";
		$query .= " WHERE make='$preVal' ";
		$result = mysqli_query($con, $query);
		confirm_query($con, $result);
		if (mysqli_affected_rows($con) > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}
	// ****************  add feature  ***************
	function addFeature($feature, $position)
	{
		global $con;
		$query  = "INSERT INTO `car_feature` ";
		$query .= " (`feature`,`position`) ";
		$query .= " VALUES ('$feature',$position) ";
		$result = mysqli_query($con, $query);
		confirm_query($con, $result);
		if (mysqli_affected_rows($con) > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}
	function get_feature_list()
	{
		global $con;
		$query  = "SELECT * FROM ";
		$query  .= "`car_feature` ";
		$query  .= "ORDER BY `position` ASC";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		return $result;
	}
	function update_feature($feature, $preVal)
	{
		global $con;
		if (empty(trim($feature))) {
			$query  = "DELETE FROM `car_feature` ";
			$query .= " WHERE feature='$preVal'";
		} else {
			$query  = "UPDATE car_feature ";
			$query .= " SET feature='$feature' ";
			$query .= " WHERE feature='$preVal'";
		}
		$result = mysqli_query($con, $query);
		confirm_query($result);
		// return $result;
		if (mysqli_affected_rows($con) > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}
	function delete_feature($id)
	{
		global $con;
		$query = "DELETE FROM ";
		$query .= "car_feature ";
		$query .= "WHERE ";
		$query .= "id= {$id} ";
		$query .= "LIMIT 1";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		if (mysqli_affected_rows($con) > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}
	// ***************** Manage Package***********************
	function check_package($package)
	{
		global $con;
		$query = "SELECT `package_name` AS `package` FROM";
		$query .= " `package`";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		return check_existence_package($package, $result);
	}
	function check_existence_package($package, $result)
	{
		$status = true;
		if (mysqli_num_rows($result) > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				if (strtoupper($package)  ==  strtoupper($row['package'])) {
					$status = false;
					break;
				}
			}
		}
		return $status;
	}
	function addPackage($package, $price, $listing)
	{
		global $con;
		$query = "INSERT INTO ";
		$query .= " `package` ";
		$query .= " (`package_name`,`package_price`,`package_listing`) ";
		$query .= " VALUES ('$package','$price','$listing')";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		return $result;
	}
	function get_package_list()
	{
		global $con;
		$query = "SELECT * FROM ";
		$query .= "`package` ";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		return $result;
	}
	function deletePackage($id)
	{
		global $con;
		$query = "DELETE FROM ";
		$query .= "package ";
		$query .= "WHERE ";
		$query .= "id= {$id} ";
		$query .= "LIMIT 1";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		if (mysqli_affected_rows($con) > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	// **********************Listing******************************
	function addListing($data, $filename, $imageArray, $unique_id)
	{
		global $con;
		$user_id = $data['user_id'];
		$username = $data['username'];
		$make = $data['make'];
		$model = $data['model'];
		$variant = $data['variant'];
		$modelYear = $data['modelYear'];
		$interiorColor = $data['interiorColor'];
		$exteriorColor = $data['exteriorColor'];
		$transmission = $data['transmission'];
		$fuel = $data['fuel'];
		$salePrice = $data['salePrice'];
		$marketPrice = $data['marketPrice'];
		$feature = $data['feature'];
		$description = mysql_prep($data['description']);
		$query = "INSERT INTO ";
		$query .= "listing ";
		$query .= "(id,username,make_id,model_id,variant_id,model_year,interior_color,exterior_color,transmission,fuel,sale_price,market_price,main_image,feature,description) ";
		$query .= "VALUES ( ";
		$query .= "$unique_id, '$username',$make,$model,$variant,$modelYear,'$interiorColor','$exteriorColor','$transmission','$fuel',$salePrice,$marketPrice,'$filename','$feature','$description' ";
		$query .= ");";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		$query = "INSERT INTO users_listings ";
		$query .= "(user_id,listing_id)";
		$query .= "VALUES ('$user_id',$unique_id)";
		$result = mysqli_query($con, $query);
		confirm_query($result);

		if (addImages($unique_id, $imageArray)) {
			return true;
		}else {
			return false;
		}
	}
	function addImages($id, $imageArray)
	{
		global $con;
		foreach ($imageArray as $imageName) {
			$query = "INSERT INTO `listing_images`";
			$query .= " (`image_name`,`listing_id`)";
			$query .= " VALUES('$imageName','$id')";
			$result = mysqli_query($con, $query);
			confirm_query($result);
		}
		return true;
	}
	function get_listing_list()
	{
		global $con;
		$query = "SELECT listing.id AS id,`availabilty`,username,make.make AS make,car_model.model AS model,car_variant.variant AS variant,model_year,interior_color,exterior_color,transmission, fuel, sale_price, market_price,main_image,`status`,feature_state,users_listings.approval as `approval`,users_listings.priority	 as priority,visibility,description	
					FROM `listing`,car_model,car_variant,make, users_listings 
					WHERE listing.make_id = make.id AND listing.model_id = car_model.model_id AND listing.variant_id = car_variant.variant_id AND users_listings.listing_id = listing.id;";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		return $result;
	}
	function get_approved_listing_list()
	{
		global $con;
		$query = "SELECT listing.id AS id,`availabilty`,username,make.make AS make,car_model.model AS model,car_variant.variant AS variant,model_year,interior_color,exterior_color,transmission, fuel, sale_price, market_price,main_image,`status`,feature_state,users_listings.approval as `approval`,users_listings.priority	 as priority,visibility,description	
					FROM `listing`,car_model,car_variant,make, users_listings 
					WHERE listing.make_id = make.id AND listing.model_id = car_model.model_id AND listing.variant_id = car_variant.variant_id AND users_listings.listing_id = listing.id AND users_listings.approval = 'Approved' ;";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		return $result;
	}
	function get_approved_inventory_listing_list($page_first_result,$item_per_page)
	{
		global $con;
		$query = "SELECT listing.id AS id,`availabilty`,username,make.make AS make,car_model.model AS model,car_variant.variant AS variant,model_year,interior_color,exterior_color,transmission, fuel, sale_price, market_price,main_image,`status`,feature_state,users_listings.approval as `approval`,users_listings.priority	 as priority,visibility,description	
					FROM `listing`,car_model,car_variant,make, users_listings 
					WHERE listing.make_id = make.id AND listing.model_id = car_model.model_id AND listing.variant_id = car_variant.variant_id AND users_listings.listing_id = listing.id AND users_listings.approval = 'Approved' LIMIT $page_first_result,$item_per_page;";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		return $result;
	}
	function get_user_listing_list($id)
	{
		global $con;
		$query = "SELECT listing.id AS id,`availabilty`,username,make.make AS make,car_model.model AS model,car_variant.variant AS variant,model_year,interior_color,exterior_color,transmission, fuel, sale_price, market_price,main_image,`status`,feature_state FROM `listing`,car_model,car_variant,make,users_listings WHERE listing.make_id = make.id AND listing.model_id = car_model.model_id AND listing.variant_id = car_variant.variant_id AND users_listings.listing_id = listing.id AND users_listings.user_id = $id;";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		return $result;
	}
	function get_listing_item($id)
	{
		global $con;
		$query = "SELECT * FROM listing WHERE";
		$query .= " listing.id = $id";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		return mysqli_fetch_assoc($result);
		//return $result;
	}
	function update_list($username, $id, $modelYear, $make, $model, $variant, $interiorColor, $exteriorColor, $transmission, $fuel, $salePrice, $marketPrice, $description)
	{
		global $con;
		$query = "UPDATE listing ";
		$query .= "SET ";
		$query .= "username='$username', ";
		$query .= "model_year=$modelYear, ";
		$query .= "make_id=$make, ";
		$query .= "model_id=$model, ";
		$query .= "variant_id=$variant, ";
		$query .= "interior_color='$interiorColor', ";
		$query .= "exterior_color='$exteriorColor', ";
		$query .= "transmission='$transmission', ";
		$query .= "fuel='$fuel', ";
		$query .= "sale_price=$salePrice, ";
		$query .= "market_price=$marketPrice, ";
		$query .= "`description`='$description' ";
		$query .= "WHERE id=$id";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		if (mysqli_affected_rows($con) > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}
	function get_listing_approve_status($id){
		global $con;
		$query = "SELECT approval FROM `users_listings` WHERE listing_id = $id;";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		if(mysqli_num_rows($result) > 0){
			$result = mysqli_fetch_array($result);
			return $result['approval'];
		}
	}
	function change_listing_approval_status($id,$status){
		global $con;
		$query = "UPDATE users_listings SET approval='$status' WHERE listing_id = $id";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		if(mysqli_affected_rows($con)>0){
			return true;
		}else{
			return false;
		}
	}
	// ***************** feature list **************************
	function get_car_features()
	{
		global $con;
		$query = "SELECT * FROM `car_feature`";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		return $result;
	}
	function getListingID($id)
	{
		global $con;
		$query = "SELECT * FROM ";
		$query .= " listing";
		$query .= " WHERE id=$id";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		return $result;
	}
	function  get_listing_images($id)
	{
		global $con;
		$query = "SELECT * FROM ";
		$query .= " `listing_images`";
		$query .= " WHERE listing_id = $id";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		return $result;
	}
	function DeleteListing($diretory, $filename, $id, $images)
	{
		global $con;
		if (delete_photo($diretory, $filename) && empty($images[0]) ? true  :  delete_additional_image($diretory, $images)) {
			if (!empty($images[0])) {
				delete_additional_images($images, $id);
			}
			$query = "DELETE FROM ";
			$query .= "listing ";
			$query .= "WHERE ";
			$query .= "id= {$id} ";
			$query .= "LIMIT 1";
			$result = mysqli_query($con, $query);
			confirm_query($result);

			$query = "DELETE FROM ";
			$query .= "users_listings ";
			$query .= "WHERE ";
			$query .= "listing_id= {$id} ";
			$query .= "LIMIT 1";
			$result = mysqli_query($con, $query);
			confirm_query($result);

			if (mysqli_affected_rows($con) > 0) {
				return TRUE;
			} else {
				return FALSE;
			}
		}
	}
	function delete_additional_images($images, $id)
	{
		global $con;
		$query = "DELETE FROM ";
		$query .= "listing_images ";
		$query .= "WHERE ";
		$query .= "listing_id= {$id};";
		$result = mysqli_query($con, $query);
		confirm_query($result);
	}
	function deleteListingImage($directory, $filename, $id)
	{
		global $con;
		if (delete_photo($directory, $filename)) {
			$query = "DELETE FROM ";
			$query .= "listing_images ";
			$query .= "WHERE ";
			$query .= "id= {$id};";
			$result = mysqli_query($con, $query);
			confirm_query($result);
			if (mysqli_affected_rows($con) > 0) {
				return true;
			} else {
				return false;
			}
		}
	}
	function change_listing_state($id, $status, $element)
	{
		global $con;
		$val = 1;
		if ($status == 1) {
			$query = "UPDATE `listing` SET `$element` = '0' WHERE `listing`.`id` = $id;";
			$val = "0";
		} else {
			$query = "UPDATE `listing` SET `$element` = '1' WHERE `listing`.`id` = $id;";
			$val = "1";
		}
		$result = mysqli_query($con, $query);
		confirm_query($result);
		if (mysqli_affected_rows($con) > 0) {
			return  $val;
		} else {
			return "fail";
		}
	}
	function change_listing_priority($id, $status, $element)
	{
		global $con;
		$val = 1;
		if ($status == 1) {
			$query = "UPDATE `users_listings` SET `$element` = '0' WHERE `listing_id` = $id;";
			$val = "0";
		} else {
			$query = "UPDATE `users_listings` SET `$element` = '1' WHERE `listing_id` = $id;";
			$val = "1";
		}
		$result = mysqli_query($con, $query);
		confirm_query($result);
		if (mysqli_affected_rows($con) > 0) {
			return  $val;
		} else {
			return "fail";
		}
	}
	function change_listing_visibility($id,$status)
	{
		global $con;
		$status= trim($status);
		$return_status = "Public";
		if($status == "Private"){
			$query = "UPDATE `users_listings` SET `visibility` = 'Public' WHERE `listing_id` = $id;";
			$return_status  = "Public";
			$result = mysqli_query($con, $query);
		}else{
			$query = "UPDATE `users_listings` SET `visibility` = 'Private' WHERE `listing_id` = $id;";
			$return_status  = "Private";
			$result = mysqli_query($con, $query);
		}
		
		
		confirm_query($result);
		if (mysqli_affected_rows($con) > 0) {
			return  $return_status;
		} else {
			return $return_status;
		}
	}
	function get_all_pending_listings(){
		global $con;
		$query = "SELECT listing.id AS id,`availabilty`,username,make.make AS make,car_model.model AS model,car_variant.variant AS variant,model_year,interior_color,exterior_color,transmission, fuel, sale_price, market_price,main_image,`status`,feature_state,users_listings.approval as `approval`,visibility FROM `listing`,car_model,car_variant,make, users_listings WHERE listing.make_id = make.id AND listing.model_id = car_model.model_id AND listing.variant_id = car_variant.variant_id AND users_listings.listing_id = listing.id AND users_listings.approval='Pending';";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		if(mysqli_num_rows($result) > 0){
			return $result;
		}else{
			return $result;
		}
	}
	function get_listing_image_name($id)
	{
		global $con;
		$query = "SELECT * FROM ";
		$query .= " `listing_images`";
		$query .= " WHERE id = $id ";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		$name = mysqli_fetch_assoc($result);
		return $name['image_name'];
	}
	function create_user($user_id, $uname, $email, $password, $mobile_no)
	{
		global $con;
		$query = "INSERT INTO `users` ";
		$query .= "(`id`, `username`,`email`,`password`,`mobile_no`)";
		$query .= "VALUES (";
		$query .= " '$user_id','$uname', '$email', '$password','$mobile_no' ";
		$query .= ")";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		if (mysqli_affected_rows($con) > 0) {
			return true;
		} else {
			return false;
		}
	}
	function get_user_details($id)
	{
		global $con;
		$query = "SELECT * FROM ";
		$query .= "`users` ";
		$query .= " WHERE `id`=$id";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		if (mysqli_num_rows($result) > 0) {
			return mysqli_fetch_assoc($result);
		} else {
			return false;
		}
	}
	function check_user_profile($user_id)
	{
		global $con;
		$query = "SELECT * FROM ";
		$query .= "`user_profile` WHERE ";
		$query .= "`user_id` =$user_id ";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		if (mysqli_num_rows($result) > 0) {
			$result = mysqli_fetch_assoc($result);
			return $result;
		} else {
			$result = mysqli_fetch_assoc($result);
			return $result;
		}
	}
	function add_user($_data, $filename, $unique_id, $user_id)
	{
		global $con;
		$fname = $_data['fname'];
		$lname = $_data['lname'];
		$gender = $_data['gender'];
		$country = $_data['country'];
		$city = $_data['city'];
		$address = $_data['address'];
		$zip_code = mysql_prep($_data['zip_code']);
		$query = "INSERT INTO `user_profile` ";
		$query .= "(`id`, `user_id`, `fname`, `lname`, `gender`, `profile_image`, `country`, `city`, `address`, `zip_code`,  `pakage`)";
		$query .= "VALUES( ";
		$query .= "$unique_id, $user_id, '$fname', '$lname' ,'$gender', '$filename', '$country', '$city', '$address', '$zip_code', 1)";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		if (mysqli_affected_rows($con) > 0) {
			return true;
		} else {
			return false;
		}
	}
	function get_user_list()
	{
		global $con;
		$query = "SELECT users.id AS id,username,fname,lname,email,account_status,country,city,profile_image,date_of_signup FROM `users`,`user_profile` WHERE users.id = user_profile.user_id;";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		return $result;
	}
	function get_user_active_status($id)
	{
		global $con;
		$query = "SELECT account_status FROM users WHERE id = $id;";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		$result = mysqli_fetch_assoc($result);
		return $result['account_status'];
	}
	function activate_user($id, $value)
	{
		global $con;
		$query = "UPDATE users SET ";
		$query .= "account_status = ";
		$query .= "$value ";
		$query .= "WHERE id = $id";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		if (mysqli_affected_rows($con) > 0) {
			return true;
		} else {
			return false;
		}
	}
	function users_count()
	{
		global $con;
		$query = "SELECT COUNT(id) AS `no` FROM `users`";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		$result = mysqli_fetch_assoc($result);
		return $result['no'];
	}
	function get_user_profile_details($id)
	{
		global $con;
		$query = "SELECT users.id AS id,username,users.mobile_no AS mobile_no,gender,fname,lname,email,account_status,address,zip_code,country,city,profile_image,date_of_signup FROM `users`,`user_profile` WHERE users.id = user_profile.user_id AND users.id=$id;";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		if (mysqli_num_rows($result) > 0) {
			$result = mysqli_fetch_assoc($result);
			return $result;
		} else {
			return "failed";
		}
	}
	function update_user_profile($data, $filename)
	{
		global $con;
		$fname = $data['fname'];
		$lname = $data['lname'];
		$gender = $data['gender'];
		$country = $data['country'];
		$city = $data['city'];
		$address = $data['address'];
		$zip_code = $data['zip_code'];
		$mobile_no = $data['mobile_no'];
		// ******query
		$query = "UPDATE `user_profile` ";
		$query .= "SET ";
		$query .= "`fname` ='$fname', ";
		$query .= "`lname` = '$lname', ";
		$query .= "`gender` = '$gender', ";
		$query .= " `country` = '$country', ";
		$query .= " `city` = '$city', ";
		$query .= " `address` = '$address', ";
		$query .= "`zip_code` = '$zip_code', ";
		$query .= "`mobile_no`= '$mobile_no', ";
		$query .= "`profile_image` = '$filename' ";
		$query .= " WHERE `user_id` = " . $data['id'];
		$result = mysqli_query($con, $query);
		confirm_query($result);
		if (mysqli_affected_rows($con) > 0) {
			return true;
		} else {
			return false;
		}
	}
	function delete_user($id)
	{
		global $con;
		$query = "DELETE FROM users WHERE id=$id;";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		$query = "DELETE FROM user_profile WHERE `user_id`= $id;";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		if (mysqli_affected_rows($con) > 0) {
			return true;
		} else {
			return false;
		}
	}
	function get_max_count($table_name, $id)
	{
		global $con;
		$query = "SELECT COUNT(`id`) AS `max` FROM  ";
		$query .= "`$table_name` ";
		$query .= "WHERE listing_id= $id";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		if (mysqli_num_rows($result) > 0) {
			$result=mysqli_fetch_assoc($result);
			return $result['max'];
		}
	}
	function addListingImages($imageArray, $listing_id)
	{
		global $con;
		foreach ($imageArray as $image_name) {
			$query = "INSERT INTO ";
			$query .= "`listing_images` ";
			$query .= "(`listing_id`,`image_name`) ";
			$query .= " VALUES( $listing_id,'$image_name');";
			$result = mysqli_query($con, $query);
			confirm_query($result);
		}
		if(mysqli_affected_rows($con)> 0){
			return true;
		}else{
			return false;
		}
	}
	function get_users()
	{
		global $con;
		$query = "SELECT * FROM users WHERE account_status=1;";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		if(mysqli_num_rows($result) > 0){
			return $result;
		}else{
			return false;
		}

	}
	function get_username($id){
		global $con;
		$query = "SELECT username FROM users WHERE id = $id";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		if(mysqli_num_rows($result) > 0){
			$result = mysqli_fetch_array($result);
			$username = $result['username'];
			return $username;
		}
	}
	function update_headOffice_first_email($value){
		global $con;
		$query = "UPDATE `head_office_details` ";
		$query .= " SET `first_email`='$value'";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		if(mysqli_affected_rows($con)>0){
			return true;
		}else{
			return false;
		}
	}
	function update_headOffice_second_email($value){
		global $con;
		$query = "UPDATE `head_office_details` ";
		$query .= " SET `second_email`='$value'";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		if(mysqli_affected_rows($con)>0){
			return true;
		}else{
			return false;
		}
	}
	function update_headOffice_first_mobile_no($value){
		global $con;
		$query = "UPDATE `head_office_details` ";
		$query .= " SET `first_phone_no`='$value'";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		if(mysqli_affected_rows($con)>0){
			return true;
		}else{
			return false;
		}
	}
	function update_headOffice_second_mobile_no($value){
		global $con;
		$query = "UPDATE `head_office_details` ";
		$query .= " SET `second_phone_no`='$value'";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		if(mysqli_affected_rows($con)>0){
			return true;
		}else{
			return false;
		}
	}
	function update_headOffice_address($value){
		global $con;
		$query = "UPDATE `head_office_details` ";
		$query .= " SET `address`='$value'";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		if(mysqli_affected_rows($con)>0){
			return true;
		}else{
			return false;
		}
	}
	function get_head_office_details(){
		global $con;
		$query = "SELECT * FROM `head_office_details`";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		if(mysqli_num_rows($result)>0){
			return mysqli_fetch_array($result);
		}else{
			return false;
		}
	}
	function addBranch($phone_no, $email, $name, $address){
		global $con;
		$query = "INSERT INTO `branch_details` ";
		$query .= "(`name`,`email`,`phone_no`,`address`) VALUES( ";
		$query .= " '$name','$email','$phone_no','$address')";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		if(mysqli_affected_rows($con)>0){
			return true;
		}else{
			return false;
		}
	}
	function get_branch_list(){
		global $con;
		$query = "SELECT * FROM `branch_details`";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		if(mysqli_num_rows($result)>0){
			return $result;
		}else{
			return false;
		}
	}
	function delete_branch($id){
		global $con;
		$query = "DELETE FROM `branch_details` WHERE ";
		$query .= "`id`=$id ";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		if(mysqli_affected_rows($con)>0){
			return true;
		}else{
			return false;
		}
	}

	// ***************************** fort-end  index.php **************************
	function get_inventory_list_with_limit($limit){
		global $con;
		$query = "SELECT listing.id AS id,`availabilty`,username,make.make AS make,car_model.model AS model,car_variant.variant AS variant,model_year,interior_color,exterior_color,transmission, fuel, sale_price, market_price,main_image,`status`,feature_state,users_listings.approval as `approval`,users_listings.priority	 as priority,visibility,description	FROM `listing`,car_model,car_variant,make, users_listings 
		WHERE listing.make_id = make.id AND listing.model_id = car_model.model_id AND listing.variant_id = car_variant.variant_id AND users_listings.listing_id = listing.id AND users_listings.approval = 'Approved'
		ORDER BY listing.id DESC LIMIT $limit;";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		if(mysqli_num_rows($result) > 0){
			return $result;
		}else{
			return $result;
		}
	}
	function addReview($id,$name,$review,$type ,$filename){
		global $con;
		$query = "INSERT INTO `reviews` ";
		$query .= " VALUES($id,'$name','$type','$filename','$review')";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		if(mysqli_affected_rows($con) > 0){
			return true;
		}else{
			return false;
		}
	}
	function get_review_list(){
		global $con;
		$query = "SELECT * FROM `reviews`";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		if(mysqli_num_rows($result) > 0){
			return $result;
		}else{
			return false;
		}
	}
	function deleteReview($id){
		global $con;
		$query = "DELETE FROM `reviews` WHERE id = $id";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		if(mysqli_affected_rows($con)>0){
			return true;
		}else{
			return false;
		}

	}
	function get_vehicle_details($id){
		global $con;
		$query = "SELECT l.*,make.make,car_model.model,car_variant.variant ";
		$query .= "FROM `listing` AS l,`make`,`car_model`,`car_variant` ";
		$query .= "WHERE make.id = l.make_id AND car_model.model_id = l.model_id AND car_variant.variant_id = l.variant_id AND l.id =$id ;";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		if(mysqli_num_rows($result) > 0){
			return $result;
		}else{
			return false;
		}
	}
	function get_feature_name($id){
		global $con;
		$query = "SELECT * FROM `car_feature` WHERE id IN ($id) ORDER BY position ASC";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		if(mysqli_num_rows($result) > 0){
			return $result;
		}else{
			return false;
		}
	}	
	function get_agent_details($id){
		global $con;
		$query = "SELECT users.id AS id, users.email AS email,visibility,username,mobile_no,user_profile.fname AS fname,user_profile.lname AS lname,user_profile.profile_image AS image ";
		$query .= "FROM `users_listings`,`users`,`user_profile`  ";
		$query .= "WHERE users.id = users_listings.user_id AND users.id = user_profile.user_id AND users_listings.listing_id = $id; ";
		$result = mysqli_query($con, $query);
		if(mysqli_num_rows($result) > 0){
			return $result;
		}else{
			return false;
		}
	}
	function get_searched_listing_list($data,$page_first_result,$item_per_page){
		global $con;
		$query = "SELECT listing.id AS id,`availabilty`,username,make.make AS make,car_model.model AS model,car_variant.variant AS variant,model_year,interior_color,exterior_color,transmission, fuel, sale_price, market_price,main_image,`status`,feature_state,users_listings.approval as `approval`,users_listings.priority	 as priority,visibility,description	
					FROM `listing`,car_model,car_variant,make, users_listings 
					WHERE listing.make_id = make.id AND listing.model_id = car_model.model_id AND listing.variant_id = car_variant.variant_id AND users_listings.listing_id = listing.id AND users_listings.approval = 'Approved' ";
		foreach ($data as $key => $value){
			if($key =='market_price' || $key =='max_sale_price' || $key =='min_sale_price' || $key =='pg' || $key == 'submit'){
				continue;
			}
			$query .= "AND listing.$key = '$value' ";
		}
		if(isset($_GET['max_sale_price']) || isset($_GET['min_sale_price'])){
			$price = 999999999999;
			$min_price = 0;
			if(isset($_GET['min_sale_price']) && !empty($_GET['min_sale_price'])){
				$min_price = $_GET['min_sale_price'];
				
			}
			if(isset($_GET['max_sale_price']) && !empty($_GET['max_sale_price'])){
				$price = $_GET['max_sale_price'];
			}
			$query .= "AND sale_price BETWEEN $min_price AND $price ";
		}
		
		$query .="LIMIT $page_first_result,$item_per_page;";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		return $result;
	}
	function total_searched_listings($data){
		global $con;
		$query = "SELECT listing.id AS id,`availabilty`,username,make.make AS make,car_model.model AS model,car_variant.variant AS variant,model_year,interior_color,exterior_color,transmission, fuel, sale_price, market_price,main_image,`status`,feature_state,users_listings.approval as `approval`,users_listings.priority	 as priority,visibility,description	
					FROM `listing`,car_model,car_variant,make, users_listings 
					WHERE listing.make_id = make.id AND listing.model_id = car_model.model_id AND listing.variant_id = car_variant.variant_id AND users_listings.listing_id = listing.id AND users_listings.approval = 'Approved' ";
		foreach ($data as $key => $value){
			if($key =='market_price' || $key =='max_sale_price' || $key =='min_sale_price' || $key =='pg' || $key == 'submit'){
				continue;
			}
			$query .= "AND listing.$key = '$value' ";
		}
		if(isset($_GET['max_sale_price']) || isset($_GET['min_sale_price'])){
			$price = 999999999999;
			$min_price = 0;
			if(isset($_GET['min_sale_price']) && !empty($_GET['min_sale_price'])){
				$min_price = $_GET['min_sale_price'];
			}
			if(isset($_GET['max_sale_price']) && !empty($_GET['max_sale_price'])){
				$price = $_GET['max_sale_price'];
			}
			$query .= "AND sale_price BETWEEN $min_price AND $price ";
		}
		$query .=";";
		$result = mysqli_query($con, $query);
		confirm_query($result);
		return mysqli_num_rows($result);
	}
	function total_listings(){
		global $con;
		$query = "SELECT * FROM `users_listings` WHERE 	approval = 'Approved'";
		$result = mysqli_query($con,$query);
		confirm_query($result);
		return mysqli_num_rows($result);
	}
?>
