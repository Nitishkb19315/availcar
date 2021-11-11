<?php require_once("../includes/config.php") ?>
<?php require_once("../includes/functions.php") ?>
<pre>
<?php
session_start();
if (isset($_POST['submit'])) {
    print_r($_FILES);
    print_r($_POST);
    print_r($_SESSION);
    $errors = array();
    $unique_id = $_POST['id'];
    $max = get_max_count("listing_images", $_POST['id'])+1;
    print_r($max);
    $width = 550;
    $height = 450;
    $additionalImageName = "";
    $upload_dir = "listing_image";
    for ($i = 0; $i < count($_FILES['images']['name']); $i++) {
        $additionalImage_unique_id = $unique_id . "_" . $max;
        if (!$imageArray[$i]  = upload_file($_FILES['images']['tmp_name'][$i], $_FILES['images']['name'][$i], $upload_dir, $width, $height, $additionalImage_unique_id)) {
            $errors[] = "File not exists";
        }
        $max += 1;
    }
    if (!$errors) {
        if(addListingImages($imageArray, $_POST['id'])){
            header("Location: " . $_SERVER["HTTP_REFERER"]."&er=8");
        }
    }
}
?>
</pre>