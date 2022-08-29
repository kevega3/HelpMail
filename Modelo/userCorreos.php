<?php 
function ObtenerCorreoId($id){
    $sentencia = "SELECT * FROM CorreosMail WHERE IdCorreo = $id";
    $data = $this->Ejecutar($sentencia,0);
    return $data;
}
?>