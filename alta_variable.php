<?php
/*
	author: Benito Alfredo Reyes Hdz
	date:   06/12/2016
	git:	https://github.com/Alfredit0/
 */
 
require 'parametros_variables.php';
?>

<!DOCTYPE html>
<html>
<?php
	include 'common/head.php';
?>
<body>	
	<?php
		include 'common/header.php';
	?>
	<div class="container-fluid">
		<div class="col-md-6 col-lg-6">
			<div class="col-md-3 col-lg-3">
            	<h4><a href="variables.php" class="text-primary"><span class="glyphicon glyphicon-arrow-left"></span> Regresar</a></h4>
			</div>
			<div class="col-md-4 col-lg-4">
				<h3>Alta de variable</h3>
			</div>
			<div class="col-md-4 col-lg-4">
				<h4><a href="index.php" class="text-primary"><span class="glyphicon glyphicon-home"></span>Inicio</a></h4>
			</div>						
		</div>
		<form action="insertar_variable.php" method="post" class="col-md-12 col-lg-12">
			<?php
			for ($i=0; $i < $num_campos; $i++) { 
				echo '<div class="form-group col-md-6 col-lg-6">';
				echo '<label>'.$nombCampos[$i].'</label>';
				echo '<input name="parametro'.$i.'" placeholder="'.$nombCampos[$i].'" required="" class="form-control">';
				echo "</div>";
			}
			?>
			<button type="submit" class="btn btn-success pull-right" ><span class="glyphicon glyphicon-floppy-disk"></span> Guardar</button>
		</form>	
		</div>
	<?php
		include 'common/footer.php';
	?>
</body>
</html>