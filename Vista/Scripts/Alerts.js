
function Delete(idEliminar) {
  const borrar = window.btoa(idEliminar);
  Swal.fire({
    title: 'Desea Cambiar el estado de este registro?',
    text: "Si lo cambia  este registro no lo podra ver",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Borrar',

  }).then((result) => {
    if (result.isConfirmed) {
      $.post('../../Modelo/Eliminar.php', {
        borrar: borrar
      }, function (data, status) {
        get_users();
        Swal.fire(
          'Eliminado!',
          'Al usuario se le cambio de estado exitosamente',
          'success'
        )
      }
      )

    }
    // window.location = "../../Modelo/Eliminar.php?borrar=" + borrar + "&IdUser=" + idUser;

  }
  );
}


function Edit(id) {
  $("#hidden_user_id").val(id);
  $.post("../../Modelo/EncontrarDatos.php", {
    id: id
  },
    function (data, status) {

      var user = JSON.parse(data);

      $("#Nombre").val(user.Nombre);
      $("#Apellido").val(user.Apellido);
      $("#IdEntidad").val(user.IdEntidad);
      $("#Correo").val(user.Correo);
      $("#IdOrg").val(user.IdOrg);
      $("#IdActividad").val(user.IdActividad);
      $("#IdEnRenal").val(user.IdEnRenal);
      $("#Apellido").val(user.Apellido);
      $("#IdEntidad").val(user.IdEntidad);
      $("#IdEpatitisC").val(user.IdEpatitisC);
      $("#IdHemofilia").val(user.IdHemofilia);
      $("#IdArtritis").val(user.IdArtritis);
      $("#IdVH").val(user.IdVH);
      $("#IdCordinacion").val(user.IdCordinacion);
    }
  );

  $("#update_user_modal").modal("show");
}

function UpdateUserDetails() {
  Swal.fire({
    title: '¿Desea modificar Este registro?',
    text: "Si lo desea modificar no volvera a recuperar los datos",
    icon: 'question',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Actualizar',

  }).then((result) => {
    if (result.isConfirmed) {
      var Nombre = $("#Nombre").val();
      var Apellido = $("#Apellido").val();
      var IdEntidad = $("#IdEntidad").val();
      var Correo = $("#Correo").val();
      var IdOrg = $("#IdOrg").val();
      var IdActividad = $("#IdActividad").val();
      var IdEnRenal = $("#IdEnRenal").val();
      var IdEpatitisC = $("#IdEpatitisC").val();
      var IdHemofilia = $("#IdHemofilia").val();
      var IdArtritis = $("#IdArtritis").val();
      var IdVH = $("#IdVH").val();
      var IdCordinacion = $("#IdCordinacion").val();
      // get hidden field value
      var id = $("#hidden_user_id").val();
      if (Nombre == '' || Apellido == '' || Correo == '') {
        Swal.fire({
          position: 'center',
          icon: 'error',
          title: 'LLene todos los campos',
          showConfirmButton: false,
          timer: 1500
        });
      } else {

        $.post("../../Modelo/Actualizar.php", {
          id: id,
          Nombre: Nombre,
          Apellido: Apellido,
          IdEntidad: IdEntidad,
          Correo: Correo,
          IdOrg: IdOrg,
          IdActividad: IdActividad,
          IdEnRenal: IdEnRenal,

          IdEpatitisC: IdEpatitisC,
          IdHemofilia: IdHemofilia,
          IdArtritis: IdArtritis,
          IdVH: IdVH,
          IdCordinacion: IdCordinacion
        },
          function (data, status) {
            $("#update_user_modal").modal("hide");
            get_users();
            Swal.fire({
              position: 'center',
              icon: 'success',
              title: 'Usuario Editado',
              showConfirmButton: false,
              timer: 1500
            })
          }
        );




      }




    }
  });






}

