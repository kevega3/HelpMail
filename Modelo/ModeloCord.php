<?php
include('Conn.php');

$html = "";

if($_POST["elegido"]==1){
    $SQL = "SELECT * FROM Coordinacion WHERE IdCordinacion = 8";
    
    $res=sqlsrv_query($conn,$SQL);
    while ($row=sqlsrv_fetch_array($res)) { 
        
        
        $html .= '<option value="'.$row['IdCordinacion'].'">'.$row['DescripcionCoordinacion'].'</option>';
    }
     
}
if($_POST["elegido"]==2){
    $SQL = "SELECT * FROM Coordinacion  WHERE IdCordinacion = 8";

    $res=sqlsrv_query($conn,$SQL);
    while ($row=sqlsrv_fetch_array($res)) { 
        
        
        $html .= '<option value="'.$row['IdCordinacion'].'">'.$row['DescripcionCoordinacion'].'</option>';
    }
}
if($_POST["elegido"]==3){
    $SQL = "SELECT * FROM Coordinacion where IdCordinacion <> 8;";

    $res=sqlsrv_query($conn,$SQL);
    while ($row=sqlsrv_fetch_array($res)) { 
        
        
        $html .= '<option value="'.$row['IdCordinacion'].'">'.$row['DescripcionCoordinacion'].'</option>';
    }
}
if($_POST["elegido"]==4){
    $SQL = "SELECT * FROM Coordinacion  WHERE IdCordinacion = 8";

    $res=sqlsrv_query($conn,$SQL);
    while ($row=sqlsrv_fetch_array($res)) { 
        
        
        $html .= '<option value="'.$row['IdCordinacion'].'">'.$row['DescripcionCoordinacion'].'</option>';
    }
}
if($_POST["elegido"]==5){
    $SQL = "SELECT * FROM Coordinacion  WHERE IdCordinacion = 8";

    $res=sqlsrv_query($conn,$SQL);
    while ($row=sqlsrv_fetch_array($res)) { 
        
        
        $html .= '<option value="'.$row['IdCordinacion'].'">'.$row['DescripcionCoordinacion'].'</option>';
    }
}
echo $html;	
?>