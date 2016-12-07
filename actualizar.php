<?php
require 'parametros.php';	

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

	if(mysqli_query($link,$sql))
			echo "¡Gracias! Hemos recibido sus cambios.\n";	
		else
			echo "Error. No se guardo el registro";
?>