<?php
include $_SERVER['DOCUMENT_ROOT'].'/api/v1/config/config.php';

	if (!empty($id)) {
		$id=$id;
		$where = "WHERE `id`=".$id;

		$sql="DELETE FROM `student`".$where;
	$result=mysqli_query($conn,$sql);
	if ($result == true) {
		$response=array("message" => "successfully deleted");
	}
	else{
		$response=array("message" => "no data to delete");
	}
	}
	else{
		$response=array("message" => "select user to delete");
	}
	echo json_encode($response);
?>