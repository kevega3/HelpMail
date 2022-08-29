
$(document).ready(function () {
   
    var table = $('#example').DataTable({
      
        ajax: '../../Modelo/IT_Solicitudes.php',
        if(data = 'N/AN/A'){
            alert('No hay registros');
        },if(sadsa){
            columns:[
                { data: 'IdSolicitud' },
                  { data: 'FechaEnvio' },
                  { data: 'Nombres' },
                  { data: 'Apellido' },
                  { data: 'FechaHoy'},
                  { data: 'null', 'defaultContent': "<button class='BusId Buscar'><i class='fas fa-search text-white'></i></button>"}
              ]
        },
        
        "language": {
            "sProcessing": "Procesando...",
            "sLengthMenu": "Mostrar _MENU_ registros",
            "sZeroRecords": "No se encontraron resultados",
            "sEmptyTable": "NingÃºn dato disponible en esta tabla",
            "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix": "",
            "sSearch": "Buscar:",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Ãšltimo",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            },
            "buttons": {
                "copyTitle": 'Informacion copiada',
                "copyKeys": 'Use your keyboard or menu to select the copy command',
                "copySuccess": {
                    "_": '%d filas copiadas al portapapeles',
                    "1": '1 fila copiada al portapapeles'
                },

                "pageLength": {
                    "_": "Mostrar %d filas",
                    "-1": "Mostrar Todo"
                }
            }
        }
    });
   obtenerData("#example tbody", table);
});

var obtenerData= function(tbody,table){
    $(tbody).on("click", "button.BusId", function(){
        var data = table.row( $(this).parents("tr") ).data();
        var idSoli = data.IdSolicitud;
        const idSolicitud = window.btoa(idSoli);
        // window.location="Accions/VerSolicitudes.php?IdSol="+id;
        // window.open('Accions/VerSolicitudes.php?IdSol='+id+'_blank');
        window.open('infoSolicitudes.php?IdSol='+idSolicitud+ '', '_blank' );
    })
}




