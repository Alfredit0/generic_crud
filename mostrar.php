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
	<meta charset="UTF-8"> 
	<title>CRUD</title>
	<style>
	table {
	    font-family: arial, sans-serif;
	    border-collapse: collapse;
	    width: 100%;
	}

	td, th {
	    border: 1px solid #dddddd;
	    text-align: left;
	    padding: 8px;
	}

	tr:nth-child(even) {
	    background-color: #dddddd;
	}
	</style>	
</head>
<body>	
		<h2>Registros</h2>
		<table>
		<?php
		echo "<tr>";
		for ($i=0; $i < $num_campos; $i++) { 
			echo '<th>'.$nombCampos[$i].'</th>';
			}
		echo '<th>Editar</th>';
		echo '<th>Eliminar</th>';

		echo "</tr>";

		  $query = "SELECT *"."FROM ".$tabla;
		  $j=1;
		  $result = mysqli_query($link, $query);
		    while($row = mysqli_fetch_array($result))
  			{		
			echo "<tr>";  			
			for ($i=0; $i < $num_campos; $i++) { 
				echo '<td>'.$row [$campos[$i]].'</td>';
			}
		echo '<th><form name="form'.$j.'" method="post" action="editar.php" >';
      	echo '<input type="hidden" name="id" value="'.$row [$campos[0]].'" />';
      	echo '<input type="submit" value="Editar" />';
		echo '</form>';
		echo '</th>';

		echo '<th><form name="form'.$j.'" method="post" action="eliminar.php">';
      	echo '<input type="hidden" name="id" value="'.$row [$campos[0]].'" />';
      	echo '<input type="submit" onclick="return confirmar()" value="Eliminar" />';
		echo '</form>';
		echo '</th>';

		echo "<tr>\n";
		$j++;
		}
		?>
		</table>

		            <script type="text/javascript">
                    function confirmar() {
                    //Ingresamos un mensaje a mostrar
                    var mensaje = confirm("¿Está seguro que desea eliminar el registro?");
                    //Detectamos si el usuario acepto el mensaje
                    if (mensaje) {
                    alert("El registro será eliminado");
                    }
                    //Detectamos si el usuario denegó el mensaje
                    else {
                    alert("¡Haz cancelado la eliminación");
                  return false;                    }
                    }
                    </script>
</body>
</html>