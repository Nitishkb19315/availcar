<?php require_once("../includes/config.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<pre>
<?php 
if(isset($_POST['submit'])){
    $name = mysql_prep($_POST['name']);
    $review = mysql_prep($_POST['review']);
    print_r($_POST);
    $table_name = "reviews";
    $errors = array();
    $unique_id = get_max_id($table_name);
    $width = 550;
    $height = 450;
    $upload_dir= "reviews_image";
    if (!$filename  = upload_file($_FILES['img']['tmp_name'], $_FILES['img']['name'], $upload_dir, $width, $height, $unique_id)) {
        $errors[] = "File not exists";
    }
    if (!$errors){
        if(addReview($unique_id,$name,$review,$_POST['type'] ,$filename)){
            redirect("../manage-reviews.php?er=8");
        }else{
            redirect("../manage-reviews.php?er=21");
        }
        
    }
}
?>
</pre>