<?php
/*
	author: Benito Alfredo Reyes Hdz
	date:   06/12/2016
	git:	https://github.com/Alfredit0/
 */
$nombCampos=array("Id Variable", "Valor");
$campos=array("idvariable", "valorvariable");
$num_campos=count($campos);
//$tabla="contactos1";
$tabla="variables_invitacion";
$link = mysqli_connect('revista.unsis.edu.mx', 'adminrev', 'mysql2018','promocion_db')
        or die('No se pudo conectar: ' . mysql_error());

if (!$link->set_charset("utf8")) {
    printf("Error cargando el conjunto de caracteres utf8: %s\n", $link->error);
    exit();
}
?>