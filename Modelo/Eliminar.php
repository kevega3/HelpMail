<?php 
include("Conn.php");
    $id = base64_decode($_REQUEST['IdUser']); 
    $borrar = base64_decode($_REQUEST['borrar']);
?>


<script>
var id = "<?php echo $id;?>";
</script>
<?php 

	//$borrar_id =$_GET['borrar'];
    //if(filter_var($borrar_id, FILTER_VALIDATE_INT)=== 0 || !filter_var($borrar_id, FILTER_VALIDATE_INT) === false){
        
	$SQL ="UPDATE CorreosMail SET Eliminado = 1 WHERE IdCorreo = '$borrar'";
	$ejecutar = sqlsrv_query($conn, $SQL);
	if ($ejecutar) {
		echo "<script>alert('Se a cambiado el estado de este correo con exito')</script>";
        echo "<script>window.location.replace('../Vista/Templates/GenerateFilters.php?id='+ id)</script>";
        
	}
	else{
		echo "<script>alert('ERROR INTERNO,intente mas tarde')</script>";
        echo "<script>window.location.replace('../Vista/Templates/GenerateFilters.php?id='+ id)</script>";
	}

        
    //}



?>