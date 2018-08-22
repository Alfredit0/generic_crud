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
	<script>
		$(function () {
			$('form').on('submit', function (e) {
				openModal();
				e.preventDefault();
				$.ajax({
				type: 'post',
				url: 'insertar_variable.php',
				data: $('form').serialize(),
				success: function () {              					
					alert('Datos Guardados Correctamente');
					$('form')[0].reset();
					closeModal();
				}
				});
			});
		});
	</script>
	<div class="container-fluid">
		<h3>Alta de variable</h3>							
		<form class="col-md-6 col-lg-6">
			<?php
			for ($i=0; $i < $num_campos; $i++) { 
				echo '<div class="form-group col-md-6 col-lg-6">';
				echo '<label>'.$nombCampos[$i].'</label>';
				echo '<input name="parametro'.$i.'" placeholder="'.$nombCampos[$i].'" required="" class="form-control">';
				echo "</div>";
			}
			?>
			<button type="submit" class="btn btn-primary pull-right" ><span class="glyphicon glyphicon-floppy-disk"></span> Guardar</button>
		</form>	
		</div>
	<?php
		include 'common/footer.php';
	?>
</body>
</html>