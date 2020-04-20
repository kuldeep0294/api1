<?php
header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json');
header("Access-Control-Allow-Methods: POST");
$data=json_decode(file_get_contents("php://input"));
//print_r(json_decode($data, true));
$name= $data->name;
$email= $data->email;
$mobile= $data->mobile;
$address= $data->address;

include $_SERVER['DOCUMENT_ROOT'].'/api/v1/config/config.php';

$sql = "INSERT INTO `student` (`name`,`email`,`mobile`,`address`) VALUES ('".$name."','".$email."','".$mobile."','".$address."')";
	$result = mysqli_query($conn,$sql);	
	if ($result == true) {
		$response=array("message" => "successfully inserted");
	}
	else{
		$response=array("message" => "failed insertion");
	}
	echo json_encode($response);
	?>