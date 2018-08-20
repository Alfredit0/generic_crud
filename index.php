<?php
/*
	author: Benito Alfredo Reyes Hdz
	date:   06/12/2016
	git:	https://github.com/Alfredit0/
 */
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
        <div class="header-w3l">
            <h1>
                Sistema de Envío de Correos	Electrónicos (SECE)		
            </h1>
        </div>
        <!--//header-->
        <div class="main-content-agile">
            <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
            <!-- Style-CSS -->
            <link rel="stylesheet" href="css/font-awesome.css">
            <!-- Font-Awesome-Icons-CSS -->
            <div class="sub-main-w3">
                <h2>Actividades</h2>
                <div class="right-w3l"> 
                    <input type="button" value="Añadir contactos" onclick="location.href = 'add.html';">                            
                </div>                        
                <div class="right-w3l">
                    <p id="statusEnvio" class="center-block"></p>
                    <input type="button" value="Enviar correos">
                </div>	
                <div class="right-w3l">   
                    <input type="button" value="Cargar contactos desde excel" onclick="location.href = 'subirexcel.jsp';">
                </div>
                <!--//main-->
                <!--footer-->
                <div class="footer">
                    <p>&copy; 2018 Alfredo Reyes
                    </p>
                </div>
            </div>
        </div>
        </div>
    <?php
        include 'common/footer.php';
    ?>
    </body>
</html>