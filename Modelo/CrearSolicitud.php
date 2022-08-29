<?php 
    include ('Conn.php');
    $id =$_POST['id'];
    $DescripcionCorreo = utf8_decode(html_entity_decode($_POST['Test']));
    
    $ContenidoCorreo = utf8_decode(htmlentities($_POST['ContenidoCorreo']));
    $FechaEnviar =$_POST['FechaEnvio'];
    $IdCorreos = $_POST['IdCorreos'];
    $Number = $_POST['Number'];
    $Asunto = $_POST['Asunto'];
    $Fecha2=strftime('%d-%m-%Y %H:%M:%S', strtotime($FechaEnviar));
    $Estado = 1;
    $Fecha=date_default_timezone_set('America/Bogota'); 
    $fechaHoy = date('j-n-Y'). " " .date('g:i:s A');
    $DescripcionNega = "N/A";
    include ('Correos/CorreoSolicitud.php');
    if($EstadoEnvio == "1"){
    $SQL= "INSERT INTO Solicitud VALUES ('$id','$ContenidoCorreo','$IdCorreos','$DescripcionCorreo','$fechaHoy','$Fecha2','$Estado','$Number','$Asunto','$DescripcionNega')";
    if (!$result = sqlsrv_query($conn, $SQL)) {
        //exit(sqlsrv_errors($conn));
        echo "<script>alert('Error interno lo sentimos, contactese con el Administrador')</script>";
        echo "<script>window.location='../../index.php'</script>";
    }else{
        echo "1 registro exitoso";
    }
    
    }else{

  
    }
?>