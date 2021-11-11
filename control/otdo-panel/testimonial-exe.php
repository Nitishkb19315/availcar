<?php require_once("includes/config.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php $page = "admin-testimonial.php" ?>
<?php
if (isset($_POST['submit'])) {
    echo $name = mysql_prep($_POST['name']);
    echo $detail = mysql_prep($_POST['detail']);
    $errors = array();
    $table_name = "testimonial";
    $unique_id = get_max_id($table_name);
    $width = 550;
    $height = 450;
    $upload_dir = "testimonial";
    if (!$filename  = upload_file($_FILES['file_upload']['tmp_name'], $_FILES['file_upload']['name'], $upload_dir, $width, $height, $unique_id)) {
        $errors[] = "File not exists";
    }
    if (!$errors) {
        add_testimonial($name, $detail, $filename);
        redirect($page . "?er=8");
    } else {
        redirect($page . "?er=11");
    }
} else {
    redirect($page . "?er=enter");
}

function verifyData($title)
{
    if (trim($title) == "" || empty($title))
        return false;
    else {
        return true;
    }
}

?>