<?php
/*
	author: Benito Alfredo Reyes Hdz
	date:   06/12/2016
	git:	https://github.com/Alfredit0/
 */
 
$id=$_POST['id'];
require 'parametros_variables.php';

		  $query = "DELETE "."FROM ".$tabla." where ".$campos[0]." = '".$id."'";
		  
		  if(mysqli_query($link, $query)){
			echo "El Registro se elimino correctamente";
		}else{
			echo "No se pudo eliminar el registro";
		}

	echo '<h2><a href="index.php">Ir a inicio</a></h2>';
?>