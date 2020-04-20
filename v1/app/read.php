<?php
include $_SERVER['DOCUMENT_ROOT'].'/api/v1/config/config.php';

	if (!empty($id)) {
		$id=$id;
		$where = "WHERE `id`=".$id;
	}
	else{
		$id = 0;
		$where = "";
	}
	$sql="SELECT * FROM `student`".$where;
	$result=mysqli_query($conn,$sql);
	if (mysqli_num_rows($result) > 0) {
		while ( $data=mysqli_fetch_assoc($result)) { 
			$response[] = array("name" => $data['name'],"email" => $data['email'],"mobile" => $data['mobile'],"address" => $data['address']);	
		}
	}
	else{
		$response=array("message" => "no data to display");
	}
	echo json_encode($response);
?>