<?php 
include('Conn.php');
$id= $_POST['idsoli'];
$Test= utf8_decode(html_entity_decode($_POST['Test']));
$Correo= $_POST['correo'];

include ('Correos/CorreoNegar.php');
if($EstadoEnvio == 1){
    $SQL= "UPDATE Solicitud SET Estado=3,DescripcionNega='$Test' WHERE IdSolicitud = '$id'";
    if (!$result = sqlsrv_query($conn, $SQL)) {
        exit(sqlsrv_errors($conn));
    }else{
        echo "1 registro exitoso";
    }
}

?>