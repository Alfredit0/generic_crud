<?php
$num_campos=8;
$campos=array("ID", "Nombre", "ApellidoPaterno", "ApellidoMaterno", "FechaNacimiento", "DepartamentoEmpresa", "FechaAdscripcion","Salario");
$nombCampos=array("ID", "Nombre", "Apellido Paterno", "Apellido Materno", "Fecha Nacimiento", "Departamento Empresa", "Fecha Adscripcion","Salario");
$tabla="trabajadores";

$link = mysqli_connect('localhost', 'root', 'root','crud')
        or die('No se pudo conectar: ' . mysql_error());

if (!$link->set_charset("utf8")) {
    printf("Error cargando el conjunto de caracteres utf8: %s\n", $link->error);
    exit();
}
?>