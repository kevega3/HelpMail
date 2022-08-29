<?php 
    include('Conn.php');

    $Rolss="Empleado DS";
    $NombreSUC=filter_var($_GET['Nombre'], FILTER_SANITIZE_STRING);
	$Nombre = preg_replace('/[@\.\;\"\´]+/',"*",$NombreSUC);
        
    $ApellidoSUC=filter_var($_GET['Apellido'], FILTER_SANITIZE_STRING);
	$Apellido = preg_replace('/[@\.\;\"\´]+/',"*",$ApellidoSUC);
        
    $RolSUC=filter_var($_GET['Rol'], FILTER_SANITIZE_STRING);
	$Rol = preg_replace('/[@\.\;\"\´]+/',"*",$RolSUC);
    
    

    $CCSUC=filter_var($_GET['CC'], FILTER_SANITIZE_STRING);
	$CC = preg_replace('/[@\.\;\"\´]+/',"*",$CCSUC);
        
    $ClaveSUC=filter_var($_GET['Clave'], FILTER_SANITIZE_STRING);
	$Clave = preg_replace('/[@\.\;\"\´]+/',"*",$ClaveSUC);
        
    $Correo=filter_var($_GET['Correo'], FILTER_SANITIZE_STRING);

   
     $SQL = "INSERT INTO UsuarioHelpMail VALUES ('$Nombre','$Apellido','$CC',(SELECT dbo.fun_encriptarLogin('$Clave')),'$Rol','$Correo')";

     if (!$result = sqlsrv_query($conn, $SQL)) {
        exit(sqlsrv_errors($conn));
    }
    echo "1 registro exitoso";
    
    ?>




