<?php
include('Conn.php');

$html = "";


if($_POST["elegido"]==1){
    $SQL = "SELECT * FROM VH WHERE IdVH = 2";
    
    $res=sqlsrv_query($conn,$SQL);
    while ($row=sqlsrv_fetch_array($res)) { 
        
        
        $html .= '<option value="'.$row['IdVH'].'">'.$row['VH'].'</option>';
    }
     
}
if($_POST["elegido"]==2){
    $SQL = "SELECT * FROM VH";

    $res=sqlsrv_query($conn,$SQL);
    while ($row=sqlsrv_fetch_array($res)) { 
        
        
        $html .= '<option value="'.$row['IdVH'].'">'.$row['VH'].'</option>';
    }
}
if($_POST["elegido"]==3){
    $SQL = "SELECT * FROM VH WHERE IdVH = 2";

    $res=sqlsrv_query($conn,$SQL);
    while ($row=sqlsrv_fetch_array($res)) { 
        
        
        $html .= '<option value="'.$row['IdVH'].'">'.$row['VH'].'</option>';
    }
}
if($_POST["elegido"]==4){
    $SQL = "SELECT * FROM VH WHERE IdVH = 2";

    $res=sqlsrv_query($conn,$SQL);
    while ($row=sqlsrv_fetch_array($res)) { 
        
        
        $html .= '<option value="'.$row['IdVH'].'">'.$row['VH'].'</option>';
    }
}
if($_POST["elegido"]==5){
    $SQL = "SELECT * FROM VH";

    $res=sqlsrv_query($conn,$SQL);
    while ($row=sqlsrv_fetch_array($res)) { 
        
        
        $html .= '<option value="'.$row['IdVH'].'">'.$row['VH'].'</option>';
    }
}
echo $html;	
?>