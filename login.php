<!DOCTYPE html>
<html lang="en">
<?php
include 'common/head.php';
?>
<body>
<div class="container-fluid" style="font-size: 12px; margin-top: 1em;">
        <div class="header-w3l">
           <h1>Login</h1>
        </div>
        <!--//header-->
        
            <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
            <!-- Style-CSS -->
            <link rel="stylesheet" href="css/font-awesome.css">
            <!-- Font-Awesome-Icons-CSS -->
            <div class="sub-main-w3">
				<label>Usuario</label>
                 <div class="pom-agile">
					<span class="fa fa-user-o" aria-hidden="true"></span>
					<input placeholder="Username" id="user" name="user" class="user" type="text" required="">
				</div>
				<label>Contrase&ntilde;a</label>
                <div class="pom-agile">
					<span class="fa fa-key" aria-hidden="true"></span>
					<input placeholder="Password" id="pass" name="pass" class="pass" type="password" required="">
				</div>
                <div class="right-w3l"> 
                    
                    <input type="button" value="Acceder" onclick="location.href = 'alta.php';">                            
                </div>                                    
            </div>
        </div>
    <?php
        include 'common/footer.php';
    ?>
</body>
</html>