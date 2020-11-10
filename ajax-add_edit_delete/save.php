<?php
	include('con_sever.php');
	$name=$_POST['name'];
	$email=$_POST['email'];
	$sql = "INSERT INTO `student`(id,`name`,idf) 
	VALUES (NULL,'$name',3)";
	if (mysql_query($sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}

?>