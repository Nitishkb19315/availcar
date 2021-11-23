<?php require_once("./includes/config.php") ?>
<?php require_once("./includes/functions.php") ?>
<pre>
<?php
ob_start();
require_once("./includes/session.php");
require_once("./includes/config.php");
require_once("./includes/functions.php");
print_r($_SESSION);
header("location:javascript://history.go(-1)?er=5");

echo date("Y-m-d")."\n";
echo date('Y/m/d',strtotime("-1 day"))."\n";

$date = new DateTime();
echo $date->modify("-1 month")->format('Y-m-d')."\n";
echo  get_pending_listings_count();
?>
</pre>