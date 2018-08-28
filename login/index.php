<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html lang="es_mx">

<head>
	<title>Particles Login Form Form Responsive Widget Template :: w3layouts</title>
	<!-- Meta-Tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta-Tags -->
	<!-- Stylesheets -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<!-- online fonts-->
	<link href="https://fonts.googleapis.com/css?family=Amiri:400,400i,700,700i" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="../js/loading.js"></script>
	<link href="../css/style_loading.css" rel='stylesheet' type='text/css' />

</head>

<body>
<script>
		$(function () {
			$('form').on('submit', function (e) {
				openModal();
				e.preventDefault();
				$.ajax({
				type: 'post',
				url: '../database_ops/acceder.php',
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
	<div id="fade"></div>
	<div id="modalLoad">
			<img id="loader" src="images/cargando.gif" />
	</div>
	<div id="myalert" class="alert">
		<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
		<p id="info">Indicates a dangerous or potentially negative action.<p>
	</div>
	<!--  particles  -->
	<div id="particles-js"></div>
	<!-- //particles -->
	<div class="w3ls-pos">
		<h1>Acceso - Sistema de Envío de Correos</h1>
		<div class="w3ls-login box">
			<!-- form starts here -->
			<form metod="post">
				<div class="agile-field-txt">
					<input type="email" name="email" placeholder="info@example.com" required="" />
				</div>
				<div class="agile-field-txt">
					<input type="password" name="password" placeholder="******" required="" id="myInput" />
				</div>
				<div class="w3ls-bot">
					<input type="submit" value="LOGIN">
				</div>
			</form>
		</div>
		<!-- //form ends here -->
	</div>
	<!-- scripts required  for particle effect -->
	<script src='js/particles.min.js'></script>
	<script src="js/index.js"></script>
	<!-- //scripts required for particle effect -->
</body>

</html>