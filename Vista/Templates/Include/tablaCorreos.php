<?php
    include 'Accions/btonAgrregar.php';
    include 'Accions/btnEdit.php';
?>





<div class="MiniContenedor">

<div class="VerBtons pb-4">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-success " data-bs-toggle="modal" data-bs-target="#addMail">
      Crear  <i class="fas fa-plus-circle"></i> 
    </button>
</div>

    <h3 class="Titles">Busca y Selecciona </h3>
    <table class="table table-striped table-hover" id="Correos">
        <thead class="bg-primary text-white">
            <tr>
                <!-- <th>IdCorreo</th> -->
                <th>
                
                </th>
                <th>Nombre</th>
                <th>TipoEntidad</th>
                <th>Cargo</th>
                <th>Organizacion</th>
                <th class="VerBtons">
                    Acciones
                </th>

            </tr>
        </thead>
        <tbody id="filters-result">

        </tbody>           
    </table>
</div>

<!-- <input name='checks[]' type='checkbox' value='1' /> 
    <input name='checks[]' type='checkbox' value='2' /> 
    <input name='checks[]' type='checkbox' value='3' /> 
    <input name='checks[]' type='checkbox' value='5' /> 
 -->
 <div class="containersBtons">

 <div id="Numero" class="NumeroCorreos">
     <div class="containerNum">
        <h4>Se selecciono   </h4><span class="num fs-2" id="numeroCorreos"></span><h4>Correos</h4>
    </div>
 </div>
 <div class="formularioSolicitud">

<form action="Solicitud.php" method="POST" >
    
    <input type="hidden" id="entrar" name="entrar">
    <input type="hidden" id="Number" name="Number">
    <!-- <input name="checks[]" type="checkbox" class="chk-box"> -->
    <button class="btn btn-success pt-4 pb-4 pl-4 pr-4">SIGUIENTE <i class="fas fa-arrow-right"></i></button>
</form>

</div>

 </div>
 