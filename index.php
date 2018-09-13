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

        <div class="container-fluid" style="margin-top: 1em;">        
            <link rel="stylesheet" href="login/css/style.css" type="text/css" media="all" />                        
            <div class="col-md-6 col-lg-6" style="float:none; margin:auto;">
                <h1>Actividades</h1>            
                <div class="w3ls-login box">
                        <div class="w3ls-bot">                        
                            <input type="button" value="Añadir contactos" onclick="location.href = 'alta.php';" >                            
                            
                            <input type="button" value="Enviar correos" onclick="iniciarEnvios()" >

                            <input title="Permite reestablecer el estatus a NO_ENVIADO" type="button" value="Habilitar correos" onclick="location.href = 'habilitar.php'">

                            <input type="button" value="Editar plantilla Invitación individual" onclick="location.href = 'editor.php'">

                            <input type="button" value="Editar plantilla Invitación a Directivo" onclick="location.href = 'editor.php'">
            
                            <input type="button" value="Cargar contactos desde excel" onclick="location.href = 'subirexcel.php';">
                        </div>
                </div>                                
            </div>            
        </div>
    <?php
        include 'common/footer.php';
    ?>    
	<script src="login/js/index.js"></script>
    </body>
</html>
