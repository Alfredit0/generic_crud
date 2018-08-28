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
<body style="background-color: #d2d2d263;">    
        <?php
            include 'common/header.php';
        ?>
        <script>
            function iniciarEnvios() {
                    openModal();	
                    showSuccessAlert('Ha comenzado el envio de correos');
                    $.ajax({
                    type: 'post',
                    url: 'http://localhost:8080/MailApp/SendMails',                                        
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
                }
        </script>
        <div class="container-fluid" style="font-size: 12px; margin-top: 1em;">
        <div class="header-w3l">
            <!-- <h1></h1> -->
        </div>
        <!--//header-->
        
            <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
            <!-- Style-CSS -->
            <link rel="stylesheet" href="css/font-awesome.css">
            <!-- Font-Awesome-Icons-CSS -->
            <div class="sub-main-w3">
                <h2>Actividades</h2>
                <div class="right-w3l"> 
                    <input type="button" value="Añadir contactos" onclick="location.href = 'alta.php';">                            
                </div>                        
                <div class="right-w3l">                    
                    <input type="button" value="Enviar correos" onclick="iniciarEnvios()">
                </div>	
                <div class="right-w3l">                    
                    <input type="button" value="Editar plantilla Invitación individual" onclick="location.href = 'editor.php'">
                </div>	 
                <div class="right-w3l">                    
                    <input type="button" value="Editar plantilla Invitación a Directivo" onclick="location.href = 'editor.php'">
                </div>	                               
                <div class="right-w3l">   
                    <input type="button" value="Cargar contactos desde excel" onclick="location.href = 'subirexcel.jsp';">
                </div>
                <!--//main-->
            
            </div>
        </div>
    <?php
        include 'common/footer.php';
    ?>
    </body>
</html>
