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
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css" rel="stylesheet">
    
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable( {
                responsive: {
                    details: {
                        display: $.fn.dataTable.Responsive.display.modal( {
                            header: function ( row ) {
                                var data = row.data();
                                return 'Details for '+data[0]+' '+data[1];
                            }
                        } ),
                        renderer: $.fn.dataTable.Responsive.renderer.tableAll( {
                            tableClass: 'table'
                        } )
                    }
                }
            } );
        } );
    </script>    
</head>
<body>
    <div class="container">
        <div class="row">		        
            <div class="col-md-12">
            <h4>Contactos</h4>
            <div class="table-responsive">                
            <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
        <thead>
            <tr>
                <?php
                		for ($i=0; $i < $num_campos; $i++) { 
			echo '<th>'.$nombCampos[$i].'</th>';
			}
                ?>
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
                echo "</tr>\n";
                $j++;
                }
            ?>
        </tbody>
    </table>
            </div>
        </div>
    </div>
    </body>
</html>