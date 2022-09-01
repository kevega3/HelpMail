<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#AgregarUser">
  Crear <i class="fas fa-plus-circle"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="AgregarUser" tabindex="-1" aria-labelledby="AgregarUserLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header  HeaderAdd">
        <h5 class="modal-title" id="AgregarUserLabel">Crear Usuario</h5>
        <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" id="formulario" name="formulario">
        <!-- Grupo: Nombre -->
        <!-- <div class="formulario__grupo" id="grupo__Nombre">
          <label for="NombreUser" class="formulario__label">Nombres</label>
          <div class="formulario__grupo-input">
            <input type="text" class="formulario__input" name="NombreUser" id="NombreUser"
              placeholder="Digite el Nombre del usuario">
            <i class="formulario__validacion-estado fas fa-times-circle"></i>
          </div>
          <p class="formulario__input-error">En este campo tiene un minimo de 3 caracteres y no se puedes poner
            caracteres especiales</p>
        </div> -->
        <div class="formulario__grupo" id="grupo__NombreUser">
          <label for="NombreUser" class="formulario__label">Nombre</label>
          <div class="formulario__grupo-input">
            <input type="text" class="formulario__input" name="NombreUser" id="NombreUser"
              placeholder="Digite el Nombre del usuario">
            <i class="formulario__validacion-estado fas fa-times-circle"></i>
          </div>
          <p class="formulario__input-error">El Nombre tiene que ser de 4 a 16 dígitos y solo puede contener numeros,
            letras y guion bajo.</p>
        </div>


        <!-- Grupo: Apellido -->
        <div class="formulario__grupo" id="grupo__Apellido">
          <label for="Apellido" class="formulario__label">Apellidos</label>
          <div class="formulario__grupo-input">
            <input type="text" class="formulario__input" name="Apellido" id="Apellido"
              placeholder="Digite el Apellido del usuario">
            <i class="formulario__validacion-estado fas fa-times-circle"></i>
          </div>
          <p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros,
            letras y guion bajo.</p>
        </div>

        <!-- Grupo: Rol -->
        <div class="formulario__grupo" id="grupo__Rol">
          <label for="Rol" class="formulario__label">Rol</label>
          <div class="formulario__grupo-input">
            <select name="Rol" id="Rol" class="formulario__input" name="Rol" id="Rol">
              <option disabled selected value="">Seleccionar</option>
              <option value="Administrador" >Administrador</option>
                        <option value="Administrador BD" >Administrador BD</option>
                        <option value="Empleado" >Empleado</option>
            </select>
            <i class="formulario__validacion-estado fas fa-times-circle"></i>
          </div>
          <p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros,
            letras y guion bajo.</p>
        </div>

        <!-- Grupo: CC-->
        <div class="formulario__grupo" id="grupo__CC">
          <label for="CC" class="formulario__label">CC</label>
          <div class="formulario__grupo-input">
            <input type="text" class="formulario__input" name="CC" id="CC" placeholder="Cedula de Ciudadania ">
            <i class="formulario__validacion-estado fas fa-times-circle"></i>
          </div>
          <p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros,
            letras y guion bajo.</p>
        </div>

        <!-- Grupo: Clave-->
        <div class="formulario__grupo" id="grupo__Clave">
          <label for="usuario" class="formulario__label"> Clave (Provisional)</label>
          <div class="formulario__grupo-input">
            <input type="text" class="formulario__input" name="Clave" id="Clave"
              placeholder="Esta clave sera provisional">
            <i class="formulario__validacion-estado fas fa-times-circle"></i>
          </div>
          <p class="formulario__input-error">Esta clave debe tener un minimo de 5 caracteres</p>
        </div>

        <!-- Grupo: Correo-->
        <div class="formulario__grupo" id="grupo__Correo">
          <label for="usuario" class="formulario__label">Correo</label>
          <div class="formulario__grupo-input">
            <input type="text" class="formulario__input" name="Correo" id="Correo" placeholder="lumsi@email.com">
            <i class="formulario__validacion-estado fas fa-times-circle"></i>
          </div>
          <p class="formulario__input-error">Este campo tiene un maximo de 6 caracteres y un maximo de 20</p>
        </div>
        <br>
        <div class="formulario__mensaje" id="formulario__mensaje">
          <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <div class="formulario__grupo formulario__grupo-btn-enviar">
            <button type="submit" class="btn btn-primary">Enviar</button>
          </div>
        </div>
      
        
          </form>
      </div>
      
    </div>
  </div>
</div>