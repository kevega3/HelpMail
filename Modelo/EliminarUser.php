
<?php 
include ('Conn.php');

$id = $_POST['id'];

$SQL = "DELETE FROM UsuarioHelpMail WHERE IdUser = $id";

if (!$result = sqlsrv_query($conn, $SQL)) {
    exit(sqlsrv_errors($conn));
}
echo "1 registro exitoso";



?>