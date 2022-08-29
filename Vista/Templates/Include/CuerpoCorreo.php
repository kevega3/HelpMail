<h1 class="TitulosCorreo">Cuerpo del Correo </h1>
<h3>Se seleccionaron <span class="text-primary"><?php echo $Number?></span> Correos</h3>


<div class="contenedorBody">
    <!-- Grupo: Asunto -->
    <div class="formulario__grupo" id="grupo__Asunto"> 
        <label for="Asunto" class="formulario__label">Asunto <a data-toggle="popover"
                                title="Escriba el Asunto del Correo a Enviar"
                                data-content="Some content inside the popover" class="Comentario">?</a> </label>
        <div class="formulario__grupo-input">
            <input type="text" class="formulario__input" name="Asunto" id="Asunto"
                placeholder="Agregue el asunto de su correo">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
        </div>
        <p class="formulario__input-error">El asunto debe tener un minimo de 5 caracteres y un maximo de 25</p>
    </div>
    <!-- Grupo: Header -->
    <div class="formulario__grupo" id="grupo__Header"> 
        <label for="Header" class="formulario__label">Encabezado <a data-toggle="popover"
                                title="Este sera el parafo principal de su correo"
                                data-content="Some content inside the popover" class="Comentario">?</a> </label>
        <div class="formulario__grupo-input">
            <input type="text" class="formulario__input" name="Header" id="Header"
                placeholder="Agregue un encabezado">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
        </div>
        <p class="formulario__input-error">El encabezado debe tener un minimo de 5 caracteres y un maximo de 25</p>
    </div>
    
    <div class="formulario__grupo" id="grupo__Asunto"> 
        <label for="Header" class="formulario__label">Adjunte aquí el contenido de su correo <a data-toggle="popover"
                                title="Escriba aquí lo que usted quiere "
                                data-content="Some content inside the popover" class="Comentario">?</a> </label>
        <div class="formulario__grupo-input">
        <div id="editor" style="height: 200px"></div>
        <textarea name="Test" id="test" cols="30" rows="10" style="display:none;"></textarea>
        </div>
    </div>




</div>