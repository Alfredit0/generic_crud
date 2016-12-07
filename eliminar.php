<?php
$id=$_POST['id'];
require 'parametros.php';

		  $query = "DELETE "."FROM ".$tabla." where ".$campos[0]." = '".$id."'";
		  
		  if(mysqli_query($link, $query)){
			echo "El Registro se elimino correctamente";
		}else{
			echo "No se pudo eliminar el registro";
		}
?>