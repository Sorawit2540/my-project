 <?php
	include('con_sever.php');
	$id=$_POST['id'];
	$sql = "DELETE FROM `student` WHERE id=$id";
	if (mysql_query($sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}

?>