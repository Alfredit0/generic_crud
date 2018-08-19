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
        <div class="container-fluid" style="font-size: 12px; margin-top: 1em;">
        <div class="row">		        
            <div class="col-md-12">
            <h3>Variables de correo</h3>
            <h4 ><a href="alta_variable.php" class="text-primary"><span class="glyphicon glyphicon-plus"></span> Dar de alta una variable</a></h4>
            <div class="table-responsive">                
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <?php
                                for ($i=0; $i < $num_campos; $i++) { 
                                    echo '<th>'.$nombCampos[$i].'</th>';
                                }
                            ?>
                            <th>Editar</th>                    
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

                                echo '<td><form name="form'.$j.'" method="post" action="editar_variable.php" >';
                                echo '<input type="hidden" name="id" value="'.$row [$campos[0]].'" />';
                                echo '<button type="submit" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></button>';
                                echo '</form>';
                                echo '</td>';                                                
                                //echo '<td><button class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></button></td>';
                                //echo '<td><button class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></button></td>';
                                echo "</tr>\n";
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