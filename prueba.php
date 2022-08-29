

<!-- ajax -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



    <?php  include('Modelo/Conn.php')?>

<script>
$(function () {
    
    SacarEntidaddes();

});

function SacarEntidaddes(){
    $(document).ready(function(){
    $("#EntidadsAD").on('change', function () {
        $("#EntidadsAD option:selected").each(function () {
            elegido=$(this).val();
            $.post("modelos.php", { elegido: elegido }, function(data){
                $("#OrganizacionsAD").html(data);
            });			
        });
   });
});
}






</script>





                            <select class="inputForm validarAD" name="EntidadsAD" id="EntidadsAD">
                            
                            <option class="inputForm" value="1">EPS</option>
                            <?php $BuscarEnti="SELECT * FROM TipoEntidad";

                                $res=sqlsrv_query($conn,$BuscarEnti);

                                while ($row=sqlsrv_fetch_array($res)) { ?>
                                <option class="inputForm" value="<?php echo $row['IdEntidad']?>"><?php echo $row['NombreEntidad'] ?></option>
                                    <?php
                                }
                                ?>
                            </select>



                            <select class="inputForm validarAD" name="OrganizacionsAD" id="OrganizacionsAD" >
                            <option disabled selected value="">Seleccionar</option>
                            </select>

                            <?php 
                                $Buscaruno = "SELECT * FROM CorreosMail WHERE IdCorreo = 58"; 
                                $res=sqlsrv_query($conn,$Buscaruno);

                                while ($row=sqlsrv_fetch_array($res)) { 
                                    echo $row['IdEntidad'];
                                    
                                }
                            ?>