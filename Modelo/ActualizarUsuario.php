<?php

include("Conn.php");

    $id = $_POST['id'];
    
    $ApellidoSS = $_POST['ApellidoSS'];
    $CCS = $_POST['CCS'];
    $Rolss = $_POST['Rolss'];
    $CorreoSS = $_POST['CorreoSS'];
   
    $Nombres = $_POST['NombresS'];
    $ClaveSS  = $_POST['ClaveSS'];
    if( $ClaveSS == '' ||  $ClaveSS  == null){
        $query = "UPDATE UsuarioHelpMail SET Nombres='$Nombres', Apellido='$ApellidoSS',CC = '$CCS', Rol = '$Rolss',Correo = '$CorreoSS' WHERE IdUser = $id";
    }else{
        $query = "UPDATE UsuarioHelpMail SET Nombres='$Nombres', Apellido='$ApellidoSS',CC = '$CCS', Clave = (SELECT dbo.fun_encriptarLogin('$ClaveSS')), Rol = '$Rolss',Correo = '$CorreoSS' WHERE IdUser = $id";
    }

    
    
    
    if (!$result = sqlsrv_query($conn, $query)) {
        exit(sqlsrv_errors($conn));
    }
// }
?>