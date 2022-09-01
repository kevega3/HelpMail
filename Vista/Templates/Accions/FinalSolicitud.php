<?php 
include('../../../Modelo/AutenticarUser.php');
$Adjunto = utf8_decode(html_entity_decode($_POST['Test']));
$Plantilla = $_POST['Plantilla'];
$Header = $_POST['Header'];
$NombreBtn = $_POST['NombreBtn'];
$Asunto = $_POST['Asunto'];
$link= $_POST['link'];
$Number = $_POST['Number'];
$entrar= $_POST['entrar'];
$Pregunta =$_POST['Pregunta'];
if($Pregunta == 'Si'){
    $botonADD = "<a class='boton' href='{$link}' target='_blank'>{$NombreBtn}</a>"; 
}else{
    $botonADD = "";
}

$DateAndTime = date('Y-m-d\TG:i', time());

// $DateAndTime = "2022-06-01T08:30";
include('../PlantillasCorreo/PlantillaAzul.php');
include('../PlantillasCorreo/PlantillaNegra.php');
include('../PlantillasCorreo/PlantillaNA.php');

if($Plantilla=='Azul'){
    $Correo=utf8_decode(html_entity_decode($PlantillaAzul));
//    $Correo=  utf8_encode($PlantillaAzul);
}else if($Plantilla=='black'){
    $Correo=utf8_decode(html_entity_decode($PlantillaBlack));
}else{
    $Correo=utf8_decode(html_entity_decode($Adjunto));
}

$fechaHoy = date('j-n-Y'). " " .date('g:i:s A');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VistaPrevia</title>
    <!-- Script comentario -->
    <link href="https://cdn.quilljs.com/1.3.7/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.quilljs.com/1.3.7/quill.js"></script>
    <link rel="stylesheet" href="//cdn.quilljs.com/0.20.1/quill.snow.css" />

    <!-- BOOSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--  -->
    <link rel="stylesheet" href="../../Styles/footer.css">
    <link rel="icon" href="../../../Images/IconoAzul+.png">
    <link rel="stylesheet" href="../../Styles/FinalSolicitud.css">
    <link rel="stylesheet" href="../../Styles/Reload.css">
    <link rel="stylesheet" href="../../Styles/General.css">
    <link rel="stylesheet" href="../../Styles/Menu.css">
    <link rel="stylesheet" href="../../Styles/ReloadCargar.css">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;1,700&display=swap"
        rel="stylesheet">

</head>

<body style="
font-family: 'Montserrat', sans-serif;">
    </style>

    <div class="loader">
        <div class="ContenedorEsperar">
            <center>
                <p class="Esperar">Espera un momento porfavor ...</p>
            </center>
        </div>
        <div id="carga">
        </div>
    </div>
    

    <section>
        <?php include('../Include/menuSeg.html');?>
    </section>



    <section class="">
        <div class="Contaider">
            <div>
                <img src="../../../Images/2.png" class="ADA" alt="">
            </div>
            <div class="TitlesWelcome">
                <p class="title1">Estamos a nada de terminar</p>
                <p class="title2">lo que ves en la parte inferior es el contenido final de tu correo a enviar<span>
                        <p class="title2"> <span class="helpmail">¿</span>Estas agusto con el<span
                                class="helpmail">?</span>
                        </p>
            </div>
        </div>
    </section>

    <section class="contenedorVistaPrevia">
        <div class="MiniContenedor">
            <h2 class="TitulosFinal">Su correo</h2>
            <?php echo $Correo?>

        </div>
    </section>

    <section class="MiniContenedor">
        <h2 class="TitulosFinal">Razón a Enviar</h2>
        <label for=""><span class="text-primary">¿</span> Porque desea enviar este correo <span
                class="text-primary">?</span></label>

        <!-- <form action="../../../Modelo/CrearSolicitud.php" method="POST">   -->
            <div class="formulario__grupo-input">
            <div id="editor" style="height: 200px"></div>
            <textarea name="Test" id="test" cols="30" rows="10" style="display:none;" class="validar"></textarea>
            </div>
            
            <input type="hidden" id="ContenidoCorreo" name="ContenidoCorreo" value="<?php echo  utf8_decode(htmlentities($Correo))?>">
            <input type="hidden" id="IdCorreos" name="IdCorreos" value="<?php echo $entrar?>">
            <input type="hidden" id="idUser" name="id" value="<?php echo  $id?>">
            <input type="hidden" id="Number" name="Number" value="<?php echo  $Number?>">
            <input type="hidden" id="Asunto" name="Asunto" value="<?php echo  $Asunto?>">
            <br><br>
            <div class="row">
                <div class="col-6">
                    <label for="fecha" class="TitulosFinal ">Fecha de Envio</label>
                    <input name="FechaEnvio" id="FechaEnvio" type="datetime-local"  class="validar" min="<?php echo $DateAndTime ?>" max="2023-08-10T16:30" >
                </div>
                <div class="col-1"></div>
                <div class="col-5 pt-3">
                <input type="submit" class="btnEnviar" onclick="CrearSolicitud()">
                </div>
            </div>
            

            

            
            <!-- <input type="submit" onclick=" CrearCuerpoCorreo()"> -->
            <!-- <button class="btn btn-success p-4">Si, Me gusta</button> -->
        </form> 
    </section>






    <section>
        <?php include('../Include/footer.html')?>
    </section>


    <!-- Boostrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Quill.js -->
    <script src="../../Scripts/quill.js"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!--Alertas -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../../Scripts/Alerts.js"></script>

   

</body>

</html>