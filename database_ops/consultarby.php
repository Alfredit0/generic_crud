<?php
/*
	author: Benito Alfredo Reyes Hdz
	date:   06/12/2016
	git:	https://github.com/Alfredit0/
 */
try {
$nombrec=$_POST['nombrecampo'];
require '../database_config/parametros.php';


$sql = "SELECT DISTINCT ".$nombrec." FROM contactos1";
$result = mysqli_query($link,$sql);

$rows = array();
while($row = mysqli_fetch_array($result))
{
	$rows[] = $row[0];
}
	   $status = "success";	
	   $message = $rows;

echo json_encode(
		array(
			'status' => $status,
			'message' => $message
	));	
} catch (Exception $e) {
    $status = "error";	
	$message = $e->getMessage();
	
	echo json_encode(
		array(
			'status' => $status,
			'message' => $message
		));	
}
?>