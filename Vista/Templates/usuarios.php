<?php 
include('../../Modelo/AutenticarUser.php');
if($Rol == 'Administrador' || $Rol == 'Administrador BD'){
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/General.css">
    <link rel="stylesheet" href="../Styles/Menu.css">
    <link rel="stylesheet" href="../Styles/inicio.css">
    <link rel="stylesheet" href="../Styles/footer.css">
    <link rel="stylesheet" href="../Styles/solicitudes.css">
    <link rel="stylesheet" href="../Styles/Usuarios.css">



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
    <div class="ContGeneral">

        <section>
            <?php include 'menu.php' ?>
        </section>

        <section class="MiniContenedor" id="Users">
            <?php 
                include('Accions/btnAgregarUser.php');
                include('Accions/btnEditarUser.php');
            ?>


            <div class="row pt-2">
                <table class="table table-striped " id="example">
                    <thead class="text-white bg-primary">
                        <tr>
                            <th>CC</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Correo</th>
                            <th>Rol</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $SQL="SELECT * FROM UsuarioHelpMail WHERE IdUser <> '$id'";
                        $res=sqlsrv_query($conn,$SQL);
                        while ($row=sqlsrv_fetch_array($res)) { 
                    ?>
                        <tr>
                            <td><?php echo $row['CC']?></td>
                            <td><?php echo $row['Nombres']?></td>
                            <td><?php echo $row['Apellido']?></td>
                            <td><?php echo $row['Correo']?></td>
                            <td><?php echo $row['Rol']?></td>
                            <td>
                                <button class="btn btn-secondary" onclick="EditarUser(<?php echo $row['IdUser']?> )">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="btn btn-danger" onclick="EliminarUser(<?php echo $row['IdUser']?> )">
                                    <i class="fas fa-minus-circle"></i>
                                </button>
                            </td>

                        </tr>
                        <?php 
                     }
                    ?>
                    </tbody>
                </table>

            </div>
        </section>


       


        <section>
            <?php include 'Include/footer.html'?>
        </section>






        <!-- CONTAIDER -->
    </div>























    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!--Alertas -->

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../Scripts/Alerts.js"></script>
    <!-- <script src="../Scripts/Solicitudes.js"></script> -->
    <!-- <script src="../Scripts/jquery-1.11-3-min.js"></script> -->
    <!---->

    <script src="../Scripts/usuarios.js"></script>
    <script src="../Scripts/FormularioAddUser.js"></script>

    <!-- Librerias Data Tables -->


    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="../Scripts/Tablas.js"></script>
    <!-- Final-->


    <!-- Boostrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>







    <!--Fonazome-->
    <script src="https://kit.fontawesome.com/c4cc899971.js" crossorigin="anonymous"></script>


</body>

</html>
<?php
}else{
    echo "<script>alert('No Tiene acceso')</script>";
    echo "<script>window.location.replace('inicio.php')</script>";
}
?>