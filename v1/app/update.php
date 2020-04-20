<?php
header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json');
header("Access-Control-Allow-Methods: POST");
$data=json_decode(file_get_contents("php://input"));
//print_r($data);
$name= $data->name;
$email= $data->email;
$mobile= $data->mobile;
$address= $data->address;
include $_SERVER['DOCUMENT_ROOT'].'/api/v1/config/config.php';

	if (!empty($id)) {
		$id=$id;
		$sql="UPDATE  `student` SET `name`='".$name."',`email`='".$email."',`mobile`='".$mobile."',`address`='".$address."' WHERE `id`='".$id."' "; 
	$result=mysqli_query($conn,$sql);
	if ($result == true) {
		$response=array("message" => "successfully updated");
	}
	else{
		$response=array("message" => "failed to update");
	}
	}
	else{
		$response=array("message" => "select user to update");
	}
	echo json_encode($response);
?>