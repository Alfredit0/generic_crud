<?php
/*
	author: Benito Alfredo Reyes Hdz
	date:   06/12/2016
	git:	https://github.com/Alfredit0/
 */	
try {
	$nombrec=$_POST['nombrecampo'];
	$valorc=$_POST['valorcampo'];
	require '../database_config/parametros.php';
	
	
	$sql = "UPDATE contactos1 SET estatus='NO_ENVIADO' WHERE ".$nombrec." = '".$valorc."'";
	$result = mysqli_query($link,$sql);
	
	$status = "success";	
	$message = "Actualización correcta";
		
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