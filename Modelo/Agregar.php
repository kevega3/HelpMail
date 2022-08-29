<?php 
include 'Conn.php';
$Nombres = strtoupper($_POST['NombresAD']);
$Apellidos = strtoupper($_POST['ApellidosAD']);
$Entidads=  $_POST['EntidadsAD'];
$Organizacions = $_POST['OrganizacionsAD'];

$TipoActividads= $_POST['TipoActividadsAD'];

$Correos = $_POST['CorreosAD'];
$ERenals= $_POST['ERenalsAD'];
$Epatitiss= $_POST['EpatitissAD'];

$EHemofilia= $_POST['EHemofiliasAD'];
$EArtritis= $_POST['EArtritissAD'];
$VH= $_POST['VHsAD'];

$Cancer=$_POST['CancersAD'];
$Coordinacion= $_POST['CoordinacionsAD'];




$Estado=0;
$INSERT= "INSERT INTO CorreosMail VALUES ('$Nombres','$Apellidos',$Entidads,'$Correos','$Organizacions','$TipoActividads','$Estado','$ERenals','$Epatitiss','$EHemofilia','$EArtritis','$VH','$Cancer','$Coordinacion')";
if (!$result = sqlsrv_query($conn, $INSERT)) {
    exit(sqlsrv_errors($conn));
}
echo "1 registro exitoso";




// $Nombre = $_REQUEST['Nombre'];
// $Nombre = filter_var($Nombre, FILTER_SANITIZE_STRING);

// $Apellido = $_REQUEST['Apellido'];
// $Apellido = filter_var($Apellido, FILTER_SANITIZE_STRING);

// $IdEntidad = $_REQUEST['Entidad'];
// $IdEntidad = filter_var($IdEntidad, FILTER_SANITIZE_STRING);

// $IdOrg = $_REQUEST['Organizacion'];
// $IdOrg = filter_var($IdOrg, FILTER_SANITIZE_STRING);

// $IdActividad = $_REQUEST['TipoActividad'];
// $IdActividad = filter_var($IdActividad, FILTER_SANITIZE_STRING);

// $Estado = $_REQUEST['Estado'];
// $Estado = filter_var($Estado, FILTER_SANITIZE_STRING);

// $Correo = $_REQUEST['Correo'];
// $Correo = filter_var($Correo, FILTER_SANITIZE_STRING);

// $Eliminado = 0;


// $myparams['Nombre'] = $Nombre;
// $myparams['Apellido'] = $Apellido;
// $myparams['IdEntidad'] = $IdEntidad;
// $myparams['Correo'] = $Correo;
// $myparams['IdOrg'] =$IdOrg;
// $myparams['IdActividad'] = $IdActividad;
// $myparams['Eliminado'] = $Eliminado;

// $procedure_params = array(
//     array(&$myparams['Nombre'], SQLSRV_PARAM_IN),
//     array(&$myparams['Apellido'], SQLSRV_PARAM_IN),
//     array(&$myparams['IdEntidad'], SQLSRV_PARAM_IN),
//     array(&$myparams['Correo'], SQLSRV_PARAM_IN),
//     array(&$myparams['IdOrg'], SQLSRV_PARAM_IN),
//     array(&$myparams['IdActividad'], SQLSRV_PARAM_IN),
//     array(&$myparams['Eliminado'], SQLSRV_PARAM_IN),
//     );


// $Agregar = "EXEC ADD_MAIL @Nombre=?,@Apellido=?,@IdEntidad=?,@Correo=?,@IdOrg=?,@IdActividad=?,@Eliminado=?";
// $stmt= sqlsrv_prepare($conn, $Agregar, $procedure_params );


// if( !$stmt ) {
//     die( print_r( sqlsrv_errors(), true));
//     }
//     if(sqlsrv_execute($stmt)){
//         while($res = sqlsrv_next_result($stmt)){
//         }
        
//     }else{
//     die( print_r( sqlsrv_errors(), true));
//     echo "<script>alert('Correo Agregado Exitosamente !')</script>";
//     echo "<script>window.location.replace('../Vista/Templates/inicio.php?)</script>";
//     }
?>