<?php
include ('Conn.php');
include ('Keys.php');

//Google
if ($_POST['entrar']) {

    $googleToken = $_POST['entrar'];

    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".SECRET_KEY."&response={$googleToken}");
    $response = json_decode($response);

    $response = (array) $response;

    if($response['success'] && ($response['score'] && $response['score'] > 0.5)){

            $usuario = trim($_REQUEST['usuario']);
            $contraseña= trim($_REQUEST['contraseña']);
            $contraseña = filter_var($contraseña, FILTER_SANITIZE_STRING);
            if(filter_var($usuario, FILTER_VALIDATE_INT)=== 0 || !filter_var($usuario, FILTER_VALIDATE_INT) === false){
                $query= "SELECT * FROM UsuarioHelpMail WHERE CC = '$usuario' AND Clave=(SELECT dbo.fun_encriptarLogin('$contraseña'))";
                $consulta=$cnx->prepare($query);
                $consulta->execute();
				$filaModel=$consulta->fetch();
                if($filaModel>0){
                    $res=sqlsrv_query($conn,$query);
                    while ($fila=sqlsrv_fetch_array($res)) {
                        $IdUser=$fila['IdUser']; 
                    }
                    session_start();
                    $_SESSION['usuario']='usuario';
                    $_SESSION['id']=$IdUser;
                    header("Location:../Vista/Templates/inicio.php");
                }
                else{
                    // echo "<script>alert('El usuario no Existe')</script>";
                    // echo "<script>window.location.replace('../index.php')</script>";
                    header("location:../index.php?error=".base64_encode('E')); 
                }






//End
}

else{

    echo "<script>alert('El usuario debe digitar Su C.C')</script>";
    echo "<script>window.location.replace('../index.php')</script>";
}
//Google
    }else{
        echo "<script>alert('Parece que eres un Bot Vuelve a intentarlo..')</script>";
        echo "<script>window.location.replace('../index.php')</script>";
    }
    }else{
        echo "<script>alert('Parece que eres un Bot Vuelve a intentarlo..')</script>";
       echo "<script>window.location.replace('../index.php')</script>";
}
?>
