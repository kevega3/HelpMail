$(document).ready(function(){
    $("#EntidadsAD").on('change', function () {
        $("#EntidadsAD option:selected").each(function () {
            elegido=$(this).val();
            $.post("../../Modelo/modeloEps.php", { elegido: elegido }, function(data){
                $("#OrganizacionsAD").html(data);
            });			


            elegido=$(this).val();
            $.post("../../Modelo/modeloAct.php", { elegido: elegido }, function(data){
                $("#TipoActividadsAD").html(data);
            });	
            
            elegido=$(this).val();
            $.post("../../Modelo/modeloEnRenal.php", { elegido: elegido }, function(data){
                $("#ERenalsAD").html(data);
            });	

            elegido=$(this).val();
            $.post("../../Modelo/modeloEpatitis.php", { elegido: elegido }, function(data){
                $("#EpatitissAD").html(data);
            });	

            elegido=$(this).val();
            $.post("../../Modelo/modeloHepa.php", { elegido: elegido }, function(data){
                $("#EHemofiliasAD").html(data);
            });	

            
            elegido=$(this).val();
            $.post("../../Modelo/modeloAtri.php", { elegido: elegido }, function(data){
                $("#EArtritissAD").html(data);
            });	
            
            
            elegido=$(this).val();
            $.post("../../Modelo/modeloVh.php", { elegido: elegido }, function(data){
                $("#VHsAD").html(data);
            });	

            
            elegido=$(this).val();
            $.post("../../Modelo/modeloCancer.php", { elegido: elegido }, function(data){
                $("#CancersAD").html(data);
            });	

            elegido=$(this).val();
            $.post("../../Modelo/ModeloCord.php", { elegido: elegido }, function(data){
                $("#CoordinacionsAD").html(data);
            });	
            
        });
   });
});



