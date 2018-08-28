<?php
/*
	author: Benito Alfredo Reyes Hdz
	date:   06/12/2016
	git:	https://github.com/Alfredit0/
 */
require '../database_config/parametros_variables.php';	

		$sql = "UPDATE ".$tabla." SET ";

		$i=0;
		foreach ($_REQUEST as $item => $value){
     		$sql=$sql.$campos[$i]."='".$value."'";
     			if ($i==0) {
     				$id=$value;
     			}
				if ($i<$num_campos-1) {
					$sql=$sql.",";
				}
				$i++;
		}		
		$sql=$sql." WHERE ".$campos[0]." = '".$id."'";				

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
