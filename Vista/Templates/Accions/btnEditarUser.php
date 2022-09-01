<!-- Modal -->
<div class="modal fade"  id="update_user_modal"tabindex="-1" aria-labelledby="EditarUser" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header HeaderAdd">
        <h5 class="modal-title" id="exampleModalLabel">Editar Usuario</h5>
        <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="formulario__grupo">
                    <label class="formulario__label" for="NombresS">Nombre</label>
                    <div class="formulario__grupo-input">
                        <input type="text" id="NombresS" name="NombresS"   class="form-control"  />
                    </div>
                </div>

                <div class="formulario__grupo">
                    <label class="formulario__label" for="ApellidoSS">Apellido</label>
                    <div class="formulario__grupo-input">
                        <input type="text" id="ApellidoSS" name="ApellidoSS" value="" class="form-control"  />
                    </div>
                </div>

                <div class="formulario__grupo">
                    <label class="formulario__label" for="CC">Cedula de ciudadania</label>
                    <div class="formulario__grupo-input">
                        <input type="text" id="CCS"  name="CCS" class="form-control"  />
                    </div>
                </div>

                <div class="formulario__grupo">
                    <label class="formulario__label" for="Rolss">Rol</label>
                    <div class="formulario__grupo-input Selectma">

                    <i class="fas fa-caret-down iconoma"></i>
                        <!-- <input type="text" id="Rolss" name="Rolss" class="form-control"  /> -->
                        <select name="Rolss" id="Rolss" class="form-control ">
                          
                        <option disabled selected value="" >Seleccionar</option>
                        <option value="Administrador" >Administrador</option>
                        <option value="Administrador BD" >Administrador BD</option>
                        <option value="Empleado" >Empleado</option>
                        </select>
                    </div>
                </div>

                <div class="formulario__grupo">
                    <label class="formulario__label" for="CorreoSS">Correo</label>
                    <div class="formulario__grupo-input">
                        <input type="text" id="CorreoSS" name="CorreoSS" class="form-control"  />
                    </div>
                </div>

                <div class="formulario__grupo">
                    <label class="formulario__label" for="CorreoSS">Clave Nueva</label>
                    <div class="formulario__grupo-input">
                        <input type="text" id="ClaveSS" name="ClaveSS" class="form-control"  />
                    </div>
                </div>
  
        <input type="hidden" id="hidden_user_id" >

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success" onclick="guardarCambios()" >Guardar Cambios</button>
      </div>
    </div>
  </div>
</div>