<?php
include('Modelo/Conn.php');
$html = "";


if($_POST["elegido"]==1){
    $SQL = "SELECT * FROM Organizacion WHERE IdEntidad = 1";

    $res=sqlsrv_query($conn,$SQL);
    while ($row=sqlsrv_fetch_array($res)) { 
        
        // $html .= '<option value="'.$row['id_category'].'">'.$row['name'].'</option>';
        $html .= '<option value="'.$row['IdOrg'].'">'.$row['NombreOrg'].'</option>';
    }
     
}
if($_POST["elegido"]==2){
    $SQL = "SELECT * FROM Organizacion WHERE IdEntidad = 2";

    $res=sqlsrv_query($conn,$SQL);
    while ($row=sqlsrv_fetch_array($res)) { 
        
        // $html .= '<option value="'.$row['id_category'].'">'.$row['name'].'</option>';
        $html .= '<option value="'.$row['IdOrg'].'">'.$row['NombreOrg'].'</option>';
    }
}
if($_POST["elegido"]==3){
    $SQL = "SELECT * FROM Organizacion WHERE IdEntidad = 3";

    $res=sqlsrv_query($conn,$SQL);
    while ($row=sqlsrv_fetch_array($res)) { 
        
        // $html .= '<option value="'.$row['id_category'].'">'.$row['name'].'</option>';
        $html .= '<option value="'.$row['IdOrg'].'">'.$row['NombreOrg'].'</option>';
    }
}
if($_POST["elegido"]==4){
    $SQL = "SELECT * FROM Organizacion WHERE IdEntidad = 4";

    $res=sqlsrv_query($conn,$SQL);
    while ($row=sqlsrv_fetch_array($res)) { 
        
        // $html .= '<option value="'.$row['id_category'].'">'.$row['name'].'</option>';
        $html .= '<option value="'.$row['IdOrg'].'">'.$row['NombreOrg'].'</option>';
    }
}
if($_POST["elegido"]==5){
    $SQL = "SELECT * FROM Organizacion WHERE IdEntidad = 5";

    $res=sqlsrv_query($conn,$SQL);
    while ($row=sqlsrv_fetch_array($res)) { 
        
        // $html .= '<option value="'.$row['id_category'].'">'.$row['name'].'</option>';
        $html .= '<option value="'.$row['IdOrg'].'">'.$row['NombreOrg'].'</option>';
    }
}
echo $html;	
?>