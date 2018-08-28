<?php
/*
	author: Benito Alfredo Reyes Hdz
	date:   06/12/2016
	git:	https://github.com/Alfredit0/
 */
try {
$email=$_POST['email'];
require '../database_config/parametros.php';


$sql = "SELECT nombre FROM usuarios where email = '".$email."'";
$result = mysqli_query($link,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$active = $row['active'];

$count = mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
  
if($count == 1) {
	session_start();
	session_register("myusername");
   	$_SESSION['myappusername'] = $email;
   	header("location: index.php");
}else {
	$status = "error";	
	$message = "Usuario o contraseña incorrectos.";
}

	if(mysqli_query($link,$sql)){
			
	}else{

	}
	echo json_encode(
		array(
			'status' => $status,
			'message' => $message
	));	
} catch (Exception $e) {
    $status = "error";	
	$message = $e->getMessage();
	
	echo json_encode(
		array(
			'status' => $status,
			'message' => $message
		));	
}
?>