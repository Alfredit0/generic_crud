<?php
try {
    $contentP = $_POST['texto_plantilla'];
    $my_file = '/opt/mail_files/invitacion_individual.html';
    $handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
    fwrite($handle, $contentP);
    $status = "success";
    $message = "La plantilla se ha guardado correctamente";	
} catch (Exception $e) {
    $status = "error";	
    $message = $e->getMessage();
}
echo json_encode(
    array(
        'status' => $status,
        'message' => $message
    ));	

?>