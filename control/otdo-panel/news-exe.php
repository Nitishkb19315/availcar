<?php require_once("includes/config.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php $page = "admin-news.php" ?>
<?php
if (isset($_POST['submit'])) {
    echo $dates = mysql_prep($_POST['dates']);
    echo $title = mysql_prep($_POST['title']);
    echo $detail = mysql_prep($_POST['detail']);
    $errors = array();
    $table_name = "news";
    $unique_id = get_max_id($table_name);
    $width = 360;
    $height = 280;
    $upload_dir = "news";
    if (!$filename  = upload_file($_FILES['file_upload']['tmp_name'], $_FILES['file_upload']['name'], $upload_dir, $width, $height, $unique_id)) {
        $errors[] = "File not exists";
    }
    if (!$errors) {
        add_news($dates,$title,$detail,$filename);
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