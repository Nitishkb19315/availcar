<?php
	

	function total_records($table_name){
		global $con;
		$query ="select * from $table_name";
		$result = mysql_query($query,$con);
		confirm_query($result);
		if(mysqli_num_rows($result)>0){
			return mysqli_num_rows($result);
		} else{
			return 0;
		}
	}
////   file uploading functions
	function upload_file($tmp_name, $file_name, $upload_dir,$width,$height, $unique_id){
	  		$upload_dir = check_upload_dir($upload_dir);

	  		$target_file = get_target_file($file_name, $unique_id);
	  		if(!empty($target_file) || !$target_file){
	  			$upload_dir = "uploads/".$upload_dir;
	  			if(move_uploaded_file($tmp_name,$upload_dir."/".$target_file)){
	  				thumbnail( $upload_dir."/".$target_file, $upload_dir."/".$target_file, $width, $height);

					return $target_file;
				} else {
					return false;
				}
	  		}
	  }
	function check_extension($file_name){
	  	if(file_exists($file_name)){
				$file_parts = pathinfo($file_name);
				$image_extensions = Array('jpg','png','jpeg');
				if (in_array($file_parts['extension'], $image_extensions)){
				    return true;
				} else {
				    return false;
				}
			} else {
				return false;
			}
		}

	function check_upload_dir($upload_dir){
	  	if(file_exists("uploads/".$upload_dir)){
			return $upload_dir;
	  	}
		else {
			mkdir("uploads/".$upload_dir, 0777, true);
			if(file_exists("uploads/".$upload_dir)){
				return $upload_dir;
	  		}
		}
	}	

	function get_target_file($file_name, $unique_id){
		$target_file="";
		$info = new SplFileInfo($file_name);
		$extension = $info->getExtension();
		$target_file = "image_".$unique_id.".".$extension;
		if(!empty($target_file)){
			return $target_file;
		} else {
			return false;
		}
	}

	function thumbnail($src, $dist, $dis_width, $dis_height ){

		$img = '';
		$extension = strtolower(strrchr($src, '.'));
		switch($extension)
		{
			case '.jpg':
			case '.jpeg':
				$img = @imagecreatefromjpeg($src);
				break;
			case '.gif':
				$img = @imagecreatefromgif($src);
				break;
			case '.png':
				$img = @imagecreatefrompng($src);
				break;
		}
		$width = imagesx($img);
		$height = imagesy($img);
		$dis_height = $dis_width * ($height / $width);
		$dis_width = $dis_height * ($width / $height);

		$new_image = imagecreatetruecolor($dis_width, $dis_height);
		imagecopyresampled($new_image, $img, 0, 0, 0, 0, $dis_width, $dis_height, $width, $height);


		$imageQuality = 100;

		switch($extension)
		{
			case '.jpg':
			case '.jpeg':
				if (imagetypes() & IMG_JPG) {
					imagejpeg($new_image, $dist, $imageQuality);
				}
				break;

			case '.gif':
				if (imagetypes() & IMG_GIF) {
					imagegif($new_image, $dist);
				}
				break;

			case '.png':
				$scaleQuality = round(($imageQuality/100) * 9);
				$invertScaleQuality = 9 - $scaleQuality;

				if (imagetypes() & IMG_PNG) {
					imagepng($new_image, $dist, $invertScaleQuality);
				}
				break;
		}
		imagedestroy($new_image);
	}
	function update_photo($field_name,$new_photo, $old_photo, $id,$table_name){
		global $con;
		if(delete_photo($field_name, $old_photo)){
			$query = "UPDATE ".$table_name." set ";
			$query .= $field_name ."='".$new_photo."'";
			$query .= " WHERE id=$id";
			$result = mysql_query($query,$con);
			confirm_query($result);
			return true; 
		} else {
			return false;
		}
	}

	function delete_photo($dir_type, $file_name){
		$path = "uploads/".$dir_type."/";
		$file_name=strtolower($file_name);
		if($file_name!="na.png" && $file_name!="na"){
			$path .= $file_name;
			if(file_exists($path)){
				if(unlink($path)){
					return true;
				} else {
					return false;
				}
			} else {
				return true;
			}
		} else {
			return true;
		}
	}
function delete_photoe($dir_type, $file_name){
		$path = "../uploads/".$dir_type."/";
		$file_name=strtolower($file_name);
		if($file_name!="na.png" && $file_name!="na"){
			$path .= $file_name;
			if(file_exists($path)){
				if(unlink($path)){
					return true;
				} else {
					return false;
				}
			} else {
				return true;
			}
		} else {
			return true;
		}
	}


	function Size($path)
	{
	    $bytes = sprintf('%u', filesize($path));
	    if ($bytes > 0)
	    {
	        $unit = intval(log($bytes, 1024));
	        $units = array('B', 'KB', 'MB', 'GB');
	        if (array_key_exists($unit, $units) === true)
	        {
	            return sprintf('%d %s', $bytes / pow(1024, $unit), $units[$unit]);
	        }
	    }

	    return $bytes;
	}

	function downloadFile($file){
		$path_parts = pathinfo($file);
		$filename  = $path_parts['basename'];
		$file_path  = "admin/uploads/downloads/" . $filename;
		/*if (file_exists($file_path)) {
		    header('Content-Description: File Transfer');
		    header("Content-Type: application/force-download");
		    header("Content-Disposition: attachment; filename=\"$file_name\"");
		    header('Expires: 0');
		    header('Cache-Control: must-revalidate');
		    header('Pragma: public');
		    header('Content-Length: ' . filesize($file_name));
		    readfile($file_name);
		    exit;
		}*/
		if (file_exists($file_path)){

			$file_extension = strtolower(substr(strrchr($filename,"."),1));
			switch( $file_extension )
			{
			  case "pdf": $ctype="application/pdf"; break;
			  case "exe": $ctype="application/octet-stream"; break;
			  case "zip": $ctype="application/zip"; break;
			  case "doc":
			  case "docx": $ctype="application/msword"; break;
			  case "xlsx":
			  case "xls": $ctype="application/vnd.ms-excel"; break;
			  case "pptx":
			  case "ppt": $ctype="application/vnd.ms-powerpoint"; break;
			  case "gif": $ctype="image/gif"; break;
			  case "png": $ctype="image/png"; break;
			  case "jpeg":
			  case "jpg": $ctype="image/jpg"; break;
			  default: $ctype="application/force-download";
			}
			header("Pragma: public"); // required
			header("Expires: 0");
			header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
			header("Cache-Control: private",false); // required for certain browsers 
			header("Content-Type: $ctype");
			// change, added quotes to allow spaces in filenames, by Rajkumar Singh
			header("Content-Disposition: attachment; filename=\"".basename($filename)."\";" );
			header("Content-Transfer-Encoding: binary");
			header("Content-Length: ".filesize($file_path));
			readfile("$file_path");
			exit();
		}
	}
?>