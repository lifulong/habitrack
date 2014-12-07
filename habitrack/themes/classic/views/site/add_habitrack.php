<?php 
	//$res['id'] = $_POST['id'];
	$res['name'] = "lifulong";
	$res['age'] = "25";
	$response = "hello this is response".$_POST['id'];
	echo json_encode($res);
?>
