<?php 
include('../../Modelo/AutenticarUser.php');
$Number= $_POST['Number'];
$entrar= $_POST['entrar'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Script comentario -->
    <link href="https://cdn.quilljs.com/1.3.7/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.quilljs.com/1.3.7/quill.js"></script>
    <link rel="stylesheet" href="//cdn.quilljs.com/0.20.1/quill.snow.css" />

    <!-- BOOSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--  -->
    <link rel="stylesheet" href="../Styles/footer.css">
    <link rel="icon" href="../../Images/IconoAzul+.png">
    <link rel="stylesheet" href="../Styles/Reload.css">
    <link rel="stylesheet" href="../Styles/General.css">
    <link rel="stylesheet" href="../Styles/Menu.css">
    <link rel="stylesheet" href="../Styles/solicitudes.css">
    
       
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;1,700&display=swap"
        rel="stylesheet">


    <title>Generando Solicitud</title>
</head>

<body style="
font-family: 'Montserrat', sans-serif;">
    </style>



    <!-- <div class="" id="contenedor_carga">
        <div id="carga"></div>
</div> -->
    <div class=".container-fluid">

        <section>
            <?php include 'menu.php'?>
        </section>

        <section class="ContendorSolicitud">
            <form class="row" action="Accions/FinalSolicitud.php" id="formulario"  class="formulario" method="POST" target='_blank'>

                <div class="col-sm-12 d-md-block col-md-9">
                    <?php include 'Include/CuerpoCorreo.php' ?>
                </div>
                <div class="col-sm-12 d-md-block col-md-3">
                    <?php include 'Include/FuncionesCorreo.php'?>
                </div>
            </form> <!-- Row -->

        </section>

        <!-- CONTAIDER -->
    </div>



    <section>
        <?php include 'Include/footer.html'?>
    </section>























    <!-- Reload -->
    <!-- <script>
    window.onload = function() {
        var contenedor = document.getElementById('contenedor_carga');
        contenedor.style.visibility = 'hidden';
        contenedor.style.opacity = '0';
    }
</script> -->
    <!--  -->
    <!-- Quill.js -->
    <script src="../Scripts/quill.js"></script>






    <!--  -->
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!--Alertas -->

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../Scripts/Alerts.js"></script>
    <script src="../Scripts/CuerpoCorreo.js"></script>
    <!---->
    
    <script>
        $(document).ready(function() {
            $('[data-toggle="popover"]').popover();
        });
    </script>
    <!---->


    <!-- Boostrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>




    <!--Fonazome-->
    <script src="https://kit.fontawesome.com/c4cc899971.js" crossorigin="anonymous"></script>


</body>

</html>