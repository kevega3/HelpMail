function AgregarUser() {
    var Nombre = $("#NombreUser").val();
    var Apellido = $("#Apellido").val();
    var Rol = $("#Rol").val();
    var CC = $("#CC").val();
    var Clave = $("#Clave").val();
    var Correo = $("#Correo").val();

    $.post("../../Modelo/AgregarUser.php", {
        Nombre: Nombre,
        Apellido: Apellido,
        Rol: Rol,
        CC: CC,
        Clave: Clave,
        Correo: Correo
    }, function (data, status) {
        Swal.fire({
            icon: 'success',
            title: 'Se agrego correctamente',
            showConfirmButton: false,
            timer: 1500
        });
        setTimeout("window.location='usuarios.php'", 1500);
    })

}


function EliminarUser(IdEliminar) {
    Swal.fire({
        title: '¿ Estas seguro ?',
        text: "Si eliminas este usuario no tienes forma de recuperarlo",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si,Eliminar'
    }).then((result) => {
        if (result.isConfirmed) {
            $.post("../../Modelo/EliminarUser.php", {
                id: IdEliminar
            }, function (data, status) {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Se elimino correctamente',
                    showConfirmButton: false,
                    timer: 1500
                });
                setTimeout("window.location='usuarios.php'", 1500);
            });
        }
    })
}


function EditarUser(id) {
    $("#hidden_user_id").val(id);
    $.post("../../Modelo/EncontrarDatosUser.php", {
        id: id
    },
        function (data, status) {
        var user = JSON.parse(data);
        $("#NombresS").val(user.Nombres);
        $("#ApellidoSS").val(user.Apellido);
        $("#CCS").val(user.CC);
        $("#Rolss").val(user.Rol);
        $("#CorreoSS").val(user.Correo);
    }
    );
    
    $("#update_user_modal").modal("show");
}




function guardarCambios() {
    




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
        var NombresS = $("#NombresS").val();
        var ApellidoSS = $("#ApellidoSS").val();
        var CCS = $("#CCS").val();
        var Rolss = $("#Rolss").val();
        var CorreoSS = $("#CorreoSS").val();
        var ClaveSS = $("#ClaveSS").val();
        var id = $("#hidden_user_id").val();
  
        $.post("../../Modelo/ActualizarUsuario.php", {
          id: id,
          NombresS: NombresS,
          ApellidoSS: ApellidoSS,
          CCS: CCS,
          Rolss: Rolss,
          CorreoSS: CorreoSS,
          ClaveSS : ClaveSS

        },
          function (data, status) {
            // hide modal popup
            $("#update_user_modal").modal("hide");
            // reload Users by using readRecords();
  
            // get_users();
            Swal.fire({
              position: 'center',
              icon: 'success',
              title: 'Usuario Editado',
              showConfirmButton: false,
              timer: 1500
            })
            setTimeout("window.location='usuarios.php'", 1500);
          }
        );
  
  
      }
    });
  
  
  
  
  
  
  }