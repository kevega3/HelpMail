<?php 

    if(isset($_GET['IdSol'])){
        $IdSol= base64_decode($_GET['IdSol']);
    }else{
        echo "<script>alert('Erorr interno lo sentimos')</script>";
        echo "<script>window.location='../../index.php'</script>";
        
    }

?>


<?php include ('../../Modelo/AutenticarUser.php');
// $IdSol="<script>document.write(IdSol)</script>";
$BuscarSoli = "SELECT u.Nombres,u.Apellido,u.Correo,s.DescripcionNega,s.Contenidocorreo,s.DescipcionCorreo,
s.FechaHoy,s.FechaEnvio,e.Descripcion,s.NumCorreos,s.AsuntoCorreo,
s.NumCorreos FROM Solicitud s INNER JOIN UsuarioHelpMail u ON s.IdUser = u.IdUser
INNER JOIN EstadoSolicitud e ON s.Estado = e.IdEstado WHERE IdSolicitud = '$IdSol'";
$Bus=sqlsrv_query($conn,$BuscarSoli);
    while ($filaCof=sqlsrv_fetch_array($Bus)) {   
        $ContenidoCorreo= utf8_decode(html_entity_decode($filaCof['Contenidocorreo']));   
        $DescipcionCorreo=$filaCof['DescipcionCorreo'];   
        $FechaHoy=$filaCof['FechaHoy'];   
        $FechaEnvio=$filaCof['FechaEnvio'];   
        $Estado=$filaCof['Descripcion'];   
        $NumCorreos=$filaCof['NumCorreos'];   
        $AsuntoCorreo= utf8_decode(html_entity_decode($filaCof['AsuntoCorreo']));   
        $Number=$filaCof['NumCorreos'];   
        $Nombres=$filaCof['Nombres'];   
        $Apellido=$filaCof['Apellido'];   
        $CorreoUser= $filaCof['Correo'];   
        $DescripcionNegacion = $filaCof['DescripcionNega'];
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Ver Solicitud</title>

    <!-- BOOSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--  -->

    <link href="https://cdn.quilljs.com/1.3.7/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.quilljs.com/1.3.7/quill.js"></script>
    <link rel="stylesheet" href="//cdn.quilljs.com/0.20.1/quill.snow.css" />

    <link rel="stylesheet" href="../Styles/Reload.css">
    <link rel="stylesheet" href="../Styles/General.css">
    <link rel="stylesheet" href="../Styles/Menu.css">
    <link rel="stylesheet" href="../Styles/footer.css">
    <link rel="stylesheet" href="../Styles/VerSolicitudes.css">
    <link rel="stylesheet" href="../Styles/solicitudes.css">
    <link rel="stylesheet" href="../Styles/ReloadCargar.css">

    <link rel="icon" href="../../Images/IconoAzul+.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--Fuentes-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;1,700&display=swap"
        rel="stylesheet">
</head>
<body style="
font-family: 'Montserrat', sans-serif;">
    </style>
    <div class="" id="contenedor_carga">
        <div id="carga"></div>
    </div> 

    <div class="loader ">
        <div class="ContenedorEsperar">
            <center>
                <p class="Esperar">Espera un momento porfavor ...</p>
            </center>
        </div>
        <div id="carga">
        </div>
    </div>
    
    

<section>
<nav class="navbar navbar-expand-lg navbar-dark bgMenu pt-0 pb-0">
    <div class="container-fluid">
        <a class="navbar-brand pt-0 pb-0 menuicons" href="#">
            <img src="../../Images/Icono+.png" alt="" style=" width: 40px">
             <h2 class=""><span class="span">H</span class="span">elp<span class="span">M</span>ail</h2> 
        </a>
    </div>
</nav>
</section>





<section class="ContendorSolicitud">
            <div class="row">
                <div class="col-sm-12 d-md-block col-md-9">
                    <?php include 'Include/CuerpoCorreoInfo.php' ?>
                </div>
                <div class="col-sm-12 d-md-block col-md-3">
                    <?php include 'Include/FuncionesCorreoInfo.php'?>
                </div>
            </div>
</section>





<section><?php include ('Include/footer.html')?></section>
</body>

<!-- quill -->
<script src="../Scripts/quill.js"></script>
<!--  -->

<!-- Reload -->
<script>
    window.onload = function() {
        var contenedor = document.getElementById('contenedor_carga');
        contenedor.style.visibility = 'hidden';
        contenedor.style.opacity = '0';
    }
</script>
    <!-- Librerias Data Tables -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!--  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

<!-- Alertas -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../Scripts/Alerts.js"></script>
<!--  -->

    <!--Fonazome-->
    <script src="https://kit.fontawesome.com/c4cc899971.js" crossorigin="anonymous"></script>
</html>

