<?php require_once("includes/config.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php
	if(isset($_GET['id']) && !empty($_GET['id']))
	{
		$id = mysql_prep($_GET['id']);
		$directory = "news";
		$result = getnewsID($id);
		if(mysqli_num_rows($result)>0)
		{
		$row = mysqli_fetch_assoc($result);
		$filename = mysql_prep($row['filename']);
		}
		Deletenews($directory, $filename, $id);
		redirect("admin-news.php?er=5");	
		}
?>