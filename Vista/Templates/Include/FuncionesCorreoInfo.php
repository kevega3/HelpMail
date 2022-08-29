<h1 class="TitulosCorreo pb-4">Información</h1>
<div class="contenedorBody">
    <!-- Grupo: Fecha -->
    <div class="formulario__grupo" id="grupo__Asunto"> 
        <label for="Asunto" class="formulario__label">Fecha a Enviar</label>
        <div class="formulario__grupo-input formulario__grupo-correcto">
            <label class="formulario__input " ><?php echo $FechaEnvio ?></label>   
                <i class="formulario__validacion-estado fas fa-check-circle"></i>
        </div>

    </div>
    
<br><br>
    <!-- Grupo: FechaCreado -->
    <div class="formulario__grupo" id="grupo__Asunto"> 
        <label for="Asunto" class="formulario__label">Fecha de Creacion</label>
        <div class="formulario__grupo-input formulario__grupo-correcto">
            <label class="formulario__input " ><?php echo $FechaEnvio ?></label>   
                <i class="formulario__validacion-estado fas fa-check-circle"></i>
        </div>

    </div>
    <br><br>
    <div class="formulario__grupo" id="grupo__Asunto"> 
        <label for="Asunto" class="formulario__label">Descripcion Correo</label>
        <div class="formulario__grupo-input formulario__grupo-correcto">
            <div  class="ContenidoDescripcion" >
                <?php echo $DescipcionCorreo?>
            </div>
                <i class="formulario__validacion-estado fas fa-check-circle"></i>
        </div>

    </div>
    <br>
        
    <?php if ($Estado == "Aceptado"){ ?>
      <div class="formulario__grupo" id="grupo__Asunto"> 
        <label for="Asunto" class="formulario__label">Estado</label>
        <div class="formulario__grupo-input formulario__grupo-correcto">
            <div  class="ContenidoDescripcion" >
                <?php echo $Estado?>
            </div>
                <i class="formulario__validacion-estado fas fa-check-circle"></i>
        </div>
    </div>
    <?php }else if($Estado == "Negado"){ ?>
      <div class="formulario__grupo" id="grupo__Asunto"> 
        <label for="Asunto" class="formulario__label">Estado</label>
        <div class="formulario__grupo-input formulario__grupo-incorrecto">
            <div  class="ContenidoDescripcion" >
                <?php echo $Estado?>
            </div>
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
        </div>
    </div>

    <div class="formulario__grupo" id="grupo__Asunto"> 
        <label for="Asunto" class="formulario__label">Descripcion Rechazo</label>
        <div class="formulario__grupo-input formulario__grupo-incorrecto">
            <div  class="ContenidoDescripcion" >
                <?php echo $DescripcionNegacion?>
            </div>
                <i class="formulario__validacion-estado fas fa-exclamation-circle"></i>
        </div>
    </div>
      <?php }else{ ?>
        <div class="formulario__grupo" id="grupo__Asunto"> 
        <label for="Asunto" class="formulario__label">Estado</label>
        <div class="formulario__grupo-input formulario__grupo-correcto">
            <div  class="ContenidoDescripcion" >
                <?php echo $Estado?>
            </div>
                <i class="formulario__validacion-estado fas fa-check-circle"></i>
        </div>
    </div>
    <br>
       <?php } if($Rol=="Administrador" || $Rol=="Administrador BD"){ ?>
        <br>
          <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Negar">Negar</button>
          <button onclick="AceptarSoli()" class="btn btn-success">Aceptar</button>
    <?php } ?>
</div>
</div>


<!-- Modal -->
<div class="modal fade" id="Negar" tabindex="-1" aria-labelledby="NegarModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="NegarModalLabel">Niega la solicitud</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
                <div id="editor" style="height: 200px"></div>
                <textarea name="Test" id="test" cols="30" rows="10" style="display:none;"></textarea>
                <input type="hidden" value="<?php echo $IdSol?>" name="idsoli" id="idsoli">
                <input type="hidden" value="<?php echo $CorreoUser?>"name="CorreoUser" id="CorreoUser">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" onclick="NegarSoli()" class="btn btn-success">Enviar</button>
      </div>
    </div>
  </div>
</div>
