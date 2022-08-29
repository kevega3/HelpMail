<?php
include('Conn.php');

$html = "";


if($_POST["elegido"]==1){
    $SQL = "SELECT * FROM Artritis WHERE IdArtritis = 2";
    
    $res=sqlsrv_query($conn,$SQL);
    while ($row=sqlsrv_fetch_array($res)) { 
        

        
        $html .= '<option value="'.$row['IdArtritis'].'">'.$row['Artritis'].'</option>';
    }
     
}
if($_POST["elegido"]==2){
    $SQL = "SELECT * FROM Artritis";

    $res=sqlsrv_query($conn,$SQL);
    while ($row=sqlsrv_fetch_array($res)) { 
        
        
        $html .= '<option value="'.$row['IdArtritis'].'">'.$row['Artritis'].'</option>';
    }
}
if($_POST["elegido"]==3){
    $SQL = "SELECT * FROM Artritis WHERE IdArtritis = 2";

    $res=sqlsrv_query($conn,$SQL);
    while ($row=sqlsrv_fetch_array($res)) { 
        
        
        $html .= '<option value="'.$row['IdArtritis'].'">'.$row['Artritis'].'</option>';
    }
}
if($_POST["elegido"]==4){
    $SQL = "SELECT * FROM Artritis WHERE IdArtritis = 2";

    $res=sqlsrv_query($conn,$SQL);
    while ($row=sqlsrv_fetch_array($res)) { 
        
        
        $html .= '<option value="'.$row['IdArtritis'].'">'.$row['Artritis'].'</option>';
    }
}
if($_POST["elegido"]==5){
    $SQL = "SELECT * FROM Artritis";

    $res=sqlsrv_query($conn,$SQL);
    while ($row=sqlsrv_fetch_array($res)) { 
        
        
        $html .= '<option value="'.$row['IdArtritis'].'">'.$row['Artritis'].'</option>';
    }
}
echo $html;	
?>