<?php
include('Conn.php');

$html = "";
if($_POST["elegido"]==1){
    $SQL = "SELECT * FROM EnRenal WHERE IdEnRenal  = 2";

    $res=sqlsrv_query($conn,$SQL);
    while ($row=sqlsrv_fetch_array($res)) { 
         
        $html .= '<option value="'.$row['IdEnRenal'].'">'.$row['EnRenal'].'</option>';
    }
    
}
if($_POST["elegido"]==2){
    $SQL = "SELECT * FROM EnRenal";

    $res=sqlsrv_query($conn,$SQL);
    while ($row=sqlsrv_fetch_array($res)) { 
        
        $html .= '<option value="'.$row['IdEnRenal'].'">'.$row['EnRenal'].'</option>';
    }
}
if($_POST["elegido"]==3){
    $SQL = "SELECT * FROM EnRenal WHERE IdEnRenal  = 2";

    $res=sqlsrv_query($conn,$SQL);
    while ($row=sqlsrv_fetch_array($res)) { 

        $html .= '<option value="'.$row['IdEnRenal'].'">'.$row['EnRenal'].'</option>';
    }
}
if($_POST["elegido"]==4){
    $SQL = "SELECT * FROM EnRenal WHERE IdEnRenal  = 2";

    $res=sqlsrv_query($conn,$SQL);
    while ($row=sqlsrv_fetch_array($res)) { 
        $html .= '<option value="'.$row['IdEnRenal'].'">'.$row['EnRenal'].'</option>';
    }
}
if($_POST["elegido"]==5){
    $SQL = "SELECT * FROM IdEnRenal";

    $res=sqlsrv_query($conn,$SQL);
    while ($row=sqlsrv_fetch_array($res)) { 
        
        $html .= '<option value="'.$row['IdEnRenal'].'">'.$row['EnRenal'].'</option>';
    }
}
echo $html;	
?>