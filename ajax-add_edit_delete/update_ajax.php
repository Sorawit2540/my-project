<?php
	include('con_sever.php');
	$id=$_POST['id'];
	$name=$_POST['name'];
	// $email=$_POST['email'];
	$sql = "UPDATE `student` 
	SET `name`='$name' WHERE id=$id";
	if (mysql_query($sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
?>