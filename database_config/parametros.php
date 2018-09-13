<?php
/*
	author: Benito Alfredo Reyes Hdz
	date:   06/12/2016
	git:	https://github.com/Alfredit0/
 */
$campos=array("email",  "nombre",  "pais", "institucion","facultad","cargo","sexo", "tipoplantilla", "estatus", "fechaenvio");
$nombCampos=array("Email", "Nombre", "Pais", "Institución", "Facultad", "Cargo", "Sexo",   "NE", "Estatus", "Fecha Registro/Envío");
$num_campos=count($campos);
$tabla="contactos1";
$link = mysqli_connect('revista.unsis.edu.mx', 'adminrev', 'mysql2018','promocion_db')
        or die('No se pudo conectar: ' . mysql_error());

if (!$link->set_charset("utf8")) {
    printf("Error cargando el conjunto de caracteres utf8: %s\n", $link->error);
    exit();
}
?>