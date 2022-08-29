<?php
include('Conn.php');

$html = "";


if($_POST["elegido"]==1){
    $SQL = "SELECT * FROM Cancer WHERE IdCancer = 2";
    
    $res=sqlsrv_query($conn,$SQL);
    while ($row=sqlsrv_fetch_array($res)) { 
        
        
        $html .= '<option value="'.$row['IdCancer'].'">'.$row['Cancer'].'</option>';
    }
     
}
if($_POST["elegido"]==2){
    $SQL = "SELECT * FROM Cancer";

    $res=sqlsrv_query($conn,$SQL);
    while ($row=sqlsrv_fetch_array($res)) { 
        
        
        $html .= '<option value="'.$row['IdCancer'].'">'.$row['Cancer'].'</option>';
    }
}
if($_POST["elegido"]==3){
    $SQL = "SELECT * FROM Cancer WHERE IdCancer = 2";

    $res=sqlsrv_query($conn,$SQL);
    while ($row=sqlsrv_fetch_array($res)) { 
        
        
        $html .= '<option value="'.$row['IdCancer'].'">'.$row['Cancer'].'</option>';
    }
}
if($_POST["elegido"]==4){
    $SQL = "SELECT * FROM Cancer WHERE IdCancer = 2";

    $res=sqlsrv_query($conn,$SQL);
    while ($row=sqlsrv_fetch_array($res)) { 
        
        
        $html .= '<option value="'.$row['IdCancer'].'">'.$row['Cancer'].'</option>';
    }
}
if($_POST["elegido"]==5){
    $SQL = "SELECT * FROM Cancer";

    $res=sqlsrv_query($conn,$SQL);
    while ($row=sqlsrv_fetch_array($res)) { 
        
        
        $html .= '<option value="'.$row['IdCancer'].'">'.$row['Cancer'].'</option>';
    }
}
echo $html;	
?>