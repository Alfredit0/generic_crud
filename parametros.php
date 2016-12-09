<?php
/*
	author: Benito Alfredo Reyes Hdz
	date:   06/12/2016
	git:	https://github.com/Alfredit0/
 */
 
$num_campos=4;
$campos=array("ID", "Nombre", "ApellidoPaterno", "ApellidoMaterno");
$nombCampos=array("ID", "Nombre", "Apellido Paterno", "Apellido Materno");
$tabla="prueba";

$link = mysqli_connect('localhost', 'root', '','prueba')
        or die('No se pudo conectar: ' . mysql_error());

if (!$link->set_charset("utf8")) {
    printf("Error cargando el conjunto de caracteres utf8: %s\n", $link->error);
    exit();
}
?>