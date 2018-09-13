<?php
/*
	author: Benito Alfredo Reyes Hdz
	date:   06/12/2016
	git:	https://github.com/Alfredit0/
 */
 
require 'database_config/parametros.php';
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
			$("#selectCampo")
			.change(function () {
				if($("#selectCampo").val()!= 'undefined'){
					openModal();
					$.ajax({
					type: 'post',
					url: 'database_ops/consultarby.php',
					data:{
						nombrecampo : $("#selectCampo").val() // 
					},
					success: function (response) { 					  
						var r = JSON.parse(response);					
						if(r.status=="success"){
							$('#selectValor').find('option').remove();
							$('#selectValor').append('<option value="undefined"> Seleccione</option>');
							$.each(r.message, function( index, value ) {
								$('#selectValor').append('<option value="' + value + '">' + value + '</option>')
							});												
						}else{
							showErrorAlert(r.message);
						}          								
						closeModal();
					}
					});
				}
				else{
					$('#selectValor').find('option').remove();
					$('#selectValor').append('<option value="undefined"> Seleccione primero un campo</option>');
				}
			})
			.change();

		});
	</script>	
	<script>
	function actualizarEstatus() {
		if($("#selectValor").val()!= 'undefined'){
				openModal();				
				$.ajax({
				type: 'post',
				url: 'database_ops/actualizar_estatus.php',
				data: {
						nombrecampo : $("#selectCampo").val(), //
						valorcampo : $("#selectValor").val() //
					},
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
			}else{
				showErrorAlert('Seleccione los parámetros primero');
			}
	}
	</script>
	<div class="container-fluid">
		<h3>Actualizar</h3>
		<div class="container-fluid bg-light ">
			<div style="margin-top: 20px; margin-bottom:25px;">
				<h4> Establecer en: </h4>
				<label><input type="radio" class="radio-inline" name="radios" value=""><span class="outside"><span class="inside"></span></span>NO ENVIADO</label>
				<label><input type="radio" class="radio-inline" name="radios" value=""><span class="outside"><span class="inside"></span></span>ENVIADO</label>
			</div>
			<div class="row align-items-center justify-content-center">
				<div class="col-md-2 pt-3">
					<div class="form-group ">
						<select id="selectCampo" class="form-control">
							<option selected="" value='undefined'>Selecciona Campo</option>
							<?php
							for ($i=0; $i < $num_campos; $i++) { 
								echo '<option value="'.$campos[$i].'">';
								echo $nombCampos[$i];
								echo "</option>";
							}
							?>
						</select>
					</div>
				</div>
				<div class="col-md-2 pt-3">
					<div class="form-group">
						<select id="selectValor" class="form-control">
							<option selected="">Selecciona primero un campo</option>
						</select>
					</div>
				</div>
				<div class="col-md-2">
					<button type="button" class="btn btn-primary btn-block" onclick="actualizarEstatus()">Actualizar</button>
				</div>
			</div>
		</div>		
	</div>
	<?php
        include 'common/footer.php';
    ?>
</body>
</html>