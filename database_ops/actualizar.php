<?php
/*
	author: Benito Alfredo Reyes Hdz
	date:   06/12/2016
	git:	https://github.com/Alfredit0/
 */
require '../database_config/parametros.php';	

		$sql = "UPDATE ".$tabla." SET ";

		$i=0;
		foreach ($_REQUEST as $item => $value){  		
     			if ($i==0) {
     				$id=$value;
     			}
				if ($i<$num_campos) {
					$sql=$sql.$campos[$i]."='".$value."'";
					$sql=$sql.",";
				}
				$i++;
		}		
		$sql= trim($sql, ',');
		$sql=$sql." WHERE ".$campos[0]." = '".$value."'";		
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