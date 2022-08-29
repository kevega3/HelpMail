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
            title: 'Se Elimino correctamente',
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