function CrearSolicitud() {
  console.clear();
  var Test = quill.root.innerHTML;
  var FechaEnvio = $("#FechaEnvio").val();
  document.getElementById("test").value = Test;
  var control = true;
  var arr = $(".validar");

  if (arr.length > 0) {
    for (i = 0; i < arr.length; i++) {
      if (arr[i].value === '' || arr[i].value === null || Test == "<p><br></p>") {
        //alert("El campo '"+  arr[i].id + "' no puede estar vacio"); //Si quieres que imprima en específico que campo no puede dejar vacío
        Swal.fire({
          icon: 'error',
          title: 'Debes llenar todo el formulario',
          text: 'No podemos seguir si no llenas todos los campos',
        })
        control = false;
        break;
      }
    }
  }
  if (control) {
    var id = $("#idUser").val();
    var ContenidoCorreo = $("#ContenidoCorreo").val();
    var FechaEnvio = $("#FechaEnvio").val();
    var IdCorreos = $("#IdCorreos").val();
    var Number = $("#Number").val();
    var Asunto = $("#Asunto").val();
    let loader = document.querySelector(".loader");
    loader.classList.add("active");
    $.post("../../../Modelo/CrearSolicitud.php", {
      Test: Test,
      id: id,
      ContenidoCorreo: ContenidoCorreo,
      FechaEnvio: FechaEnvio,
      IdCorreos: IdCorreos,
      Number: Number,
      Asunto: Asunto
    },
      function (data, status) {
        loader.classList.remove("active");
        Swal.fire({

          position: 'center',
          icon: 'success',
          title: 'Solicitud Creada',
          showConfirmButton: false,
          timer: 1500
        });
        setTimeout("window.location='../Solicitudes.php'", 1500);
      })
  }
}

function CrearCorreo() {
  var NombresAD = $("#NombresAD").val();
  var ApellidosAD = $("#ApellidosAD").val();
  var EntidadsAD = $("#EntidadsAD").val();
  var OrganizacionsAD = $("#OrganizacionsAD").val();
  var TipoActividadsAD = $("#TipoActividadsAD").val();
  var CorreosAD = $("#CorreosAD").val();
  var ERenalsAD = $("#ERenalsAD").val();
  var EpatitissAD = $("#EpatitissAD").val();
  var EHemofiliasAD = $("#EHemofiliasAD").val();
  var EArtritissAD = $("#EArtritissAD").val();
  var VHsAD = $("#VHsAD").val();
  var CancersAD = $("#CancersAD").val();
  var CoordinacionsAD = $("#CoordinacionsAD").val();


  if (controlVal) {
    $.post("../../Modelo/Agregar.php", {
      NombresAD: NombresAD,
      ApellidosAD: ApellidosAD,
      EntidadsAD: EntidadsAD,
      OrganizacionsAD: OrganizacionsAD,
      TipoActividadsAD: TipoActividadsAD,
      CorreosAD: CorreosAD,
      ERenalsAD: ERenalsAD,
      EpatitissAD: EpatitissAD,
      EHemofiliasAD: EHemofiliasAD,
      EArtritissAD: EArtritissAD,
      VHsAD: VHsAD,
      CancersAD: CancersAD,
      CoordinacionsAD: CoordinacionsAD
    },
      function (data, status) {

        Swal.fire({
          position: 'center',
          icon: 'success',
          title: 'Usuario Creado',
          showConfirmButton: false,
          timer: 1500
        });
        $("#addMail").modal("hide");
        get_users();
        $("#NombresAD").val("");
        $("#ApellidosAD").val("");
        $("#EntidadsAD").val("");
        $("#OrganizacionsAD").val("");
        $("#TipoActividadsAD").val("");
        $("#CorreosAD").val("");
        $("#ERenalsAD").val("");
        $("#EpatitissAD").val("");
        $("#EHemofiliasAD").val("");
        $("#EArtritissAD").val("");
        $("#VHsAD").val("");
        $("#CancersAD").val("");
        $("#CoordinacionsAD").val("");
      })
  }
}


