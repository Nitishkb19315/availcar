<?php require_once("control\dashboard\includes\config.php"); ?>
<?php require_once("control\dashboard\includes/functions.php"); ?>
<pre>
<?php

$_GET['max_sale_price'] = str_replace(",","",$_GET['max_sale_price']);
print_r($_GET);
$listings = get_searched_listing_list($_GET,0,2);
while($row = mysqli_fetch_assoc($listings)){
    print_r($row);
}
print_r($_SERVER);
?>
</pre>