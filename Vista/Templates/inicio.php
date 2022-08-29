<?php 
include('../../Modelo/AutenticarUser.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/Reload.css">
    <link rel="stylesheet" href="../Styles/General.css">
    <link rel="stylesheet" href="../Styles/Menu.css">
    <link rel="stylesheet" href="../Styles/inicio.css">
    <link rel="stylesheet" href="../Styles/footer.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--Fuentes-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;1,700&display=swap"
        rel="stylesheet">

    <!-- BOOSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--  -->
    <link rel="icon" href="../../Images/IconoAzul+.png">



    <title>Inicio</title>
</head>

<body style="
font-family: 'Montserrat', sans-serif; background: ghostwhite;">
    </style>

    <div class="" id="contenedor_carga">
        <div id="carga"></div>
    </div>
    <div class="ContGeneral">

        <section>
            <?php include 'menu.php'?>
        </section>



        <section>

            <div class="Contaider">
                <div>
                    <img src="../../Images/2.png" class="ADA" alt="">
                </div>
                <div class="TitlesWelcome">
                    <p class="title1">¡BIENVENIDO!</p>
                    <p class="title2">Te damos una calida bienvenida a nuestro sistema <span
                            class="helpmail">H</span>elp<span class="helpmail">M</span>ail</p>
                    <p class="title2"> <span class="helpmail">¿</span> Donde quieres ir <span class="helpmail">?</span>
                    </p>
                </div>
            </div>
        </section>

        <section class="ConBtons">
            <div class="row">
                <div class="col-sm-12 col-md-6 ">
                    <center>

                        <div class="btns btns1">

                            <ul class="menu">
                                <li>
                                    <a href="GenerateFilters.php" class="">
                                        <span class="icons text-white">Filtros</span>
                                        <span>
                                            <i class="fas fa-filter icon text-white"></i>
                                        </span>
                                    </a>
                                </li>

                            </ul>


                        </div>


                    </center>
                </div>
                <div class="col-sm-12 col-md-6 ">
                    <center>

                        <div class="btns btns2">

                            <ul class="menu">
                                <li>
                                    <a href="Solicitudes.php" class="">
                                        <span class="icons text-white">Solicitudes</span>
                                        <span>
                                            <i class="fas fa-address-book icon text-white"></i>
                                        </span>
                                    </a>
                                </li>

                            </ul>

                        </div>


                    </center>
                </div>

                <?php if($Rol == "Administrador" || $Rol == "Administrador BD") { ?>


                <div class="row">
                    <div class="col-sm-12 col-md-6">

                       <center>

                            <div class="btns btns3">

                                <ul class="menu">
                                    <li>
                                        <a href="VerSolicitudes.php" class="">
                                            <span class="icons text-white">Creados</span>
                                            <span>
                                                <i class="fas fa-eye icon text-white"></i>
                                            </span>
                                        </a>
                                    </li>

                                </ul>

                            </div>

                            </center>
                       
                    </div>
                    <div class="col-sm-12 col-md-6">

                       <center>

                            <div class="btns btns4">

                                <ul class="menu">
                                    <li>
                                        <a href="usuarios.php" class="">
                                            <span class="icons text-white">Usuarios</span>
                                            <span>
                                            <i class="fas fa-users icon text-white"></i>
                                            </span>
                                        </a>
                                    </li>

                                </ul>

                            </div>


                            </center>
                    </div>
                    <?php } ?>
                    
                </div>

              
            </div>
        </section>


        <section>
            <?php include 'Include/footer.html'?>
        </section>








        <!-- CONTAIDER -->
    </div>


























    <!-- Reload -->
    <script>
    window.onload = function() {
        var contenedor = document.getElementById('contenedor_carga');
        contenedor.style.visibility = 'hidden';
        contenedor.style.opacity = '0';
    }
    </script>
    <!--  -->

    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


    <script>
    window.onload = function() {
        var contenedor = document.getElementById('contenedor_carga');
        contenedor.style.visibility = 'hidden';
        contenedor.style.opacity = '0';
    }
    </script>
    <!--Alertas -->

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../Scripts/Alerts.js"></script>
    <!-- <script src="../Scripts/jquery-1.11-3-min.js"></script> -->
    <!---->

    <script src="../Scripts/user.js"></script>
    <script src="../Scripts/TablaCorreos.js"></script>
    <script src="../Scripts/addMail.js"></script>
    <!-- Boostrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>







    <!--Fonazome-->
    <script src="https://kit.fontawesome.com/c4cc899971.js" crossorigin="anonymous"></script>


</body>

</html>