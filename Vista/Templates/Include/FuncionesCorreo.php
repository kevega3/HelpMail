<h1 class="TitulosCorreo pb-4">Plantillas </h1>
<div class="contenedorBody">
    <center>
        <table>
            <thead class="invisible">
                <th>
                    Invis
                </th>
                <th>
                    Invisiblessss
                </th>
               
            </thead>

            <tbody class="plantillaTabla">
                <tr>
                    <td><input type="radio" name="Plantilla" value="N/A" onclick="botonesSi()"  checked></td>
                    <td><label for="btnVer">Sin Plantilla</label></td>
                </tr>
                <tr>
                    <td><input  id="AceptoPlantilla" type="radio" name="Plantilla" onclick="botonesSi()" value="Azul"></td>
                    <td><label for="btnVer">Plantilla 1</label></td>
                </tr>
                <tr>
                    <td><input   id="AceptoPlantillas" type="radio" name="Plantilla" onclick="botonesSi()" value="black"></td>
                    <td><label for="btnVer">Plantilla 2</label></td>
                </tr>
                <tr>
                    <td><input   id="AceptoPlantillasS" type="radio" name="Plantilla" onclick="botonesSi()" value="cafe"></td>

                    <td><label for="btnVer">Plantilla 3</label></td>
                   
                </tr>
                <tr class="invisible">
                    <td><input type="radio" class=""></td>
                </tr>
            </tbody>
        </table>


    </center>
<div class="ContenedorBotonesSi">
    <h4 class="colortitulos">Botones</h4>
    <p> <span class="colortitulos">¿</span> Contiene boton <span class="colortitulos">?</span< /p>
            <center>
                <label for="si">Si</label>
                <input name="Pregunta" onclick="BtnSi()" type="radio" value="Si">
                <label for="no">No</label>
                <input name="Pregunta" onclick="BtnNo()" type="radio" checked>
            </center>

            <div class="btnES">
                <!-- Grupo: Link -->
                <div class="formulario__grupo" id="grupo__link"> <label for="link"
                        class="formulario__label">Link <a data-toggle="popover"
                                title="Agregue aquí el link de redirreccion"
                                data-content="Some content inside the popover" class="Comentario">?</a></label>
                    <div class="formulario__grupo-input">
                        <input type="text" class="formulario__input" name="link" id="link"
                            placeholder="Agregue aquí el link de su boton" require>
                    </div>
                </div>
                <!-- Grupo: Nombre Btn -->
                <div class="formulario__grupo" id="grupo__NombreBtn"> <label for="NombreBtn"
                        class="formulario__label">Nombre del boton <a data-toggle="popover"
                                title="Como quiere que se llame el boton de su correo ? "
                                data-content="Some content inside the popover" class="Comentario">?</a></label>
                    <div class="formulario__grupo-input">
                        <input type="text" class="formulario__input" name="NombreBtn" id="NombreBtn"
                            placeholder="Agregue aquí el nombre de su bton">
                    </div>
                </div>


</div>    
            </div>
            <div class="ContenedorSolicitar">
                <input type="hidden" name="Number" value="<?php echo $Number ?>">
                <input type="hidden" name="entrar" value="<?php echo $entrar ?>">
                <input type="submit" class="btnSolicitar" onclick="CrearCuerpoCorreo()">
                <br><br>
                <div class="formulario__mensaje" id="formulario__mensaje">
				<p>
                    <center>
                    <i class="fas fa-exclamation-triangle"></i>    <b>Complete el formulario</b>
                    </center>
                </p>
			</div>
            </div>