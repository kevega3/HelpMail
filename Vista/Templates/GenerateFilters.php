

<?php 
include('../../Modelo/AutenticarUser.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- BOOSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--  -->
    <link rel="stylesheet" href="../Styles/footer.css">
    <link rel="icon" href="../../Images/IconoAzul+.png">
    <link rel="stylesheet" href="../Styles/Reload.css">
    <link rel="stylesheet" href="../Styles/Filtros.css">
    <link rel="stylesheet" href="../Styles/General.css">
    <link rel="stylesheet" href="../Styles/TablaCorreos.css">
    
    <link rel="stylesheet" href="../Styles/InfoOrg.css">
    <link rel="stylesheet" href="../Styles/Actividad.css">
    <link rel="stylesheet" href="../Styles/Menu.css">
    <link rel="stylesheet" href="../Styles/FromularioADD.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--Fuentes-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;1,700&display=swap"
        rel="stylesheet">

    <title>Filters</title>
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

        
        
        <section class="MiniContenedor">
            <?php include 'Include/filters.php'?>
        </section>


        <section>
            <?php include 'Include/tablaCorreos.php'?>
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

    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!--Alertas -->

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../Scripts/Alerts.js"></script>
    <!---->

    <script src="../Scripts/user.js"></script>
    <script src="../Scripts/Agregar.js"></script>
    <script src="../Scripts/FromularioADD.js"></script>
    
  


    <!-- Boostrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>




    <!-- Librerias Data Tables  -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
    

   

    <!--Fonazome-->
    <script src="https://kit.fontawesome.com/c4cc899971.js" crossorigin="anonymous"></script>
    
    
</body>

</html>

