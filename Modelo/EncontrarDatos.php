<?php
// include Database connection file
include("Conn.php");

// check request
if(isset($_POST['id']) && isset($_POST['id']) != "")
{
   
    $user_id = $_POST['id'];
    // Get User Details
    $query = "SELECT * FROM CorreosMail WHERE IdCorreo = '$user_id'";
    if (!$result = sqlsrv_query($conn, $query)) {
        exit(sqlsrv_errors($conn));
    }

    
    $response = array();
    // $filaModel=$result->fetch();
    // if($filaModel > 0) {
    //     while ($row = sqlsrv_fetch_array($result)) {
    //         $response = $row;
    //     }
    // }
    $fill=sqlsrv_num_rows($result);
    if( $fill == 0) {
        while ($row = sqlsrv_fetch_array($result)) {
            $response = $row;
           
        }
    }
    else
    {
        $response['status'] = 200;
        $response['message'] = "Data not found!";
    }
    // display JSON data
    echo json_encode($response);
}
else
{
    $response['status'] = 200;
    $response['message'] = "Invalid Request!";
}
?>
