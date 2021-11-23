<?php require_once("../includes/config.php") ?>
<?php require_once("../includes/functions.php") ?>
<pre>
<?php 
    print_r($_POST);
    print_r($_FILES);
    $check = array();
    
    $uname= $_POST['username'];
    $password = md5(mysql_prep($_POST['password']));
    $repassword = md5(mysql_prep($_POST['re-password']));
    $email =  mysql_prep($_POST['email']);
    $mobile_no = mysql_prep($_POST['mobile_no']);
    $table_name="users";
    $user_id = get_max_id($table_name);
    $upload_dir = "profiles";
    $errors = array();
    $table_name = "user_profile";
    $unique_id = get_max_id($table_name);
    $width = 550;
    $height = 450;
    $filename = "";
    if($password != $repassword){
        redirect("../add-user.php?er=15");
        exit();
    }
    
    $check['username']= $uname;
    $check['email'] = $email;
    $check['mobile_no'] = $mobile_no;
    print_r($check);
    if(check_exists_user($check)){
        redirect("../add-user.php?er=16");
        exit();
    }
    if(create_user($user_id,$uname,$email,$password,$mobile_no)){
        if(!empty($_FILES['profile_image']['name'])){
            if ( !$filename  = upload_file($_FILES['mainImage']['tmp_name'], $_FILES['mainImage']['name'], $upload_dir, $width, $height, $unique_id)) {
                $errors[] = "File not exists";
            }
        }
        if (!$errors){
            add_user($_POST, $filename,$unique_id,$user_id,$_POST['package']);
            activate_user($user_id,"1");
            redirect("../manage-users.php?er=8");
        } else{
            redirect("../manage-users.php?er=21");
        }
    }
?>
</pre>