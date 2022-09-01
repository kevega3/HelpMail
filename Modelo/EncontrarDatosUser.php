
<?php
include("Conn.php");

if(isset($_POST['id']) && isset($_POST['id']) != "")
{
    $user_id = $_POST['id'];
    
    $query = "SELECT IdUser,Nombres,Apellido,CC,Rol,Correo FROM UsuarioHelpMail WHERE IdUser = '$user_id'";

    // $query = "SELECT * FROM CorreosMail WHERE IdCorreo = '$user_id'";
    if (!$result = sqlsrv_query($conn, $query)) {
        exit(sqlsrv_errors($conn));
    }

    
    $response = array();
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
    echo json_encode($response);
}
else
{
    $response['status'] = 200;
    $response['message'] = "Invalid Request!";
}
?>
