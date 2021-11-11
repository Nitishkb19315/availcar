<?php require_once("./config.php"); ?>
<?php require_once("./functions.php"); ?>
<?php 
if(isset($_GET['id'])){
	$id = ($_GET['id']);
	$result = get_car_variant($id); 
	if(mysqli_num_rows($result)>0){
?>
	<option selected="" disabled="">Select</option>
<?php
		while($row = mysqli_fetch_assoc($result))
		{
?>
	    	<option value="<?php echo $row['variant_id'] ?>"><?php echo $row['variant']; ?></option>
<?php
		}
	}else {
?>
	    <option selected="" disabled="">Select</option>
<?php
	}
}
?>