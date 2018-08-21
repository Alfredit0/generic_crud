<?php
/*
	author: Benito Alfredo Reyes Hdz
	date:   06/12/2016
	git:	https://github.com/Alfredit0/
 */
require 'parametros.php';	

		$sql = "UPDATE ".$tabla." SET ";

		$i=0;
		foreach ($_REQUEST as $item => $value){
     		$sql=$sql.$campos[$i]."='".$value."'";
     			if ($i==0) {
     				$id=$value;
     			}
				if ($i<$num_campos-1) {
					$sql=$sql.",";
				}
				$i++;
		}		
		$sql=$sql." WHERE ".$campos[0]." = '".$id."'";			
	if(mysqli_query($link,$sql))
			$mensajeExito = "¡Gracias! Hemos recibido sus cambios.\n";	
		else
			$mensajeError = "Error. No se guardo el registro";	
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
        <div class="container-fluid" style="font-size: 12px; margin-top: 1em;">
			<div>
				<h3 class="text-success text-center">
					<span class="fa fa-check"></span>
					<?php echo $mensajeExito; ?>
				</h3>
			</div>
        </div>
    <?php
        include 'common/footer.php';
    ?>
    </body>
</html>