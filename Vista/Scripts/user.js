







$(function () {
    
        get_users();
    
    $(".check").on("click", function ()
    // $(".form-check-input").on("click", function ()
    {
        get_users();
    });

});


function identificarAdmin(){
    if(Rol == "Administrador BD"){
        $('.VerBtons').addClass("vista");
    }
}

function get_users() {
    let form = $("#multi-filters")
    $.ajax(
        {
            type: "POST",
            url: "../../Modelo/Filter.php",
            data: form.serialize(),
            success: function (data) {
                
                $("#filters-result").html("");


                $.each(JSON.parse(data), function (key, User) {
                    let row = "" +
                        "<tr>" +
                        "<td> <input name='checks[]' type='checkbox' value=" + User.Correo + "  class='chk-box' checked/></td>" +
                        "<td>" + User.Nombre + " " + User.Apellido + "</td> " +
                        "<td>" + User.NombreEntidad + "</td> " +
                        "<td>" + User.NombreActividad + "</td> " +
                        "<td>" + User.NombreOrg + "</td> " +
                        "<td class='VerBtons'> <center><button  id='Eliminar' class='btn btn-danger' onclick='Delete(" + key + ")' ><i class='fas fa-minus-circle'></i></button> <button id='Edit' class='btn btn-secondary' onclick='Edit(" + key + ")'  ><i class='fas fa-edit'></i></button></center></td>"+
                        "</tr>";
                    $("#filters-result").append(row);
                });
                controlarChequeados();
                identificarAdmin();
            }
        }
    )
}


function controlarChequeados() {
    var arr = $('[name="checks[]"]:checked').map(function() {
      return this.value;
    }).get();
    var str = arr.join(',');
    var Number = (arr.length);
    $('.NumeroCorreos').addClass('vistaNum').removeClass('NumeroCorreos');
    $('#numeroCorreos').text(Number);
    document.getElementById("Number").value = Number;
    document.getElementById("entrar").value = str;
  }
  
  $(document).on('click', '.chk-box', function() {
    $('[name="checks[]"]').change(controlarChequeados);
});




function EPS() {
    if ($('#type_1').prop('checked')) {
        $('.EPS').addClass("vista");
        $(".box-EPS").attr("checked", "checked");

    }
    else {
        $('.EPS').removeClass("vista");
        $(".box-EPS").removeAttr("checked");
    }
}
function IPS() {
    if ($('#type_2').prop('checked')) {
        $('.IPS').addClass("vista");
        $(".box-IPS").attr("checked", "checked");
    }
    else {
        $('.IPS').removeClass("vista");
        $(".box-IPS").removeAttr("checked");
    }
}


function CAC() {
    if ($('#type_3').prop('checked')) {
        $('.CAC').addClass("vista");
        $(".box-CAC").attr("checked", "checked");
    }
    else {
        $('.CAC').removeClass("vista");
        $(".box-CAC").removeAttr("checked");
    }
}


function PPUBLICAS() {
    if ($('#type_4').prop('checked')) {
        $('.PPUBLICA').addClass("vista");
    }
    else {
        $('.PPUBLICA').removeClass("vista");
    }
}

function EAPB() {
    if ($('#type_5').prop('checked')) {
        $('.EAPB').addClass("vista");
    }
    else {
        $('.EAPB').removeClass("vista");
    }
}
