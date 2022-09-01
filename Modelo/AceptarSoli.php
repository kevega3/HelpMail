<?php 
include('Conn.php');
$id= $_POST['idsoli'];
$Correo= $_POST['correo'];

include ('Correos/CorreoAceptar.php');
if($EstadoEnvio == 1){
    $SQL= "UPDATE Solicitud SET Estado=2,DescripcionNega='N/A' WHERE IdSolicitud = '$id'";
    if (!$result = sqlsrv_query($conn, $SQL)) {
        exit(sqlsrv_errors($conn));
    }else{
        echo "1 registro exitoso";
    }
}

?>