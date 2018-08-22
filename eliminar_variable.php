<?php
/*
	author: Benito Alfredo Reyes Hdz
	date:   06/12/2016
	git:	https://github.com/Alfredit0/
 */
 
$id=$_POST['id'];
require 'parametros_variables.php';

	$query = "DELETE "."FROM ".$tabla." where ".$campos[0]." = '".$id."'";
		  
	if(mysqli_query($link,$sql)){
		$status = "success";
		$message = "El registro se ha guardado correctamente";				
	}	
	else{
		$status = "error";	
		$message = "Ha ocurrido un error. Verifique los datos e intente nuevamente.";
	}
	echo json_encode(
		array(
			'status' => $status,
			'message' => $message
		));	
?>