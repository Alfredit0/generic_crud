<?php 
/*session_start();
  if (!isset($_SESSION["att"]))
   {
      header("location: login.php");
   }*/
?>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link href="common/header_style.css" rel="stylesheet">
<!-- Navigation -->
<div class="fixed-top">
  <header class="topbar">
      <div class="container">
        <div class="row">
          <!-- social icon-->
          <div class="col-sm-12">
            <p style="padding-top: 0.8em; font-size: 1.2em;">Sistema de Envío de Correos Electrónicos (SECE)</p>
          </div>
        </div>
      </div>
  </header>
  <div id="fade"></div>
  <div id="modalLoad">
        <img id="loader" src="images/cargando.gif" />
  </div>
  <div id="myalert" class="alert">
      <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
      <p id="info">Indicates a dangerous or potentially negative action.<p>
  </div>
</div>    