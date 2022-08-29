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
    <link rel="icon" href="../../Images/IconoAzul+.png">
    <link rel="stylesheet" href="../Styles/Reload.css">
    <link rel="stylesheet" href="../Styles/General.css">
    <link rel="stylesheet" href="../Styles/Menu.css">
    <link rel="stylesheet" href="../Styles/footer.css">
    <link rel="stylesheet" href="../Styles/VerSolicitudes.css">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--Fuentes-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;1,700&display=swap"
        rel="stylesheet">


    <title>Solicitudes</title>
</head>

<body style="
font-family: 'Montserrat', sans-serif;">
    </style>

     <div class="" id="contenedor_carga">
        <div id="carga"></div>
    </div> 
    <div class=".container-fluid">

        <section>
            <?php include 'menu.php'?>
        </section>

        <section class="MiniContenedor">
                <div class="TitleSoli">
                <img src="../../Images/simbolo_cac_color.png" alt="" style="width: 60px;">
                <h1>Solicitudes</h1>
                </div>

                <!-- <table id="example" class="table table-striped" style="width:100%" >
        <thead class="bg-primary text-white">
            <tr>
                <th>No° </th>
                <th>Fecha Envio</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Fecha Creacion</th>
                <th>Buscar</th>

            </tr>
        </thead>

    </table> -->

    <table class="table table-striped" id="example">
                        <thead class="bg-primary text-white">
                            <th class="text-white">No° Solicitud</th>
                            <th class="text-white">Nombre</th>
                            <th class="text-white">Fecha a Enviar</th>
                            <th class="text-white">Fecha Creacion</th>
                            <th class="text-white">Buscar</th>
                        </thead>
                        <tbody>
                            <?php $SQL="SELECT s.IdSolicitud,s.FechaEnvio,s.FechaHoy,u.Nombres,u.Apellido,e.Descripcion FROM Solicitud s INNER JOIN UsuarioHelpMail u ON s.IdUser = u.IdUser INNER JOIN  EstadoSolicitud e ON e.IdEstado =  s.Estado WHERE s.Estado = 1";
                                $res=sqlsrv_query($conn,$SQL);
                                while ($row=sqlsrv_fetch_array($res)) { 
                                    ?>
                                    <tr>
                                        <td><center><?php echo $row['IdSolicitud']?></center> </td>
                                        <td><?php echo $row['Nombres']." " .$row['Apellido'] ?></td>
                                        <td><?php echo $row['FechaEnvio']?></td>
                                        <td><?php echo $row['FechaHoy']?></td>
                                        <td>
                                                <a class="btn btn-secondary" href="infoSolicitudes.php?IdSol=<?php echo base64_encode($row['IdSolicitud'])?>" target="_blank">
                                                        <i class="fas fa-search"></i>
                                                </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                        </tbody>
                    </table>

        </section>


        <section>
            <?php include 'Include/footer.html'?>
        </section>






<script>

</script>






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
    <!-- Librerias Data Tables -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
    <!-- Final -->
    <!-- Ajax -->
    
    <!--  -->
    <!-- <script src="../Scripts/Solicitudes.js"></script> -->
    <script src="../Scripts/Tablas.js"></script>
</body>
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