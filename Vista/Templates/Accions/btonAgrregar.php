<!-- Modal -->
<div class="modal fade" id="addMail" tabindex="-1" aria-labelledby="addMailLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-cuerpo">
                <!-- <form action="../../Modelo/Agregar.php" class="form" method="POST"> -->
                    <div  class="form">
                    <h1 class="text-center">Agregar un Correo</h1>
                    <!-- Progress bar -->
                    <div class="progressbar">
                        <div class="progress" id="progress"></div>

                        <div class="progress-step progress-step-active" data-title="Personal"></div>
                        <div class="progress-step" data-title="Organizacion"></div>
                        <div class="progress-step" data-title="Enfermedades"></div>
                        <div class="progress-step" data-title="funciones"></div>
                    </div>

                    <!-- Steps -->
                    <div class="form-step form-step-active">
                        <div class="input-group">
                            <label class="labelForm" for="Nombre"><b> Nombre </b></label>
                            <input class="inputForm validarAD" type="text" name="NombresAD" id="NombresAD" />
                        </div>
                        <div class="input-group">
                            <label class="labelForm" for="Apellido"><b>Apellido</b></label>
                            <input class="inputForm validarAD" type="text" name="ApellidosAD" id="ApellidosAD" />
                        </div>

                        <div class="input-group">
                            <label class="labelForm" for="Correo"><b>Correo</b></label>
                            <input class="inputForm validarAD" type="text" name="CorreosAD" id="CorreosAD" />
                        </div>
                        <div class="">
                            <a class="btnForm btn-next width-50 ml-auto"><i class="fas fa-arrow-right aument"></i></a>
                        </div>
                    </div>
                    <div class="form-step"> 
                    <div class="input-group">
                            <label class="labelForm" for="EntidadsAD"><b>Tipo Entidad</b></label>
                            <select class="inputForm validarAD" name="EntidadsAD" id="EntidadsAD">
                            <option disabled selected value="">Seleccionar</option>
                            <?php  
                                $BuscarEnti="SELECT * FROM TipoEntidad";

                                $res=sqlsrv_query($conn,$BuscarEnti);

                                while ($row=sqlsrv_fetch_array($res)) { ?>
                                <option class="inputForm" value="<?php echo $row['IdEntidad']?>"><?php echo $row['NombreEntidad'] ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>           
                        <div class="input-group">
                            <label class="labelForm" for="OrganizacionsAD"><b>Nombre Organizacion</b></label>
                            <select class="inputForm validarAD" name="OrganizacionsAD" id="OrganizacionsAD" >
                            <option disabled selected value="">Seleccionar</option>
                            </select>
                            
                        </div>
                        <div class="input-group">
                            <label class="labelForm" for="TipoActividadsAD"><b>Tipo Actividad</b></label>
                            <select class="inputForm validarAD" name="TipoActividadsAD" id="TipoActividadsAD">
                            <option disabled selected value="">Seleccionar</option>
                            </select>
                        </div>
                        <div class="btns-group">
                            <a class="btnForm btn-prev"><i class="fas fa-arrow-left aument"></i></a>
                            <a class="btnForm btn-next"><i class="fas fa-arrow-right aument"></i></a>
                        </div>
                    </div>
                    <div class="form-step">
                        <div class="input-group">
                        <label class="labelForm" for="ERenalsAD"><b>Enfermedad Renal</b></label>
                            <select class="inputForm validarAD" name="ERenalsAD" id="ERenalsAD">
                            <option disabled selected value="">Seleccionar</option>
                            </select>
                        </div>
                        
                        <div class="input-group">
                        <label class="labelForm" for="EpatitissAD"><b>Enfermedad Epatitis C</b></label>
                            <select class="inputForm validarAD" name="EpatitissAD" id="EpatitissAD">
                            <option disabled selected value="">Seleccionar</option>
                            </select>
                        </div> 
                        <div class="input-group">
                        <label class="labelForm" for="EHemofiliasAD"><b>Enfermedad Hemofilia</b></label>
                            <select class="inputForm" name="EHemofiliasAD" id="EHemofiliasAD">
                            <option disabled selected value="">Seleccionar</option>
                            </select>
                        </div>
                        <div class="btns-group">
                            <a class="btnForm btn-prev"><i class="fas fa-arrow-left aument"></i></a>
                            <a class="btnForm btn-next"><i class="fas fa-arrow-right aument"></i></a>
                        </div>
                    </div>
                    <div class="form-step">
                    <div class="input-group">
                        <label class="labelForm" for="EArtritissAD"><b>Enfermedad Artritis</b></label>
                            <select class="inputForm validarAD" name="EArtritissAD" id="EArtritissAD">
                            <option disabled selected value="">Seleccionar</option>
                            </select>
                        </div>
                        <div class="input-group">
                        <label class="labelForm" for="VHsAD"><b>Enfermedad VH</b></label>
                            <select class="inputForm" name="VHsAD" id="VHsAD">
                            <option disabled selected value="">Seleccionar</option>
                            </select>
                        </div>
                        <div class="input-group">
                        <label class="labelForm" for="CancersAD"><b>Enfermedad Cancer</b></label>
                            <select class="inputForm validarAD" name="CancersAD" id="CancersAD">
                            <option disabled selected value="">Seleccionar</option>
                            </select>
                        </div>

                        <div class="input-group">
                        <label class="labelForm" for="CoordinacionsAD"><b>Coordinacion</b></label>
                            <select class="inputForm validarAD" name="CoordinacionsAD" id="CoordinacionsAD">
                            <option disabled selected value="">Seleccionar</option>
                            </select>
                        </div>
                        <div class="btns-group">
                            <a  class="btnForm btn-prev"><i class="fas fa-arrow-left aument"></i></a>
                            <button class="btnEnviarform" onclick="validarEFE()">
                                <i class="fas fa-user-plus aument"></i>
                            </button>
                        </div>
                    </div>
                </div>
                


            </div>

        </div>
    </div>
</div>