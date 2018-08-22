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
<?php
include 'common/head.php';
?>
<style>
#footer{
    position:relative;
}
</style>
<body>    
        <?php
            include 'common/header.php';
        ?>
	<script>
		function eliminarContacto(id) {
				openModal();				
				$.ajax({
				type: 'post',
				url: 'eliminar.php',
				data: 'id='+id,
				success: function (response) { 					  
					var r = JSON.parse(response);					
					if(r.status=="success"){
						alert('Datos Guardados Correctamente');
					}else{
						alert('Ha ocurrido un error. Verifique los datos. O intente nuevamente');
					}          								
					closeModal();
				}
				});
			}
	</script>
        
        <div class="container-fluid" style="font-size: 12px; margin-top: 1em;">
        <div class="row">		        
            <div class="col-md-12">
            <h3>Contactos</h3>
            <h4 ><a href="alta.php" class="text-primary"><span class="glyphicon glyphicon-plus"></span> Dar de alta un contacto</a></h4>           
            <div class="table-responsive">                
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <?php
                                for ($i=0; $i < $num_campos; $i++) { 
                                    echo '<th>'.$nombCampos[$i].'</th>';
                                }
                            ?>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php                
                        $query = "SELECT *"."FROM ".$tabla;
                        $j=1;
                        $result = mysqli_query($link, $query);
                            while($row = mysqli_fetch_array($result))
                            {		
                                echo "<tr>";  			
                                for ($i=0; $i < $num_campos; $i++) { 
                                    echo '<td>'.$row [$campos[$i]].'</td>';
                                }
                                echo '<td><form name="form'.$j.'" method="post" action="editar.php" >';
                                echo '<input type="hidden" name="id" value="'.$row [$campos[0]].'" />';
                                echo '<button type="submit" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></button>';
                                echo '</form>';
                                echo '</td>';
                    
                                echo '<td>';                                
                                echo '<button onclick="confirmar(\''.$row [$campos[0]].'\')" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></button>';                            
                                echo '</td>';
                                echo "</tr>";
                                $j++;
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
                        </div>
                        </div>
    <?php
        include 'common/footer.php';
    ?>

		            <script type="text/javascript">
                    function confirmar(id) {
                        console.log(id)
                        //Ingresamos un mensaje a mostrar
                        var mensaje = confirm("¿Está seguro que desea eliminar el registro?");
                        //Detectamos si el usuario acepto el mensaje
                        if (mensaje) {
                        alert("El registro será eliminado");
                        eliminarContacto(id);
                        }
                        //Detectamos si el usuario denegó el mensaje
                        else {
                            alert("¡Haz cancelado la eliminación");
                            return false;
                        }
                    }
                    </script>    
    </body>
</html>