function validarEFE() {
  // var NombresAD = $("#NombresAD").val();
  var control = true;
  if ($("#NombresAD").val() === '' || $("#ApellidosAD").val() === '' || $("#CorreosAD").val() === '' || $("#EntidadsAD").val() == null) {
    Swal.fire({
      icon: 'error',
      title: 'Debes llenar todo el formulario',
      text: 'No podemos seguir si no llenas todos los campos',
    })
    control = false;
  }
  if (control) {
    var NombresAD = $("#NombresAD").val();
    var ApellidosAD = $("#ApellidosAD").val();
    var EntidadsAD = $("#EntidadsAD").val();
    var OrganizacionsAD = $("#OrganizacionsAD").val();
    var TipoActividadsAD = $("#TipoActividadsAD").val();
    var CorreosAD = $("#CorreosAD").val();
    var ERenalsAD = $("#ERenalsAD").val();
    var EpatitissAD = $("#EpatitissAD").val();
    var EHemofiliasAD = $("#EHemofiliasAD").val();
    var EArtritissAD = $("#EArtritissAD").val();
    var VHsAD = $("#VHsAD").val();
    var CancersAD = $("#CancersAD").val();
    var CoordinacionsAD = $("#CoordinacionsAD").val();

    $.post("../../Modelo/Agregar.php", {
      NombresAD: NombresAD,
      ApellidosAD: ApellidosAD,
      EntidadsAD: EntidadsAD,
      OrganizacionsAD: OrganizacionsAD,
      TipoActividadsAD: TipoActividadsAD,
      CorreosAD: CorreosAD,
      ERenalsAD: ERenalsAD,
      EpatitissAD: EpatitissAD,
      EHemofiliasAD: EHemofiliasAD,
      EArtritissAD: EArtritissAD,
      VHsAD: VHsAD,
      CancersAD: CancersAD,
      CoordinacionsAD: CoordinacionsAD
    },
      function (data, status) {

        Swal.fire({
          position: 'center',
          icon: 'success',
          title: 'Usuario Creado',
          showConfirmButton: false,
          timer: 1500
        });
        $("#addMail").modal("hide");
        get_users();
        $("#NombresAD").val("");
        $("#ApellidosAD").val("");
        $("#EntidadsAD").val("");
        $("#OrganizacionsAD").val("");
        $("#TipoActividadsAD").val("");
        $("#CorreosAD").val("");
        $("#ERenalsAD").val("");
        $("#EpatitissAD").val("");
        $("#EHemofiliasAD").val("");
        $("#EArtritissAD").val("");
        $("#VHsAD").val("");
        $("#CancersAD").val("");
        $("#CoordinacionsAD").val("");
      })

  }

}

function Solicitud() {
  var Number = $("#Number").val();
  console.log(Number);
}

// function CrearCuerpoCorreo(){
//   console.clear();
//   var Test = quill.root.innerHTML;
//   document.getElementById("test").value = Test;
// }

function BtnNo() {
  if ($('#si').prop('checked')) {
    $('.btnES').addClass("vista");

  }
  else {
    $('.btnES').removeClass("vista");
  }
}

function botonesSi() {
  if ($('#AceptoPlantilla').prop('checked') || $('#AceptoPlantillas').prop('checked') || $('#AceptoPlantillasS').prop('checked')) {
    $('.ContenedorBotonesSi').addClass("vista");
  }
  else {
    $('.ContenedorBotonesSi').removeClass("vista");
  }
}


function BtnSi() {
  if ($('#No').prop('checked')) {
    $('.btnES').removeClass("vista");

  }
  else {
    $('.btnES').addClass("vista");
  }
}



function Exit() {
  Swal.fire({
    title: 'Desea Cerrar Session ? ',
    text: 'Si la cierra no volvera a entrar',
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Si',

  }).then((result) => {
    if (result.isConfirmed) {
      window.location = "../../index.php";
    }
  });
}


function NegarSoli() {
  console.clear();
  var Test = quill.root.innerHTML;
  document.getElementById("test").value = Test;
  var idsoli = $("#idsoli").val();
  var correo = $("#CorreoUser").val();
  var control = true;
  if (Test == "<p><br></p>" || Test == "" || Test == null) {
    control = false;

  } if (control) {
    let loader = document.querySelector(".loader");
    loader.classList.add("active");
    $("#Negar").modal("hide");
    $.post("../../Modelo/NegarSoli.php", {
      Test: Test,
      idsoli: idsoli,
      correo: correo
    },
      function (data, status) {
        loader.classList.remove("active");
        Swal.fire({
          position: 'center',
          icon: 'success',
          title: 'Solicitud Negada',
          showConfirmButton: false,
          timer: 1500
        })
        setTimeout("window.location='Solicitudes.php'", 1500);
      })
  }


}


function AceptarSoli() {
  var idsoli = $("#idsoli").val();
  var correo = $("#CorreoUser").val();

  let loader = document.querySelector(".loader");
    loader.classList.add("active");
  $.post("../../Modelo/AceptarSoli.php", {
    idsoli: idsoli,
    correo: correo
  },
    function (data, status) {
      loader.classList.remove("active");
      Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Solicitud Aceptada',
        showConfirmButton: false,
        timer: 1500
      })
      setTimeout("window.location='Solicitudes.php'", 1500);
    })
  
}

// function saberEntidad(){
//   var saberEntidad = $("#TipoOrgaForm").val();
//   if(saberEntidad == '3'){
//     var Extra = " WHERE IdOrg = 11";
//     return Extra;
//   }else{
//    var Extra = " ";
//    return Extra;
//   }
// }


function saberEntidad() {
  //   var saberEntidad = $("#TipoOrgaForm").val();
  //   if(saberEntidad == '3'){
  //     var Extra = " WHERE IdOrg = 11";
  //     return Extra;
  //   }else{
  //    var Extra = " ";
  //    return Extra;
  //   }
  // }
}



