<?php
		require 'parametros.php';
		//Conexión a la BD		

		$sql = "INSERT INTO ".$tabla." (";
		
		for ($i=0; $i < $num_campos; $i++) { 
				$sql = $sql.$campos[$i];
				if ($i<$num_campos-1) {
					$sql=$sql.",";
				}
			}		
		$sql=$sql.")VALUES (";

		$i=0;
		foreach ($_REQUEST as $item => $value){
     		$sql=$sql."'".$value."'";
				if ($i<$num_campos-1) {
					$sql=$sql.",";
				}
				$i++;
		}
		$sql=$sql.")";		
		

		//echo $sql;

		if(mysqli_query($link,$sql))
			echo "¡Gracias! Hemos recibido sus datos.\n";	
		else
			echo "No se guardo el registro";
		?>