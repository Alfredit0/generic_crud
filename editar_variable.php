<?php
/*
	author: Benito Alfredo Reyes Hdz
	date:   06/12/2016
	git:	https://github.com/Alfredit0/
 */
 
$id=$_POST['id'];
require 'database_config/parametros_variables.php';
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
				url: 'database_ops/actualizar_variable.php',
				data: $('form').serialize(),
				success: function (response) { 					  
					var r = JSON.parse(response);					
					if(r.status=="success"){
						showSuccessAlert(r.message);
					}else{
						showErrorAlert(r.message);
					}          								
					closeModal();
				}
				});
			});
		});
	</script>	
	<div class="container-fluid">
		<div>
			<h3>Actualizar</h3>
			<form action="actualizar_variable.php" method="post" class="col-md-12 col-lg-12">
			<?php
			$query = "SELECT *"."FROM ".$tabla." where ".$campos[0]." = '".$id."'";
			
			$result = mysqli_query($link, $query);
			if($row = mysqli_fetch_array($result)){
				$i=0;
				echo '<div class="form-group col-md-6 col-lg-6">';
				echo '<label>'.$nombCampos[$i].'</label><input name="parametro'.$i.'" placeholder="'.$nombCampos[$i].'" value="'.$row [$campos[$i]].'" required="" readonly="readonly" class="form-control">';
				echo "</div>";
				for ($i=$i+1; $i < $num_campos; $i++) { 
					echo '<div class="form-group col-md-6 col-lg-6">';
					echo '<label>'.$nombCampos[$i].'</label>';
					echo '<input name="parametro'.$i.'" placeholder="'.$nombCampos[$i].'" value="'.$row [$campos[$i]].'" required="" class="form-control">';
					echo "</div>";
				}
				echo '<button type="submit" class="btn btn-primary pull-right">Guardar cambios</button>';
			}else{
				echo "No se pudo obtener el registro";
			}
				?>
			</form>	
		</div>
	</div>
	<?php
        include 'common/footer.php';
    ?>
</body>
</html>