<?php
include('Conn.php');

$html = "";


if($_POST["elegido"]==1){
    $SQL = "SELECT * FROM EpatitisC WHERE IdEpatitisC = 2";
     
    $res=sqlsrv_query($conn,$SQL);
    while ($row=sqlsrv_fetch_array($res)) { 
         

        $html .= '<option value="'.$row['IdEpatitisC'].'">'.$row['EpatitisC'].'</option>';
    }
    
}
if($_POST["elegido"]==2){
    $SQL = "SELECT * FROM EpatitisC";

    $res=sqlsrv_query($conn,$SQL);
    while ($row=sqlsrv_fetch_array($res)) { 
        
 
        $html .= '<option value="'.$row['IdEpatitisC'].'">'.$row['EpatitisC'].'</option>';
    }
}
if($_POST["elegido"]==3){
    $SQL = "SELECT * FROM EpatitisC WHERE IdEpatitisC  = 2";

    $res=sqlsrv_query($conn,$SQL);
    while ($row=sqlsrv_fetch_array($res)) { 
        

        $html .= '<option value="'.$row['IdEpatitisC'].'">'.$row['EpatitisC'].'</option>';
    }
}
if($_POST["elegido"]==4){
    $SQL = "SELECT * FROM EpatitisC WHERE IdEpatitisC  = 2";

    $res=sqlsrv_query($conn,$SQL);
    while ($row=sqlsrv_fetch_array($res)) { 
        
    
        $html .= '<option value="'.$row['IdEpatitisC'].'">'.$row['EpatitisC'].'</option>';
    }
}
if($_POST["elegido"]==5){
    $SQL = "SELECT * FROM EpatitisC";

    $res=sqlsrv_query($conn,$SQL);
    while ($row=sqlsrv_fetch_array($res)) { 
        
       
        $html .= '<option value="'.$row['IdEpatitisC'].'">'.$row['EpatitisC'].'</option>';
    }
}
echo $html;	
?>