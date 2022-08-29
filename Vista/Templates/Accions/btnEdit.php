<!-- Modal -->
<div class="modal fade" id="update_user_modal" tabindex="-1" aria-labelledby="myModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header headerModal">
                <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
                <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body MbodyColor">


                <div class="formulario__grupo">
                    <label class="formulario__label" for="Nombre">Nombre</label>
                    <div class="formulario__grupo-input">
                        <input type="text" id="Nombre" value="" class="form-control" require />
                    </div>
                </div>





                <div class="formulario__grupo">
                    <label class="formulario__label" for="Apellido">Apellido</label>
                    <div class="formulario__grupo-input">
                        <input type="text" id="Apellido" placeholder="Apellido" class="form-control" require />
                    </div>
                </div>





                <div class="formulario__grupo">
                    <label class="formulario__label" for="IdEntidad">Tipo Entidad</label>
                    
                        <select id="IdEntidad" class="formulario__input" >

                            <?php 
                $BuscarEntidad='SELECT DISTINCT * FROM  TipoEntidad';
                $res=sqlsrv_query($conn,$BuscarEntidad);
                while ($fila=sqlsrv_fetch_array($res)) {
                     
                    ?>
                            <option value="<?php echo $IdEntidad=$fila['IdEntidad']; ?>">
                                <?php echo $NombreEntidad=$fila['NombreEntidad']; ?></option>
                            <?php } ?>

                        </select>
                   
                </div>




                <div class="formulario__grupo">
                    <label class="formulario__label" for="Correo">Correo</label>
                    <div class="formulario__grupo-input">
                      <input type="text" id="Correo" class="formulario__input" require />
                    </div>
                </div>






                <div class="formulario__grupo">
                    <label class="formulario__label" for="IdOrg">Nombre Organizacion</label>
                    <select id="IdOrg" class="formulario__input" >
                        <?php 
                $BuscarOrg='SELECT DISTINCT * FROM  Organizacion';
                $res=sqlsrv_query($conn,$BuscarOrg);
                while ($fila=sqlsrv_fetch_array($res)) {
                     
                    ?>
                        <option value="<?php echo $IdOrg=$fila['IdOrg']; ?>">
                            <?php echo $NombreOrg=$fila['NombreOrg']; ?></option>
                        <?php } ?>

                    </select>
                </div>









                <div class="formulario__grupo">
                    <label class="formulario__label" for="IdActividad">Actividad en la Empresa</label>
                    <select id="IdActividad" class="formulario__input">
                        <?php 
                $BuscarActividad='SELECT DISTINCT * FROM  TipoActivadad';
                $res=sqlsrv_query($conn,$BuscarActividad);
                while ($fila=sqlsrv_fetch_array($res)) {
                     
                    ?>
                        <option value="<?php echo $IdActividad=$fila['IdActividad']; ?>">
                            <?php echo $NombreActividad=$fila['NombreActividad']; ?></option>
                        <?php } ?>

                    </select>
                </div>









                <div class="formulario__grupo">
                    <label class="formulario__label" for="IdEnRenal">Enfermedad Renal</label>
                    <select id="IdEnRenal" class="formulario__input">
                        <?php 
                $BuscarEnRenal='SELECT DISTINCT * FROM  EnRenal';
                $res=sqlsrv_query($conn,$BuscarEnRenal);
                while ($fila=sqlsrv_fetch_array($res)) {
                     
                    ?>
                        <option value="<?php echo $IdEnRenal=$fila['IdEnRenal']; ?>">
                            <?php echo $EnRenal=$fila['EnRenal']; ?></option>
                        <?php } ?>

                    </select>
                </div>











                <div class="formulario__grupo">
                    <label class="formulario__label" for="IdEpatitisC">EpatitisC</label>
                    <select id="IdEpatitisC" class="formulario__input">
                        <?php 
                $BuscarEpatitisC='SELECT DISTINCT * FROM  EpatitisC';
                $res=sqlsrv_query($conn,$BuscarEpatitisC);
                while ($fila=sqlsrv_fetch_array($res)) {
                     
                    ?>
                        <option value="<?php echo $IdEntidad=$fila['IdEpatitisC']; ?>">
                            <?php echo $NombreEntidad=$fila['EpatitisC']; ?></option>
                        <?php } ?>

                    </select>
                </div>









                <div class="formulario__grupo">
                    <label class="formulario__label" for="IdHemofilia">Hemofilia</label>
                    <select id="IdHemofilia" class="formulario__input">
                        <?php 
                $BuscarHemofilia='SELECT DISTINCT * FROM  Hemofilia';
                $res=sqlsrv_query($conn,$BuscarHemofilia);
                while ($fila=sqlsrv_fetch_array($res)) {
                     
                    ?>
                        <option value="<?php echo $IdHemofilia=$fila['IdHemofilia']; ?>">
                            <?php echo $Hemofilia=$fila['Hemofilia']; ?></option>
                        <?php } ?>

                    </select>
                </div>









                <div class="formulario__grupo">
                    <label  class="formulario__label" for="IdArtritis">Artritis</label>
                    <select id="IdArtritis" class="formulario__input">
                        <?php 
                $BuscarArtritis='SELECT DISTINCT * FROM  Artritis';
                $res=sqlsrv_query($conn,$BuscarArtritis);
                while ($fila=sqlsrv_fetch_array($res)) {
                     
                    ?>
                        <option value="<?php echo $IdArtritis=$fila['IdArtritis']; ?>">
                            <?php echo $Artritis=$fila['Artritis']; ?></option>
                        <?php } ?>

                    </select>
                </div>











                <div class="formulario__grupo">
                    <label class="formulario__label" for="IdVH">VH SIDA</label>
                    <select id="IdVH" class="formulario__input">
                        <?php 
                $BuscarVH='SELECT DISTINCT * FROM  VH';
                $res=sqlsrv_query($conn,$BuscarVH);
                while ($fila=sqlsrv_fetch_array($res)) {
                    ?>
                        <option value="<?php echo $IdVH=$fila['IdVH']; ?>"><?php echo $VH=$fila['VH']; ?></option>
                        <?php } ?>

                    </select>
                </div>

















                <div class="formulario__grupo">
                    <label class="formulario__label" for="IdCordinacion">Coordinacion</label>
                    <select id="IdCordinacion" class="formulario__input">
                        <?php 
                $BuscarCoordinacion='SELECT DISTINCT * FROM  Coordinacion';
                $res=sqlsrv_query($conn,$BuscarCoordinacion);
                while ($fila=sqlsrv_fetch_array($res)) {
                    ?>
                        <option value="<?php echo $IdCordinacion=$fila['IdCordinacion']; ?>">
                            <?php echo $DescripcionCoordinacion=$fila['DescripcionCoordinacion']; ?></option>
                        <?php } ?>

                    </select>
                </div>















            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-success" onclick="UpdateUserDetails()">Guardar cambios</button>
                <input type="hidden" id="hidden_user_id">
            </div>
        </div>
    </div>
</div>
<!-- // Modal -->