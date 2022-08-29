<?php
// $serverName="MKBOG016\MKBOG016";
// $ConnectionInfo = array("Database"=>"DWH","UID"=>"sa","PWD"=>"Cuent42021$*");

// $conn=sqlsrv_connect($serverName, $ConnectionInfo);

// if ($conn) {
// }
// else{
//     echo "<script>alert('Error en conexion BD, intentalo mas tarde')</script>";
//     echo "<script>window.location.replace('../index.php')</script>";
//     exit();
// }

$serverName = "MKBOG016\MKBOG016"; //serverName\instanceName
$connectionInfo = array( "Database"=>"HelpMail", "UID"=>"sa", "PWD"=>"Cuent42021$*");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
}else{
     echo "<script>alert('Errores Internos, lo sentimos ...')</script>";
	 echo "<script>window.location.replace('../../index.php')</script>";
     //die( print_r( sqlsrv_errors(), true));
}

$cadenaCnx="sqlsrv:server=MKBOG016\MKBOG016;database=HelpMail";
			$user="sa";
			$pass="Cuent42021$*";

			$cnx= new PDO($cadenaCnx,$user,$pass);

?>
