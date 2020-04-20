<?php
if (isset($_GET['url'])) {
	$url=$_GET['url'];
	$url = explode("/", $url); 
    $page= $url[0].'.php';
    if (key_exists(1,$url)) {
    	$id=$url[1];
    }
    if (file_exists('app/'.$page)) {
    	require_once 'app/'.$page;
    }
	//var_dump($page); exit;
}
$request_method=$_SERVER["REQUEST_METHOD"];
?>