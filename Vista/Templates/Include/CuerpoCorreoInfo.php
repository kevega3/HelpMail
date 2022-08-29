<h1 class="TitulosCorreo">Solicitud N° <?php echo $IdSol?></h1>
<h3>Se seleccionaron <span class="text-primary"><?php echo $Number?></span> Correos</h3>


<div class="contenedorBody">
    <!-- Grupo: Asunto -->
    <div class="formulario__grupo" id="grupo__Asunto"> 
        <label for="Asunto" class="formulario__label">Asunto</label>
        <div class="formulario__grupo-input formulario__grupo-correcto">
            <label class="formulario__input " ><?php echo $AsuntoCorreo ?></label>   
                <i class="formulario__validacion-estado fas fa-check-circle"></i>
        </div>

    </div>

    <!-- Grupo: NOMBRE -->
    <div class="formulario__grupo" id="grupo__Asunto"> 
        <label for="Asunto" class="formulario__label">Creado por :</label>
        <div class="formulario__grupo-input formulario__grupo-correcto">
            <label class="formulario__input " ><?php echo $Nombres . " " .$Apellido ?></label>   
                <i class="formulario__validacion-estado fas fa-check-circle"></i>
        </div>

    </div>
    
    
    <div class="formulario__grupo" id="grupo__Asunto"> 
        <label for="Header" class="formulario__label">Correo a Enviar</label>
        <div class="formulario__grupo-input formulario__grupo-correcto">
            <div>
                <?php echo $ContenidoCorreo?>
            </div>
            
        </div>
    </div>




</div>