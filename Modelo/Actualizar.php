<?php
// include Database connection file
include("Conn.php");

// check request
if(isset($_POST))
{
    //get values
    $id = $_POST['id'];
	$Nombre=strtoupper($_POST['Nombre']);
	$Apellido=strtoupper($_POST['Apellido']);
    $IdEntidad = ($_POST['IdEntidad']);
    $Correo = ($_POST['Correo']);

    $IdOrg=$_POST['IdOrg'];
	$IdActividad=$_POST['IdActividad'];
    $IdEnRenal = $_POST['IdEnRenal'];
    $IdEpatitisC = $_POST['IdEpatitisC'];
    $IdHemofilia=$_POST['IdHemofilia'];
	$IdArtritis=$_POST['IdArtritis'];
    $IdVH = $_POST['IdVH'];
    $IdCordinacion = $_POST['IdCordinacion'];


    // Updaste User details
    $query = "UPDATE CorreosMail SET Nombre='$Nombre', Apellido='$Apellido', IdEntidad = '$IdEntidad',
    Correo='$Correo', IdOrg='$IdOrg', IdActividad='$IdActividad', IdEnRenal='$IdEnRenal', IdEpatitisC='$IdEpatitisC',
    IdHemofilia='$IdHemofilia', IdArtritis='$IdArtritis', IdVH='$IdVH', IdCordinacion='$IdCordinacion'
    WHERE IdCorreo = '$id'";
    
    if (!$result = sqlsrv_query($conn, $query)) {
        exit(sqlsrv_errors($conn));
    }
 }