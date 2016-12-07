<?php
/*
	author: Benito Alfredo Reyes Hdz
	date:   06/12/2016
	git:	https://github.com/Alfredit0/
 */
 
$id=$_POST['id'];
require 'parametros.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body>	
		<h2>Actualizar</h2>
		<form action="actualizar.php" method="post">
		<?php
		  $query = "SELECT *"."FROM ".$tabla." where ".$campos[0]." = '".$id."'";
		  
		  $result = mysqli_query($link, $query);
		  if($row = mysqli_fetch_array($result)){
			$i=0;
			echo '<label>'.$nombCampos[$i].'</label><input name="parametro'.$i.'" placeholder="'.$nombCampos[$i].'" value="'.$row [$campos[$i]].'" required="" readonly="readonly">';
				echo "<br>\n";
			for ($i=$i+1; $i < $num_campos; $i++) { 
				echo '<label>'.$nombCampos[$i].'</label><input name="parametro'.$i.'" placeholder="'.$nombCampos[$i].'" value="'.$row [$campos[$i]].'" required="">';
				echo "<br>\n";
			}
			echo '<button type="submit">Guardar cambios</button>';
		}else{
			echo "No se pudo obtener el registro";
		}
			?>
		</form>	
</body>
</html>