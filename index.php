<?php
/*
	author: Benito Alfredo Reyes Hdz
	date:   06/12/2016
	git:	https://github.com/Alfredit0/
 */
 
require 'parametros.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body>	
		<h2>Alta</h2>
		<form action="insertar.php" method="post">
			<?php
			for ($i=0; $i < $num_campos; $i++) { 
				echo '<label>'.$nombCampos[$i].'</label><input name="parametro'.$i.'" placeholder="'.$nombCampos[$i].'">';
				echo "<br>\n";
			}
			?>
			<button type="submit">Enviar</button>
		</form>	
</body>
</html>